<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Sklep;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/product/{prod}", name="create_product")
     * @param $prod
     * @return Response
     */
    public function index($prod) :Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = new Sklep();
        $product -> setProdukt($prod);
        $entityManager->persist($product);
        $entityManager->flush();
        return new Response('Saved new product '.$product -> getProdukt().' with id '.$product->getId());
    }
}