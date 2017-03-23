<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bug;
use AppBundle\Entity\Developper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BugController extends Controller
{
  /**
  * @Route("/bug_create", name="bug_create")
  */
  public function createAction(Request $request)
  {
    $bug = New Bug();
    $bug->setStatus('open');
    $bug->setTitle('Nouvelle exception');
    $bug->setDescription("Quand je lance mon code, une erreur s'affiche");
    $bug->setLanguages("PHP");
    $bug->setCreator(new Developper("Bob"));

    $em = $this->getDoctrine()->getManager();
    $em->persist($bug);
    $em->flush();

    return new Response("Saved new bug with id ".$bug->getId());
  }
  /**
  * @Route("/bug_new", name="bug_new")
  */
  public function newAction(Request $request)
    {
        // create a bug and give it some dummy data for this example
        $bug = New Bug();
        $bug->setStatus('open');
        $bug->setLanguages("PHP");
        $bug->setCreator(new Developper("Bob"));

        $form = $this->createFormBuilder($bug)
            ->add('title', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Créer Bug'))
            ->getForm();

            $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($bug);
                    $em->flush();

                    return $this->redirectToRoute('bug_list');
                }

        return $this->render('bug/form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

  /**
  * @Route("/bugs", name="bug_list")
  */
  public function listAction()
  {
    $repository = $this->getDoctrine()->getRepository('AppBundle:Bug');

    // find *all* bugs
    $bugs = $repository->findAll();

    return $this->render('bug/list.html.twig', array(
      'bugs' => $bugs,
    ));
  }

  /**
  * Matches /bug/*
  *
  * @Route("/bug/{slug}", name="bug_view")
  */
  public function showAction($slug)
  {
    $bug = $this->getDoctrine()
    ->getRepository('AppBundle:Bug')
    ->find($slug);

    if (!$bug) {
      throw $this->createNotFoundException(
        'No bug found for id '.$slug
      );
    }

    return $this->render('bug/view.html.twig', array(
      'bug' => $bug,
    ));
  }


    /**
    * Matches /bug_edit/*
    *
    * @Route("/bug_edit/{slug}", name="bug_edit")
    */
    public function editAction($slug, Request $request)
    {
      $bug = $this->getDoctrine()
      ->getRepository('AppBundle:Bug')
      ->find($slug);

      if (!$bug) {
        throw $this->createNotFoundException(
          'No bug found for id '.$slug
        );
      }

      $form = $this->createFormBuilder($bug)
          ->add('title', TextType::class)
          ->add('description', TextType::class)
          ->add('save', SubmitType::class, array('label' => 'Modifier Bug'))
          ->getForm();

          $form->handleRequest($request);

              if ($form->isSubmitted() && $form->isValid()) {
                  $em = $this->getDoctrine()->getManager();
                  $em->flush();

                  return $this->redirectToRoute('bug_list');
              }

      return $this->render('bug/form.html.twig', array(
          'form' => $form->createView(),
      ));
    }

    /**
    * Matches /bug_delete/*
    *
    * @Route("/bug_delete/{slug}", name="bug_delete")
    */
    public function deleteAction($slug)
    {
      $bug = $this->getDoctrine()
      ->getRepository('AppBundle:Bug')
      ->find($slug);

      if (!$bug) {
        throw $this->createNotFoundException(
          'No bug found for id '.$slug
        );
      }

          $em = $this->getDoctrine()->getManager();
          $em->remove($bug);
          $em->flush();

      return $this->redirectToRoute('bug_list');
    }

}
