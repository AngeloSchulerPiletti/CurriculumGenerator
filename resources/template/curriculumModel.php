<?php
$inputs = [
    "picture", "name", "from", "birth", "phone", "email", "link", "title1",
    "text1", "title2", "text2", "title3", "text3"
];
?>

<section id="curriculo">
    <header>
        CURRICULUM MODEL
        <img>
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
    <article>
        <?php
        $inputs = [
            "title1", "text1", "title2", "text2", "title3", "text3"
        ];

        foreach ($_POST as $key => $value) {
            if ($value != "") {
                echo "<section>";
                foreach ($inputs as $field) {
                    if ($key == $field) {
                        if (str_contains($key, "title")) {
                            echo "<h3>" . $value . "</h3>";
                        } else if (str_contains($key, "text")) {
                            echo "<p>" . $value . "</p>";
                        }
                    }
                }
                echo "</section>";
            }
        }

        ?>
    </article>
</section>