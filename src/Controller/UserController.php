<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    #[Route('/getAllUsers', name: 'getAllUsers')]
    public function getAllUsers(UserRepository $userRep): Response
    {
        $allUsers=$userRep->findAll();
        return $this->render('user/getAll.html.twig', [
            'allUsers' => $allUsers,
        ]);
    }
}
