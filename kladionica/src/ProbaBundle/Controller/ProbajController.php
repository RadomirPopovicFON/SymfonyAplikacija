<?php

namespace ProbaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ProbaBundle\Entity\Probaj;
use ProbaBundle\Form\ProbajType;

/**
 * Probaj controller.
 *
 */
class ProbajController extends Controller
{
    /**
     * Lists all Probaj entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $probajs = $em->getRepository('ProbaBundle:Probaj')->findAll();

        return $this->render('probaj/index.html.twig', array(
            'probajs' => $probajs,
        ));
    }

    /**
     * Creates a new Probaj entity.
     *
     */
    public function newAction(Request $request)
    {
        $probaj = new Probaj();
        $form = $this->createForm('ProbaBundle\Form\ProbajType', $probaj);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($probaj);
            $em->flush();

            return $this->redirectToRoute('probaj_show', array('id' => $probaj->getId()));
        }

        return $this->render('probaj/new.html.twig', array(
            'probaj' => $probaj,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Probaj entity.
     *
     */
    public function showAction(Probaj $probaj)
    {
        $deleteForm = $this->createDeleteForm($probaj);

        return $this->render('probaj/show.html.twig', array(
            'probaj' => $probaj,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Probaj entity.
     *
     */
    public function editAction(Request $request, Probaj $probaj)
    {
        $deleteForm = $this->createDeleteForm($probaj);
        $editForm = $this->createForm('ProbaBundle\Form\ProbajType', $probaj);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($probaj);
            $em->flush();

            return $this->redirectToRoute('probaj_edit', array('id' => $probaj->getId()));
        }

        return $this->render('probaj/edit.html.twig', array(
            'probaj' => $probaj,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Probaj entity.
     *
     */
    public function deleteAction(Request $request, Probaj $probaj)
    {
        $form = $this->createDeleteForm($probaj);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($probaj);
            $em->flush();
        }

        return $this->redirectToRoute('probaj_index');
    }

    /**
     * Creates a form to delete a Probaj entity.
     *
     * @param Probaj $probaj The Probaj entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Probaj $probaj)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('probaj_delete', array('id' => $probaj->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
