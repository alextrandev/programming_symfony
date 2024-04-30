<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CRUDListController extends AbstractController {
    #[Route('crud', name: 'crud')]
    public function index(): Response {
        return $this->render('crudlist/index.html.twig');
    }
}
