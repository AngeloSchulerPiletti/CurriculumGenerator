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

    $archive = isset($_FILES['picture']) ? $_FILES['picture'] : null;

    $uploadVerify = new imageChecker();
    $checkedImage = $uploadVerify->checkImage($archive);

    if ($checkedImage == "passed") {
        $uploadDestiny = 'public/uploads/' . $archive['name'];
        $pic_tmp = $archive['tmp_name'];
        move_uploaded_file($pic_tmp, $uploadDestiny);
    } 
    else {
        $formErrors['picture'] = $checkedImage;
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
