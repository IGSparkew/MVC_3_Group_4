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
        echo $this->twig->render('index/home.html.twig',['articles'=>$articles]);
    }


    #[Route(path: "/addArticles", name: "createArticle" ,httpMethod: "POST")]
    public function createArticle(EntityManager $em){
            


    }

    #[Route(path: "/getArticle/{id}", name: "getArticle" ,httpMethod: "GET")]
    public function getArticle(EntityManager $em, $id){
        $article = $em->getRepository(Article::class)->findOneById($id);

        echo $this->twig->render('article/article.html.twig',['article'=>$article]);
        
    }

    #[Route(path: "/updateArticle/{id}", name: "updateArticle" ,httpMethod: "POST")]
    public function updateArticle(EntityManager $em, $id){
        $article = $em->getRepository(Article::class)->findOneById($id);

        
        
    }

    
    #[Route(path: "/deleteArticle/{id}", name: "deleteArticle" ,httpMethod: "POST")]
    public function deleteArticle(EntityManager $em, $id){
        $article = $em->getRepository(Article::class)->findOneById($id);

        
        
    }






}