<?php

namespace PSaunders\Bundle\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use PSaunders\Bundle\ExampleBundle\Repository\UserRepository;

class DefaultController extends Controller
{
    /**
     * Templating service
     * 
     * @var EngineInterface 
     */
    protected $templating;
    
    /**
     * User repository
     * 
     * @var UserRepository
     */
    protected $userRepository;
    
    /**
     * Default controller constructor
     * 
     * @param EngineInterface $templating
     * @param UserRepository  $userRepository
     */
    public function __construct(
        EngineInterface $templating,
        UserRepository $userRepository
    ) {
        $this->templating = $templating;
        $this->userRepository = $userRepository;
    }
    
    /**
     * Index action
     *  
     * @return Response
     */
    public function indexAction()
    {
        return $this->templating->renderResponse(
            'PSaundersExampleBundle:Default:index.html.twig',
            [
                'users' => $this->userRepository->find()
            ]
        );
    }
}
