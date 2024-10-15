<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $user = $entityManager->getRepository(Customer::class)->findAll();

        dump($user);

        return $this->json($user);
    }
}
