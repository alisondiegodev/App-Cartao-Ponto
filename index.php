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
                <li><p>Entrada: </p> <span id="entrada"></span></li> 
                <li><p>Saida Intervalo: </p> <span id="saida_intervalo"></span></li>
                <li><p>Retorno Intervalo: </p> <span id="retorno_intervalo"></span></li>
                <li><p>Saida: </p> <span id="saida"></span></li>
                <li><p>Horario Limite: </p> <span id="limite"></span></li>

            </ul>
            <button class="registrar-btn" onclick="registra_horario()">Registrar Ponto</button>
          </div>

        </div>

        <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
    <script>


//PEGA ELEMENOS DO HTML
        var limite = document.getElementById('limite');
        var entrada = $('#entrada').html();
        var saida_intervalo = $('#saida_intervalo').html();
        var retorno_intervalo = $('#retorno_intervalo').html();
        var saida = $('#saida').html();

      function registra_horario() {
        var entrada = $('#entrada').html();

        if (entrada == "") {
            console.log('entrou no primeiro if')
            var data = new Date().toLocaleTimeString("pt-br", {
                timeZone: "America/Sao_Paulo",
                hour12: true
            });
            var formatarData = data.replace(", ", " - ");
            document.getElementById('entrada').innerHTML = formatarData;
            horarioLimite(formatarData);


        } else {
            console.log("entrou no segundo if");
            var data = new Date().toLocaleTimeString("pt-br", {
                timeZone: "America/Sao_Paulo",
                hour12: true
            });
            var formatarData = data.replace(", ", " - ");
            $("#saida_intervalo").html(formatarData) ;
            horarioLimite(formatarData);





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