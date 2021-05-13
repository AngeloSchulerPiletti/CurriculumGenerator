<?php
namespace App\Checkers;
include 'App/Controller/dataResolve.php';



class urlCheckers{
    protected $directories = [
        "/error404" => "public/error404.php",
        "/" => "resources/template/home.php",
        "/inicio" => "resources/template/home.php",
        "/curriculo" => 'resources/template/curriculumModel.php',        
    ];

    public function path(){
        $dirs = explode("/", $_SERVER['REQUEST_URI']);
        $directories = $this->directories;

        foreach($directories as $key => $dir){
            if("/".$dirs[1] == $key){
                if($key == "/curriculo"){
                    $formArray = solveForm();
                    $dir = $formArray[0];
                    if(isset($formArray[1])){
                        $_POST['FORM_ERRORS'] = $formArray[1];
                    }
                    
                }
                else if($key == "/"){
                    $_SESSION['formEdition'] = [];
                }
                return $dir;
            }
        } 
        return $directories["/error404"][0];
    }
}
