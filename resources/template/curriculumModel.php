<?php


?>

<section id="curriculo">
    <header>

        <img id="curriculum_photo" src="public/uploads/<?php echo $_FILES['picture']['name'] ?>">
        <div>
            <?php
            $inputs = [
                "picture", "name", "from", "birth", "phone", "email", "link",
            ];
            $inputsTrad = [
                "picture" => "", 
                "name" => "", 
                "from" => "Local: ", 
                "birth" => "Nascimento: ", 
                "phone" => "Telefone: ", 
                "email" => "Email: ", 
                "link" => "Perfil: ",
            ];

            foreach ($_POST as $key => $value) {
                if ($value != "") {
                    foreach ($inputs as $field) {
                        if ($key == $field) {
                            foreach($inputsTrad as $engKey => $portKey){
                                if($field == $engKey){
                                    echo "<h6><h6type>". $portKey. "</h6type>" . $value . "</h6>";
                                }
                            }
                           
                        }
                    }
                }
            }
            ?>

        </div>
    </header>
    <hr>
    <article>
        <?php
        $inputs = $_SESSION['requiredInputs'];

        foreach ($_POST as $key => $value) {
            foreach ($inputs as $field) {
                if ($key == $field) {
                    if ($value != "") {
                        if (str_contains($key, "title")) {
                            echo "<h3>" . $value . "</h3>";
                        } else if (str_contains($key, "text")) {
                            echo "<p>" . $value . "</p>";
                        }
                    }
                }
            }
        }

        ?>
    </article>

</section>
<div id="goToEdit">
    <a href="/inicio">EDITAR</a>
</div>