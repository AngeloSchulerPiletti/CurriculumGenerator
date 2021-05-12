<?php
include 'App/Checkers/imageChecker.php';
use App\Checkers\imageChecker;



function solveForm()
{
    $inputs = [
        "name", "from", "birth", "phone", "email", "link", "title1",
        "text1", "title2", "text2", "title3", "text3"
    ];
    $terms = "politics";

    $formErrors = [
        "politics" => "",
        "picture" => "",
        "name" => "",
        "email" => "",
        "title1" => "",
        "text1" => "",
    ];

    $messages = [
        "politics" => "Aceite os termos para prosseguir!",
        "name" => "Por favor, preencha seu nome.",
        "email" => "Por favor, preencha seu email.",
        "title1" => "Dê um título a seção 1.",
        "text1" => "Escreva algo na seção 1.",
    ];


    // $uploadVerify = new imageChecker();
    // $uploadVerify->checkImage();    



    if (isset($_FILES['picture'])) {
        if ($_FILES['picture']['error'] == 0) {
            $uploadDestiny = 'public/uploads/' . $_FILES['picture']['name'];
            $pic_tmp = $_FILES['picture']['tmp_name'];
            move_uploaded_file($pic_tmp, $uploadDestiny);
        } else {
            $formErrors['picture'] = 'Escolha uma foto de até 2MB para o seu currículo!';
        }
    } else {
        $formErrors['picture'] = 'Escolha uma foto de até 2MB para o seu currículo!';
    }


    foreach ($inputs as $value) {
        if (isset($formErrors[$value])) {
            if ($_POST[$value] == "") {
                $formErrors[$value] = $messages[$value];
            }
        }
    }
    if (!isset($_POST[$terms])) {
        $formErrors["politics"] = $messages["politics"];
    }
    foreach ($formErrors as $key => $value) {
        if ($value != "") {
            return ["resources/template/home.php", $formErrors];
        }
    }
    return ["resources/template/curriculumModel.php"];
}
