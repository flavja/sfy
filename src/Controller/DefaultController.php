<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{

    /*
     * dans un controlleur, l'injection de dépendances se fait dans les méthodes
     */
    public function index(Request $req): Response
    {
        /*
         * request : permet de récupérer la requête http
         * GET : $request->query(variable
         * POST : $request->request(variable
         * FILE : $request->file(variable
         */
        var_dump($req);
        $response = new Response('{"data": {"result":"ok"}}', 201);
        return $response;
    }
}
