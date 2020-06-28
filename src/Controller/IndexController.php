<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
class IndexController extends AbstractController
{
    /**
     * @Route("/index/controlle/index", name="index_controlle_index")
     */
    public function showAddressForm() :Response
    { 
        return $this->render('index_controlle_index/index.html.twig', [
            'controller_name' => 'IndexControlleIndexController',
        ]);
    }
}
