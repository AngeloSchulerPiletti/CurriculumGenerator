<?php
$inputs = [
    "picture", "name", "from", "birth", "phone", "email", "link", "title1",
    "text1", "title2", "text2", "title3", "text3"
];

?>

<section id="curriculo">
    <header>
        
        <img id="curriculum_photo" src="public/uploads/<?php echo $_FILES['picture']['name'] ?>">
        <div>
            <?php
            $inputs = [
                "picture", "name", "from", "birth", "phone", "email", "link",
            ];

            foreach ($_POST as $key => $value) {
                if ($value != "") {
                    foreach ($inputs as $field) {
                        if ($key == $field) {
                            echo "<h6>" . $value . "</h6>";
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
        $inputs = [
            "title1", "text1", "title2", "text2", "title3", "text3"
        ];

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