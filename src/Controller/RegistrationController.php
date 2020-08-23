<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function register(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class,$user);
        
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            
            // 3) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
          return $this->render('registration/register.html.twig', array('form' => $form -> createView()));  
        }
        return $this->render('registration/register.html.twig', array('form' => $form -> createView())); 
    }
}
