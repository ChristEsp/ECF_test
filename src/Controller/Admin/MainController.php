<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/admin/main', name: 'app_admin_main_index')]
    public function index(): Response
    {
        return $this->render('admin/main/index.html.twig');
    }

    #[Route('/admin', name: 'app_admin_index', methods: ['GET'])]
    public function adminHome(): Response
    {
        // Redirige vers /admin/main ou affiche une page d'accueil admin
        return $this->redirectToRoute('app_admin_main_index');
    }
}
