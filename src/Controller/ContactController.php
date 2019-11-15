<?php


namespace App\Controller;


use App\Form\ContactType;
use App\Form\Model\ContactModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact",
     *     name="contact.form"
     * )
     * @param Request $request
     * @return Response
     */
    public function form(Request $request)
    {
        //affichage du formulaire
        $type = ContactType::class;
        $model = new ContactModel();

        $form = $this->createForm($type, $model);

        //handleRequest : recup des données en post
        $form->handleRequest($request);
        //si le form est valide
        if ($form->isSubmitted() && $form->isValid()){
            dd($form->getData());
        }
     return $this->render('contact/form.html.twig', [
         'form' => $form->createView()
     ]);
    }
}
