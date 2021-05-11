<?php

function solveForm()
{
    $inputs = [
        "picture", "name", "from", "birth", "phone", "email", "link", "title1",
        "text1", "title2", "text2", "title3", "text3"
    ];
    $terms = "politics";

    $formErrors = [
        "politics" => "",
        "name" => "",
        "email" => "",
        "title1" => "",
        "text1" => "",
    ];

    $messages = [
        "name" => "Por favor, preencha seu nome",
        "email" => "Por favor, preencha seu email",
        "title1" => "Dê um título a seção 1",
        "text1" => "Escreva algo na seção 1",
    ];


    foreach ($inputs as $i => $value) {
        if(isset($formErrors[$value])){
            if ($_POST[$value] == "") {
                $formErrors[$value] = $messages[$value];
            }
        }
        
    }
    if (!isset($_POST[$terms])) {
        $formErrors["politics"] = "Aceite os termos para prosseguir";
    }
    foreach ($formErrors as $key => $value) {
        if ($value != "") {
            return ["resources/template/home.php", $formErrors];
        }
    }
    return ["resources/template/curriculumModel.php"];
}
