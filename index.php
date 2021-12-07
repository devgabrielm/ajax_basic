<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <?php include 'conexao.php'; ?>
    </head>
    <body>
        <b>Área:</b></td>
    <select name="area" id="area" onchange="changeSelect();">
        <option value="">Selecione uma área</option>
        <option value="Controladoria">Controladoria</option>
        <option value="Negócios">Negócios</option>
    </select>

    <b>Setor:</b>
    <select name="setor" id="setor">      
        <option value="">Selecione Setor</option>  
    </select>

  <script type="text/javascript">
    function changeSelect(){

        var select = document.getElementById('area');
        var selectSetor = document.getElementById('setor');

        var value = select.options[select.selectedIndex].value;//???

        //remove itens
        var length = selectSetor.options.length;        
        var i;
        for(i = selectSetor.options.length-1 ; i>=0 ; i--)
        {
            selectSetor.remove(i);
        }

        if(value == 'Controladoria') {

            var option = document.createElement('option');
            option.value = '1';
            option.text = 'SETOR 1 (CONTROLADORIA)';

            var option2 = document.createElement('option');
            option2.value = '2';
            option2.text = 'SETOR 2 (CONTROLADORIA)';

            selectSetor.add(option);
            selectSetor.add(option2);

        } else if (value == 'Negócios'){

            var option3 = document.createElement('option');
            option3.value = '3';
            option3.text = 'SETOR 3 (NEGÓCIOS)';

            var option4 = document.createElement('option');
            option4.value = '4';
            option4.text = 'SETOR 4 (NEGÓCIOS)';

            selectSetor.add(option3);
            selectSetor.add(option4);

        }   
    }
</script>
    </body>
</html>