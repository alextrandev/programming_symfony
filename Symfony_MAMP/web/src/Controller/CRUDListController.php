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

    #[Route('/create', name: 'app_create', methods: ['POST'])]
    public function create(): Response {
        exit("To do: create a new task");
    }

    #[Route('/update/{id<\d+>}', name: 'app_update')]
    public function update(int $id): Response {
        exit("To do: update task $id ");
    }

    #[Route('/delete/{id<\d+>}', name: 'app_delete')]
    public function delete(int $id): Response {
        exit("To do: delete task $id ");
    }
}
