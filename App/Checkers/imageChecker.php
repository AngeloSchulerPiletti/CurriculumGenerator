<?php

namespace App\Checkers;




class imageChecker
{
    public function checkImage($archive)
    {
        $notifications = "";
        $maxSize = 2000000;

        if ($archive) {
            if ($archive['error'] == 0) {
                if (preg_match("^image\/(jpg|jpeg|png|gif)$^", $archive['type'])) {
                    if ($archive['size'] < $maxSize) {
                        $notifications = "passed";
                    } else {
                        $notifications = "O arquivo deve ter até 2MB. Você pode compactar seu arquivo em diversos sites, sugerimos o tinypng.com.";
                    }
                } else {
                    $notifications = "Escolha um formato válido: JPG, JPEG, PNG ou até GIF!";
                }
            } 
            else {
                $notifications = "Escolha uma foto para o seu currículo!";
            }
        } else {
            $notifications = "Escolha uma foto para o seu currículo!";
        }
        return $notifications;
    }
}
