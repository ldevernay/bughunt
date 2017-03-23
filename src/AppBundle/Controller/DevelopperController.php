<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Developper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DevelopperController extends Controller
{
  /**
  * Matches /developper/*
  *
  * @Route("/developper/{slug}", name="developper_view")
  */
  public function showAction($slug)
  {
    $developper = $this->getDoctrine()
    ->getRepository('AppBundle:Developper')
    ->find($slug);

    if (!$developper) {
      throw $this->createNotFoundException(
        'No developper found for id '.$slug
      );
    }

    return $this->render('developper/view.html.twig', array(
      'developper' => $developper,
    ));
  }
}
