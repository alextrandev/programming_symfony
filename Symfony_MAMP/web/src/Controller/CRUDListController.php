<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CRUDListController extends AbstractController {
    #[Route('/crud', name: 'app_crud_list')]
    public function index(): Response {
        return $this->render('crudlist/index.html.twig');
    }

    #[Route('/create', name: 'app_create')]
    public function create(): Response {
        exit("To do: create a new task");
    }
}
