<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class IndexController extends AbstractController
{

    #[Route('/', name: 'app_index', methods: ['GET'])]
    public function index()
    {
        return $this->redirectToRoute('app_login');
    }

}
