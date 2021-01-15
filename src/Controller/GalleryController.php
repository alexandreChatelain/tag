<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GalleryController extends AbstractController
{

    /**
     * @Route("/gallery/animal", name="animal")
     */
    public function galleryAnimal(): Response{return $this->render('gallery/animal.html.twig');}


    /**
     * @Route("/gallery/beach", name="beach")
     */
    public function galleryBeach(): Response{return $this->render('gallery/beach.html.twig');}

    /**
     * @Route("/gallery/boat", name="boat")
     */
    public function galleryBoat(): Response{return $this->render('gallery/boat.html.twig');}

    /**
     * @Route("/gallery/flower", name="flower")
     */
    public function galleryFlower(): Response{return $this->render('gallery/flowers.html.twig');}

    /**
     * @Route("/gallery/food", name="food")
     */
    public function galleryFood(): Response{return $this->render('gallery/food.html.twig');}

    /**
     * @Route("/gallery/landscape", name="landscape")
     */
    public function galleryLandscape(): Response{return $this->render('gallery/landscape.html.twig');}

    /**
     * @Route("/gallery/oc", name="oc")
     */
    public function galleryOC(): Response{return $this->render('gallery/oceanWildlife.html.twig');}

    /**
     * @Route("/gallery/place", name="place")
     */
    public function galleryPlace(): Response{return $this->render('gallery/place.html.twig');}
}
