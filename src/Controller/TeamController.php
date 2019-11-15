<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    private $equipe = [
        [
            'nom' => 'nom1',
            'prenom' => 'prenom1'
        ],
        [
            'nom' => 'nom2',
            'prenom' => 'prenom2'
        ],
        [
            'nom' => 'nom3',
            'prenom' => 'prenom3'
        ],
    ];
    /**
     * @Route(
     *     "/team",
     *     name="team.index"
     * )
     * @param $equipe
     * @return Response
     */
    public function index():Response
    {
        return $this->render(
            'team/index.html.twig', ['equipe' => $this->equipe]
        );
    }

    /**
     * @Route(
     *     "/team/{prenom}-{nom}",
     *     name="team.details",
     *     requirements={"prenom" = "[a-z-\d\s]+", "nom" = "[a-z-\d\s]+"}
     * )
     * @param string $prenom
     * @param string $nom
     * @return Response
     */
    public function details(string $prenom, string $nom)
    {
        return $this->render('team/details.html.twig',
            [
                'equipe' => $this->equipe,
                'prenom' => $prenom,
                'nom' => $nom,
                'email' => $prenom.'.'.$nom.'@gmail.com',
                'photo' => 'images/'.$prenom.'.'.$nom.'.png'
            ]);
    }
}
