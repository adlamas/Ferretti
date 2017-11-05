<?php

class image{
    
    protected $name;
    protected $article_id;
    


    function getName() {
        return $this->name;
    }

     function getArticle_id() {
        return $this->article_id;
    }

     function setName($name) {
        $this->name = $name;
    }

     function setArticle_id($article_id) {
        $this->article_id = $article_id;
    }

}