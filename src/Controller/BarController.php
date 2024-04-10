<?php

namespace App\Controller;

use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class BarController extends AbstractController
{
    #[Route('/bar', name: 'app_bar')]
    #[IsGranted('ROLE_BAR')]
    public function index(): Response
    {
        throw new LogicException('No one should access this page.');
    }
}
