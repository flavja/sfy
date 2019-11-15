<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{

    /**
     * @Route(
     *     "/hello/{firstname}",
     *     name="hello.index",
     *     requirements={"firstname"="[a-z-\s]+"}
     * )
     * @param string|null $firstname
     * @return Response
     * @throws \Exception
     */
    public function index(string $firstname = null):Response
    {
        return $this->render(
            'hello/index.html.twig', [
                'firstname' => $firstname,
                'list' => [
                    'key0' => 'value0',
                    'key1' => 'value1',
                    'key2' => 'value2'
                ],
                'now' => new \DateTime(),
                'price' => 45000.8790
            ]
            );
    }

    /**
     * @Route(
     *     "/layout",
     *     name="hello.layout"
     * )
     */
    public function layout():Response
    {
        return $this->render(
            'hello/layout.html.twig'
            );
    }

}
