<?php

namespace KladionicaBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use KladionicaBundle\Entity\KosarkaKvote;

/**
 * KosarkaKvote controller.
 *
 */
class KosarkaKvoteController extends Controller
{
    /**
     * Lists all KosarkaKvote entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $kosarkaKvotes = $em->getRepository('KladionicaBundle:KosarkaKvote')->findAll();

        return $this->render('kosarkakvote/index.html.twig', array(
            'kosarkaKvotes' => $kosarkaKvotes,
        ));
    }

    /**
     * Finds and displays a KosarkaKvote entity.
     *
     */
    public function showAction(KosarkaKvote $kosarkaKvote)
    {

        return $this->render('kosarkakvote/show.html.twig', array(
            'kosarkaKvote' => $kosarkaKvote,
        ));
    }
}
