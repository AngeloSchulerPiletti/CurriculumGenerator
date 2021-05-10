<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sass/index.css">
    <link rel="shortcut icon" href="/favicon/employee (1).svg" type="image/x-icon">
    
    <title>Curriculum</title>
</head>
<body>
    <header>
        <img src="/favicon/employee.svg" width="100px">
        <h1>CURRICULUM <sub>GENERATOR</sub></h1>
    </header>

    <form>
        <section class="section_data" id="sec_1">
            <h1>Escolha uma linda foto!</h1>
            <input type="file" id="picture">
        </section>

        <section class="section_data" id="sec_2">
            <h1>Informe suas informações básicas</h1>
            <input type="text" name="name" placeholder="Angelo Schuler Piletti">
            <input type="text" name="from" placeholder="Esteio, Rio Grande do Sul">
            <input type="date" name="birth" placeholder="13/12/2003">
            <input type="number" name="phone" placeholder="+55 51 9XXXX-XXXX">
            <input type="email" name="email" placeholder="angeloiletti@gmail.com">
            <input type="text" name="link" placeholder="https://github.com/AngeloSchulerPiletti">
        </section>
        
        <section class="section_data" id="sec_3">
            <h1>Seção 1</h1>
            <input type="text" placeholder="Título">
            <textarea placeholder="Diga algo incrível!"></textarea>
        </section>
        
        <section class="section_data" id="sec_4">
            <h1>Seção 2</h1>
            <input type="text" placeholder="Título">
            <textarea placeholder="Diga a eles como você é bom!"></textarea>
        </section>
        
        <section class="section_data" id="sec_5">
            <h1>Seção 3</h1>
            <input type="text" placeholder="Título">
            <textarea placeholder="Talvez aquela experiência passada?"></textarea>
        </section>

        <section id="politic">
            <input type="checkbox"><legend>Concordo com a política de privacidade!</legend>
            <button type="submit">ENVIAR</button>
        </section>
    </form>
</body>
</html>