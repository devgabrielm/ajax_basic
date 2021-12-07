<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <select id="lang">
        <option value="">Select a language</option>
        <option value="JavaScript">JavaScript</option>
        <option value="TypeScript">TypeScript</option>
        <option value="PHP">PHP</option>
        <option value="Python">Python</option>
        <option value="Java">Java</option>
    </select>

    <input id="tang" type="date">

    <p id="result"></p>
    <p id="result2"></p>
    <script>
      //iniciei o Jquery
        $(function(){
          //A  partir do ID, quando houver mudança execute
          $('#lang').on("change", function(){
            //Troca de informações dinâmicas
            $.ajax({
              //Tipo de envio
              type: "POST",
              //caminho do arquivo (PHP neste caso)
              url: 'controle.php',
              //Valores a ser enviados
              data: {
                //Variavel teste armazena o valor atribuido com base no ID
                teste: $('#lang').val(),
              },
              //Se deu certo execute
              success: function(result){
                //Com base no Id, construa o resultado em HTML
                $('#result').html(result);
              },
              //Se deu errado execute
              error: function(){
                //Com base no Id, contrua o erro em HTML
                $('#result').html("Error");
              }
            });
          });

          $('#tang').on("change", function(){
            $.ajax({
              type: "POST",
              url: 'controle.php',
              data:{
                teste2: $('#tang').val()
              },
              success: function(result){
                $('#result2').html(result);
              },
              error: function(){
                $('#result2').html("Error")
              }
            });
          });
        });
    </script>
  </body>
</html>