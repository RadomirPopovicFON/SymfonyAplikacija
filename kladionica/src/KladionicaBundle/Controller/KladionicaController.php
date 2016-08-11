<?php

namespace KladionicaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\DriverManager;

class KladionicaController extends Controller
{
    public function prikaziMetodaAction()
    {
    	$var = $this->getDoctrine()
        ->getRepository('KladionicaBundle:Kvota')
        ->findAll();

        $config = new \Doctrine\DBAL\Configuration();
		$params = array(
		    'dbname' => 'simfo',
		    'user' => 'root',
		    'password' => 'root',
		    'host' => 'localhost',
		    'driver' => 'pdo_mysql',
		);

		$conn = DriverManager::getConnection($params, $config);
		$sql = "SELECT * FROM kvota";
		$stmt = $conn->query($sql);
		$conn->delete('kvota ', array('id' => 1));
		//$conn->insert('user', array('username' => 'jwage'));
		//$conn->update('user', array('username' => 'jwage'), array('id' => 1));
        return $this->render('KladionicaBundle:Kvote:prikaz.html.twig', array("kk" => $var));

        //return $this->render('KladionicaBundle:Kvote:prikaz.html.twig', array());
    }
    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $kvotica = new Kvota();
        $kvotica->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        return $this->render('KladionicaBundle:Kvote:prikaz.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
?>