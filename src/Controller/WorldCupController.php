<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WorldCupController extends AbstractController
{
    /**
     * @Route(
     *     "/worldcup/winner/{date}/{country}",
     *     name="worldcup.index",
     *     requirements={"country"="[A-Za-z-\s]+", "date" = "\d+"}
     * )
     * @param int $date
     * @param string $country
     * @return Response
     */
    public function index(int $date, string $country):Response
    {
        return $this->render('worldcup/winner.html.twig',[
            'date'=> $date,
            'country'=> $country
        ]);
    }
}
