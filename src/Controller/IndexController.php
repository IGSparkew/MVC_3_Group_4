<?php

namespace App\Controller;

use App\Entity\User;
use App\Routing\Attribute\Route;
use DateTime;
use Doctrine\ORM\EntityManager;

class IndexController extends AbstractController
{
  #[Route(path: "/")]
  public function index(EntityManager $em)
  {
    $user = new User();

    $user->setName("Bob")
      ->setFirstName("John")
      ->setUsername("Bobby")
      ->setPassword("randompass")
      ->setEmail("bob@bob.com")
      ->setBirthDate(new DateTime('1981-02-16'));

    // On demande au gestionnaire d'entités de persister l'objet
    // Attention, à ce moment-là l'objet n'est pas encore enregistré en BDD
    //$em->persist($user);
    //$em->flush();
    header("Location:/home");

  }

  #[Route(path: "/contact", name: "contact", httpMethod: "GET")]
  public function contact()
  {
    echo $this->twig->render('index/contact.html.twig');
  }

  #[Route(path: "/home", name: "home", httpMethod: "GET")]
  public function home()
  {
    session_start();

    echo "Home";
   
  }


  #[Route(path:"/register", name:"registerView",httpMethod: "GET")]
  public function registerView(){
    session_start();
    if(isset($_SESSION['auth'])){
      header('Location:/home');
    }
    echo $this->twig->render('index/register.html.twig');
  }

  #[Route(path:"/login", name:"loginView",httpMethod: "GET")]
  public function loginView(){
    session_start();
    if(isset($_SESSION['auth'])){
      header('Location:/home');
    }
    echo $this->twig->render('index/login.html.twig');
  }



}
