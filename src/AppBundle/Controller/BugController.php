<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Bug;
use AppBundle\Entity\Developper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
}
