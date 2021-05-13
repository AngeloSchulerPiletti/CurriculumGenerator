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



    //The Inputs Informations are saved at session
    $allInputs = $_SESSION['allInputs'];
    foreach ($_POST as $key => $value) {
        foreach ($allInputs as $field) {
            if ($key == $field) {
                if ($value != "") {
                    $_SESSION['formEdition'][$key] = $value;
                }
            }
        }
    }



    //IMAGE PROCEDENCE CHECK
    $archive = isset($_FILES['picture']) ? $_FILES['picture'] : null;

    $uploadVerify = new imageChecker();
    $checkedImage = $uploadVerify->checkImage($archive);

    if ($checkedImage == "passed") {
        $uploadDestiny = 'public/uploads/' . $archive['name'];
        $pic_tmp = $archive['tmp_name'];
        move_uploaded_file($pic_tmp, $uploadDestiny);
    } else {
        $formErrors['picture'] = $checkedImage;
    }


    //ERRORS and PATHS solve
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
            //If there is an error, returns the home
            return ["resources/template/home.php", $formErrors];
        }
    }

    //If there is no error, it returns the curriculum
    // $inputs = $_SESSION['allInputs'];


    // foreach ($_POST as $key => $value) {
    //     foreach ($inputs as $field) {
    //         if ($key == $field) {
    //             if ($value != "") {
    //                 $_SESSION['formEdition'][$key] = $value;
    //             }
    //         }
    //     }
    // }
    return ["resources/template/curriculumModel.php"];
}
