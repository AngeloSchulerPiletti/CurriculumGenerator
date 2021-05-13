


<div id="form_errors" style="display: none;">
    <button id="close_form_errors">X</button>
    <div>
        <div>
            <h1>ATENÇÃO!</h1>
        </div>
        <div id="messagesContainer">
            <!-- INSERT HERE -->
        </div>
    </div>

</div>

<form method="POST" enctype="multipart/form-data" action="/curriculo">
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
                    <input id="name" type="text" name="name" placeholder="Angelo Schuler Piletti">
                    <input id="from" type="text" name="from" placeholder="Esteio, Rio Grande do Sul">
                </div>
                <div>
                    <input id="birth" type="date" name="birth" placeholder="13/12/2003">
                    <input id="phone" type="number" name="phone" placeholder="+55 51 9XXXX-XXXX">
                </div>
                <div>
                    <input id="email" type="email" name="email" placeholder="angeloiletti@gmail.com">
                    <input id="link" type="text" name="link" placeholder="https://github.com/AngeloSchulerPiletti">
                </div>
            </div>
        </div>
    </section>

    <section class="section_data" id="sec_3">
        <div class="div_container">
            <h3>Seção 1</h3>
            <input id="title1" type="text" placeholder="Título" name="title1">
            <textarea id="text1" placeholder="Diga algo incrível!" name="text1"></textarea>
        </div>
        <img src="/assets/icons/info.svg" onmouseout="infoHide()" class="info2">
    </section>

    <section class="section_data" id="sec_4">
        <div class="div_container">
            <h3>Seção 2</h3>
            <input id="title2" type="text" placeholder="Título" name="title2">
            <textarea id="text2" placeholder="Diga a eles como você é bom!" name="text2"></textarea>
        </div>
        <img src="/assets/icons/info.svg" onmouseout="infoHide()" class="info2">
    </section>

    <section class="section_data" id="sec_5">
        <div class="div_container">
            <h3>Seção 3</h3>
            <input id="title3" type="text" placeholder="Título" name="title3">
            <textarea id="text3" placeholder="Talvez aquela experiência passada?" name="text3"></textarea>
        </div>
        <img src="/assets/icons/info.svg" onmouseout="infoHide()" class="info2">
    </section>

    <section id="politic">
        <div>
            <input type="checkbox" name="politics" value="false">
            <legend>Concordo com a política de privacidade!</legend>
        </div>
        <button type="submit">ENVIAR</button>
    </section>
</form>


<script>
    var buttonClose = document.querySelector('#close_form_errors'),
        errorMessagesContainer = document.querySelector('#form_errors'),
        insertMessageHere = document.querySelector('#messagesContainer');

    var errorMessages = new Array();

    errorMessages = [];
    <?php
    if (isset($_POST['FORM_ERRORS'])) {

        foreach ($_POST['FORM_ERRORS'] as $key => $value)
            echo "errorMessages.push('" . $value . "');";
    };
    ?>


    formSaves = new Object();

    <?php
    if(isset($_SESSION['formEdition'])){
        $inputsToEdit = $_SESSION['formEdition'];
        $inputs = $_SESSION['allInputs'];
            
            foreach($inputs as $key => $value){
                if(isset($inputsToEdit[$value])){
                    
                    echo "formSaves.".$value." = '".$inputsToEdit[$value]."';";
                }
                else{
                    
                }
            }
        }
    ?>

    function loadInputs(values){
        var nameOfInputs = [],
            inputsToLoad = [],
            objectSize = 0;
        
        nameOfInputs = Object.keys(values);
        nameOfInputs.forEach(function(element, i){
            objectSize++;
        });

        for(let i = 0; i < objectSize; i++){
            inputsToLoad.push(document.getElementById(nameOfInputs[i]));
        }
        console.log(inputsToLoad);

        inputsToLoad.forEach(function(element, index){
            let adress = element.getAttribute('name');
            let input_data = values[adress];
            console.log(input_data);

            if(element.tagName == "INPUT"){
                element.setAttribute("value", input_data);
            }
            else if(element.tagName == "TEXTAREA"){
                element.innerHTML = input_data;
            }
                
        });

    }
    loadInputs(formSaves);


    function showErrorsForm() {
        if (errorMessages.length > 0) {
            errorMessagesContainer.style.display = "block";
            errorMessages.forEach(function(mensagem) {
                if(mensagem != ""){
                    insertMessageHere.innerHTML += "<div><p>" + mensagem + "</p><div>";
                }
            });
        }
    }

    function closeErrorsForm() {
        errorMessagesContainer.style.display = "none";
    }

    showErrorsForm();

    buttonClose.onclick = closeErrorsForm;
    document.body.onclick = closeErrorsForm;
</script>