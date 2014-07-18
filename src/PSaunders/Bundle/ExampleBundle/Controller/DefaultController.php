<?php

namespace PSaunders\Bundle\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class DefaultController extends Controller
{
    /**
     * Templating service
     * 
     * @var EngineInterface 
     */
    protected $templating;
    
    /**
     * Default controller controller
     * 
     * @param EngineInterface $templating
     */
    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }
    
    /**
     * Index action
     * 
     * @param string $name The string you wish to display on the screen
     * 
     * @return Response
     */
    public function indexAction($name)
    {
        return $this->templating->renderResponse(
            'PSaundersExampleBundle:Default:index.html.twig',
            [
                'name' => $name
            ]
        );
    }
}
