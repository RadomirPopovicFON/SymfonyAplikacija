<?php

namespace KladionicaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use KladionicaBundle\Entity\Kvota;
use KladionicaBundle\Form\KvotaType;

/**
 * Kvota controller.
 *
 */
class KvotaController extends Controller
{
    /**
     * Lists all Kvota entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $kvotas = $em->getRepository('KladionicaBundle:Kvota')->findAll();

        return $this->render('kvota/index.html.twig', array(
            'kvotas' => $kvotas,
        ));
    }

    /**
     * Creates a new Kvota entity.
     *
     */
    public function newAction(Request $request)
    {
        $kvotum = new Kvota();
        $form = $this->createForm('KladionicaBundle\Form\KvotaType', $kvotum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($kvotum);
            $em->flush();

            return $this->redirectToRoute('kvota_show', array('id' => $kvotum->getId()));
        }

        return $this->render('kvota/new.html.twig', array(
            'kvotum' => $kvotum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Kvota entity.
     *
     */
    public function showAction(Kvota $kvotum)
    {
        $deleteForm = $this->createDeleteForm($kvotum);

        return $this->render('kvota/show.html.twig', array(
            'kvotum' => $kvotum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Kvota entity.
     *
     */
    public function editAction(Request $request, Kvota $kvotum)
    {
        $deleteForm = $this->createDeleteForm($kvotum);
        $editForm = $this->createForm('KladionicaBundle\Form\KvotaType', $kvotum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($kvotum);
            $em->flush();

            return $this->redirectToRoute('kvota_edit', array('id' => $kvotum->getId()));
        }

        return $this->render('kvota/edit.html.twig', array(
            'kvotum' => $kvotum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Kvota entity.
     *
     */
    public function deleteAction(Request $request, Kvota $kvotum)
    {
        $form = $this->createDeleteForm($kvotum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($kvotum);
            $em->flush();
        }

        return $this->redirectToRoute('kvota_index');
    }

    /**
     * Creates a form to delete a Kvota entity.
     *
     * @param Kvota $kvotum The Kvota entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Kvota $kvotum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('kvota_delete', array('id' => $kvotum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
