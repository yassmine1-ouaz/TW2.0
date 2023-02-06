<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * @Route("/showTeacher/{name}", name ="showTeacher")
     */
    public function showTeacher($name): Response
    {
        // nestaamlou methode hethii ou mat3 return new response
        return $this->render("teacher/showTeacher.html.twig", ['name' => $name]);

        // question 2 :dans l'url on mettre/showTeacher/yassmine : il affiche bonjour
        //return new Response("bonjour : " . $name);
    }


    //Question 5
    #[Route("/goToIndex", name: "goToStudent")]

    public function goToIndex(): Response
    {
        return $this->redirectToRoute("app_student");
    }
}
