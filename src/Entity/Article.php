<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTime;

/**
 * @ORM\Entity
 * @ORM\Table(name="articles")
 */
class Article{

     /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
    private int $id;
     /**
   * @ORM\Column(type="integer", length=255)
   */
    private int $userId;
     /**
   * @ORM\Column(type="string", length=255)
   */
    private String $title;
     /**
   * @ORM\Column(type="string", length=255)
   */
    private String $text;
     /**
   * @ORM\Column(type="string", length=255)
   */
    private String $url_img;

    /**
   * @ORM\Column(type="datetime", nullable=false)
   */
    private DateTime $created;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get the value of url_img
     */ 
    public function getUrl_img()
    {
        return $this->url_img;
    }

    /**
     * Set the value of url_img
     *
     * @return  self
     */ 
    public function setUrl_img($url_img)
    {
        $this->url_img = $url_img;

        return $this;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of created
     */ 
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */ 
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }
}