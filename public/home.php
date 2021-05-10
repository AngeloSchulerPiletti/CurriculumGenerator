<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sass/index.css">
    <link rel="stylesheet" href="/sass/infoContainer.css">
    <link rel="shortcut icon" href="/assets/favicon/employee (1).svg" type="image/x-icon">
    

    <title>Curriculum</title>
</head>

<body>
    <div id="info_container">
        <p id="message"></p>
    </div>

    <header>
        <img src="/assets/favicon/employee.svg" width="100px">
        <h1>CURRICULUM <sub>GENERATOR</sub></h1>
    </header>
    <main>
        <form method="POST" action="/App/Controller/dataResolve.php">
            <section class="section_data" id="sec_1">
                <div class="div_container">
                    <h3>Escolha uma linda foto!</h3>
                    <input type="file" id="picture" name="picture">
                </div>
                <img src="/assets/icons/info.svg" onmouseout="infoHide()" id="info1">
            </section>

            <section class="section_data" id="sec_2">
                <div>
                <h3>Informações Básicas</h3>
                <div>
                    <div>
                        <input type="text" name="name" placeholder="Angelo Schuler Piletti">
                        <input type="text" name="from" placeholder="Esteio, Rio Grande do Sul">
                    </div>
                    <div>
                        <input type="date" name="birth" placeholder="13/12/2003">
                        <input type="number" name="phone" placeholder="+55 51 9XXXX-XXXX">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="angeloiletti@gmail.com">
                        <input type="text" name="link" placeholder="https://github.com/AngeloSchulerPiletti">
                    </div>
                </div>
                </div>
            </section>

            <section class="section_data" id="sec_3">
                <div class="div_container">
                    <h3>Seção 1</h3>
                    <input type="text" placeholder="Título" name="title1">
                    <textarea placeholder="Diga algo incrível!" name="text1"></textarea>
                </div>
                <img src="/assets/icons/info.svg" onmouseout="infoHide()" class="info2">
            </section>

            <section class="section_data" id="sec_4">
                <div class="div_container">
                    <h3>Seção 2</h3>
                    <input type="text" placeholder="Título" name="title2">
                    <textarea placeholder="Diga a eles como você é bom!" name="text2"></textarea>
                </div>
                <img src="/assets/icons/info.svg" onmouseout="infoHide()" class="info2">
            </section>

            <section class="section_data" id="sec_5">
                <div class="div_container">
                    <h3>Seção 3</h3>
                    <input type="text" placeholder="Título" name="title3">
                    <textarea placeholder="Talvez aquela experiência passada?" name="text3"></textarea>
                </div>
                <img src="/assets/icons/info.svg" onmouseout="infoHide()" class="info2">
            </section>

            <section id="politic">
                <div>
                    <input type="checkbox" name="politicAgreement">
                    <legend>Concordo com a política de privacidade!</legend>
                </div>
                <button type="submit">ENVIAR</button>
            </section>
        </form>
    </main>
    <footer></footer>
</body>
<script src="/js/infoHover.js"></script>

</html>