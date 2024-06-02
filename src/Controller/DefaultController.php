<?php

namespace App\Controller;

use App\Entity\Camioneros;
use App\Entity\Transportes;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[Route("/", name:"home")]
    public function home(EntityManagerInterface $doctrine)
    {
        $repository = $doctrine->getRepository(Camioneros::class);
        $camioneros = $repository->findAll();

        return $this->render("logistica/showCamioneros.html.twig", ["camioneros" => $camioneros]);

    }

    #[Route("/detalle/{dni}", name:"detalle")]
    public function detalle(EntityManagerInterface $doctrine, $dni)
    {
        $repository = $doctrine->getRepository(Camioneros::class);
        $camionero = $repository->find($dni);
        
        return $this->render("logistica/showCamionero.html.twig", ["camionero" => $camionero]);
    }

    #[Route("/detalleTransportes/{dniCamionero}", name:"detalleTransportes")]
    public function detalleTransportes(EntityManagerInterface $doctrine, $dniCamionero)
    {
        $repository = $doctrine->getRepository(Transportes::class);
        $transportes = $repository->findByDniCamionero($dniCamionero);
        
        return $this->render("logistica/showTransportes.html.twig", ["transportes" => $transportes]);
    }
}