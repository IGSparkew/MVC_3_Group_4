<?php

namespace App\Controller;

use App\Entity\Article;
use App\Routing\Attribute\Route;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\ResultSetMapping;



class ArticleController extends AbstractController{


    #[Route(path: "/Articles", name: "showArticle" ,httpMethod: "GET")]
    public function showArticle(EntityManager $em){

        $articles = $em->getRepository(Articles::class)->findAll();
        echo $this->twig->render('article/articles.html.twig',['articles'=>$articles]);
    }


    #[Route(path: "/addArticles", name: "createArticle" ,httpMethod: "POST")]
    public function createArticle(EntityManager $em){
        session_start();
        if(!isset($_SESSION['auth'])){
            header('Location:/login');
        }
        $title = $_POST['title'];
        $text = $_POST['text'];
        $imageUrl = $_POST['image'];

        if($text != null && $imageUrl != null && $title != null){

            $article = new Article();
            $article->setTitle($title)
            ->setText($text)
            ->setUrl_img($imageUrl)
            ->setUserId($_SESSION['auth'])
            ->setCreated(new DateTime('NOW'));

            $em->persist($article);
            $em->flush();

            header('Location:/home');
        }else{
            echo "information manquante pour créer l'article";
        }


    }

    #[Route(path: "/getArticle/{id}", name: "getArticle" ,httpMethod: "GET")]
    public function getArticle(EntityManager $em, $id){
        $article = $em->getRepository(Article::class)->findOneById($id);

        echo $this->twig->render('article/article.html.twig',['article'=>$article]);
        
    }


}