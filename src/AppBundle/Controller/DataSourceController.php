<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DataSourceController extends Controller
{
    /**
     * @Route("/", name="homepage")
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
            }
        }

        return $this->render('AppBundle:DataSource:extract.html.twig');
    }
}
