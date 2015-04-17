<?php

namespace covoiturage\covoiturageBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use covoiturage\covoiturageBundle\Entity\etape;
use covoiturage\covoiturageBundle\Form\etapeType;

/**
 * etape controller.
 *
 */
class etapeController extends Controller
{

    /**
     * Lists all etape entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('covoiturageBundle:etape')->findAll();

        return $this->render('covoiturageBundle:etape:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new etape entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new etape();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gestion_etape_show', array('id' => $entity->getId())));
        }

        return $this->render('covoiturageBundle:etape:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a etape entity.
     *
     * @param etape $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(etape $entity)
    {
        $form = $this->createForm(new etapeType(), $entity, array(
            'action' => $this->generateUrl('gestion_etape_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new etape entity.
     *
     */
    public function newAction($id)
    {
        $entity = new etape();
        $form   = $this->createCreateForm($entity);

        return $this->render('covoiturageBundle:etape:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'id_annonce'=>$id,
        ));
    }

    /**
     * Finds and displays a etape entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('covoiturageBundle:etape')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etape entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('covoiturageBundle:etape:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing etape entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('covoiturageBundle:etape')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etape entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('covoiturageBundle:etape:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a etape entity.
    *
    * @param etape $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(etape $entity)
    {
        $form = $this->createForm(new etapeType(), $entity, array(
            'action' => $this->generateUrl('gestion_etape_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing etape entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('covoiturageBundle:etape')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find etape entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gestion_etape_edit', array('id' => $id)));
        }

        return $this->render('covoiturageBundle:etape:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a etape entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('covoiturageBundle:etape')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find etape entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gestion_etape'));
    }

    /**
     * Creates a form to delete a etape entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gestion_etape_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
