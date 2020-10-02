<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 *  @Route("/api/animais")
 */
class AnimaisApiController extends AbstractController {

    /**
     * @Route("/gatos", name ="gatos_index")
     * Para saber quais são os gatos
     */
    public function cats ()
    {
        return new JsonResponse([
            'data' => [
                    ["id" =>1, "nome" => "Amarula"],
                    ["id" =>2, "nome" => "Tulipa"],


            ]
        ]);
    }


    /**
     * @Route("/cachorros", name ="cachorros_index")
     * Para saber quais são os cachorros
     */
    public function dogs ()
    {
        return new JsonResponse([
            'data' => [
                    ["id" =>1, "nome" => "Nina"],
                    ["id" =>2, "nome" => "Lilica"],


            ]
        ]);
    }

    /**
     * @Route("/coelhos", name ="coelhos_index")
     * Para saber quais são os coelhos
     */
    public function coelhos ()
    {
        return new JsonResponse([
            'data' => [
                    ["id" =>1, "nome" => "Perna Longa"],


            ]
        ]);
    }


}