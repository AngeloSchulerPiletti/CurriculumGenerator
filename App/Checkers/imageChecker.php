<?php
namespace App\Checkers;




class imageChecker{
    public function checkImage(){
        $erros = array();



        $archive = isset($_FILES['picture']) ? $_FILES['picture'] : null;

        if($archive){
            return "";
        }
        else{
            $erros[] = "Escolha uma foto para o seu currículo!";
            
        }
        return $erros;
    }
}