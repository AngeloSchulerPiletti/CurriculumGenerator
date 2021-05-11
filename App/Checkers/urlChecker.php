<?php
namespace App\Checkers;
include 'App/Controller/dataResolve.php';



class urlCheckers{
    protected $directories = [
        "/error404" => ["public/error404.php", ""],
        "/" => ["resources/template/home.php", "clear"],
        "/inicio" => ["resources/template/home.php", "keep"],
        "/curriculo" => ['resources/template/curriculumModel.php', "check"],        
    ];

    public function path(){
        $dirs = explode("/", $_SERVER['REQUEST_URI']);
        $directories = $this->directories;

        foreach($directories as $key => $dir){
            if("/".$dirs[1] == $key){
                if($key == "/curriculo"){
                    $formArray = solveForm();
                    $dir[0] = $formArray[0];
                    if(isset($formArray[1])){
                        $_POST['FORM_ERRORS'] = $formArray[1];
                    }
                    
                }
                $_POST['DO_THIS'] = $dir[1];
                return $dir[0];
            }
        } 
        return $directories["/error404"][0];
    }
}
