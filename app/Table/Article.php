<?php

namespace App\Table;

class Article{

    public function __get($key){
//method magic qui permet d'enlever get 

        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;

    }

   public function getUrl(){

       return 'index.php?p=article&id=' . $this->id;

   }

   public function getExtrait(){
// permet de recupere un extrait (subtr  0,100 caractaire) et generer le lien voir la suite
    $html = '<p>' . substr($this->contenu, 0, 100) . '...</p>';
    $html .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
    return $html;
   }




}