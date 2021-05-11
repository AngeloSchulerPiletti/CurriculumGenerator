<?php

namespace App\Controller;

class RouteController{
    public function route($dir){
        require $dir;
    }
}