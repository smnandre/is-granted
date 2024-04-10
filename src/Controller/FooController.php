<?php

namespace App\Controller;

use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_FOO')]
class FooController extends AbstractController
{
    #[Route('/foo', name: 'app_foo')]
    public function index(): Response
    {
        throw new LogicException('No one should access this page.');
    }
}
