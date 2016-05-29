<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DataSourceController extends Controller
{
    /**
     * @Route("/", name="datasource_extract")
     */
    public function extractAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $form = $request->get('form');
            $dataSource = $form['dataSource'];
            $type = $form['type'];
    
            if ($dataSource && $type) {
                $engine = $this->get('extraction.engine');
                $engine->run($dataSource, $type);
                return $this->redirectToRoute('datasource_list');
            }
        }

        return $this->render('AppBundle:DataSource:extract.html.twig');
    }

    /**
     * @Route("/list", name="datasource_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findBy([], null, 10);

        return $this->render('AppBundle:DataSource:list.html.twig', [
            'users' => $users
        ]);
    }
}
