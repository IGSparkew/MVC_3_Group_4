<?php

namespace App\Controller;

use App\Entity\User;
use App\Routing\Attribute\Route;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;



class UserController extends AbstractController
{
  #[Route(path: "/users", name: "users_list")]
  public function list()
  {
    // Création liste users
    // Ne pas utiliser l'entity manager
    // Créer à l'aide d'une boucle un nombre X d'utilisateurs avec des données fakes
    // Transmettre ensuite ces utilisateurs à la vue
    $users = [];

    echo $this->twig->render('user/list.html.twig', ['users' => $users]);
  }

  #[Route(path: "/newUser", name: "createUser" ,httpMethod: "POST" )]
  public function createUser(EntityManager $em){

    session_start();
    if(isset($_SESSION['auth'])){
      header('Location:/home');
    }

    $username = $_POST['username'];
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['psw'];
    $pass_repeat = $_POST['psw-repeat'];

    if($username != null && $mail != null && $pass != null && $name != null){
      if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        if($pass == $pass_repeat){
          $password = password_hash($pass,PASSWORD_DEFAULT,['cost'=> 14]);
          $user = new User();
          $user->setUsername($username)
              ->setName($name)
              ->setEmail($mail)
              ->setPassword($password);
          
          $_SESSION['auth'] = $user->getId();
          $em->persist($user);
          $em->flush();
          header('Location:/home');

        }else{
          echo "Vous n'avez pas bien retaper votre mot de passe";
        }
      }else{
        echo "mail invalide!";
      }
    }else{
      echo "Tous les champs ne sont pas remplies";
    }

  }

  #[Route(path: "/getUser", name: "getUser" ,httpMethod: "POST" )]
  public function getUser(EntityManager $em){
    
    session_start();
    if(isset($_SESSION['auth'])){
      header('Location:/home');
    }

    $username = $_POST['username'];
    $pass = $_POST['password'];

    if($username != null && $pass != null){    
      $users = $em->getRepository(User::class)->findAll();

      $findUser = false;
    foreach($users as $user){
      if($user->getUsername() == $username){
        $findUser = true;

        if(password_verify($pass,$user->getPassword()) ){
          $_SESSION['auth'] = $user->getId();
        }else{
          echo "Wrong password";
        }
      } 
    }

    if(!$findUser){
      echo "User not found";
    }
        
    }else{
      echo "Username or Password not completed";
    }

}


#[Route(path: "/logout", name: "logout" ,httpMethod: "GET" )]
public function logout(){
  session_start();
  if(isset($_SESSION['auth'])){
    unset($_SESSION['auth']);
    session_destroy();
    
  }
  header("Location:/register");
}


}
