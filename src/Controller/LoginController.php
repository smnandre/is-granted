<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\User\InMemoryUser;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Security $security, Request $request): Response
    {
        if ($request->query->getBoolean('admin')) {
            return $security->login(new InMemoryUser('batman', '', ['ROLE_ADMIN']));
        }

        return $security->login(new InMemoryUser('bruce', '', ['ROLE_USER']));
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(Security $security, Request $request): Response
    {
    }
}
