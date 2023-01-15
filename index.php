<?php

date_default_timezone_set('America/Sao_Paulo');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponto</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="box">
            <p class="data"><?= date('d/m/Y ')?></p>
        <p id="horario"><?php echo date("H:i:s") ?> </p>
       
            <h1>Registrar Ponto</h1>
            <ul class="lista-pontos">
               <div class="flex-li"><li><p>Entrada: </p> <span id="entrada"></span> </li><span onclick="abre_modal('entrada')"> <svg  class="pen"xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg></span> </div> 

               <div class="flex-li"> <li><p>Saida Intervalo: </p> <span id="saida_intervalo"></span></li> <svg  class="pen"xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg> </div> 

               <div class="flex-li"> <li><p>Retorno Intervalo: </p> <span id="retorno_intervalo"></span></li><svg  class="pen"xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg> </div> 

               <div class="flex-li"> <li><p>Saida: </p> <span id="saida"></span></li><svg  class="pen"xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path><path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path></svg> </div> 

                <li><p>Horario Limite: </p> <span id="limite"></span></li>

            </ul>
            <button class="registrar-btn" onclick="registra_horario()">Registrar Ponto</button>

        <div id="input-box" class="edit-box">
            <h3 class="editar-titulo">Editar Horario</h3>
        <input type="time" id="input" name="horario">
        <button id="salvar">Salvar</button>


        </div>

          </div>

        </div>

        <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
    <script>
  var limite = document.getElementById('limite');
        var entrada = $('#entrada').html();
        var saida_intervalo = $('#saida_intervalo').html();
        var retorno_intervalo = $('#retorno_intervalo').html();
        var saida = $('#saida').html();

      // EDITA HORARIO
      function abre_modal(id) {
        var modal = document.getElementById('input-box');
        var itemAlterar = document.getElementById(id);;
        var salvar = document.getElementById('salvar');
        modal.style.display = "flex";

        salvar.addEventListener('click', edita_horario);

        function edita_horario() {
        var inputUsuario = document.getElementById('input').value;
        
        console.log(inputUsuario)

        if (id = "entrada") {
console.log("entrou na entrada")
        }else {
            console.log("não entrou")

        
        itemAlterar.innerHTML = inputUsuario;
    }
    }






      }

      

//PEGA ELEMENOS DO HTML
      
//REGISTRA HORARIO
      function registra_horario() {
        var entrada = $('#entrada').html();
        var saida_intervalo = $('#saida_intervalo').html();
        var retorno_intervalo = $('#retorno_intervalo').html();
        var saida = $('#saida').html();

        if (entrada == "") {
            console.log('entrou no primeiro if')
            var data = new Date().toLocaleTimeString("pt-br", {
                timeZone: "America/Sao_Paulo",
                hour12: true
            });
            var formatarData = data.replace(", ", " - ");
            document.getElementById('entrada').innerHTML = formatarData;
            horarioLimite(formatarData);


        } else if (saida_intervalo == "" ){
            console.log("entrou no segundo if");
            var data = new Date().toLocaleTimeString("pt-br", {
                timeZone: "America/Sao_Paulo",
                hour12: true
            });
            var formatarData = data.replace(", ", " - ");
            $("#saida_intervalo").html(formatarData);
            horarioLimite(formatarData);


        } else if (retorno_intervalo ==""){ 
            console.log("entrou no terceiro if")
            var data = new Date().toLocaleTimeString("pt-br", {
                timeZone: "America/Sao_Paulo",
                hour12: true
            });
            var formatarData = data.replace(", ", " - ");
            $("#retorno_intervalo").html(formatarData);
            horarioLimite(formatarData);
        } else if (saida ==""){ 
            console.log("entrou na saida")
            var data = new Date().toLocaleTimeString("pt-br", {
                timeZone: "America/Sao_Paulo",
                hour12: true
            });
            var formatarData = data.replace(", ", " - ");

            $("#saida").html(formatarData);
            horarioLimite(formatarData);
        } else {
            console.log("consegui :)")
        }
      }


        //PEGA ELEMENTO HORARIO
        var apHorario = document.getElementById('horario');

        //ATUALIZA O HORARIO A CADA SEGUNDO
        function atualizarHorario() {
            var data = new Date().toLocaleTimeString("pt-br", {
                timeZone: "America/Sao_Paulo"
            });
            var formatarData = data.replace(", ", " - ");
            apHorario.innerHTML = formatarData;
        }

        setInterval(atualizarHorario, 1000);

        function horarioLimite(formatarData) {
            var date = new Date();
            var hora_limite = new Date(date.setHours(date.getHours() + 9));
            limite.innerHTML = hora_limite.toLocaleTimeString("pt-br", {   
            timeZone: "America/Sao_Paulo",
                hour12: true
        });
        console.log(hora_limite.toLocaleTimeString("pt-br", {   
            timeZone: "America/Sao_Paulo",
                hour12: true
        }) );
  
        }




    </script>
</body>

</html>