<html>
<head>
    <style>
        body {
            background-color: #66ff66;
            text-align: center;
        }
        div {
            margin-right: auto;
            text-align: left;
            padding-left: 40%;
        }
        img{
            width: 200px;
            height: 200px;
        }
        h1{
            font-size: 30px;
        }
        b{
            font-size: 20px;
        }

    </style>
</head>
<body>
<?php
    $v0 = array(
	    'img' => 'https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png',
        'nome' => 'NOME: <b>Lívio.</b>',
        'data' => 'NASCIMENTO:<b> 27/03/2003.</b>',
        'apelido' => 'CODINOME: <b>Lízioo.</b>',
        'localidade' => array('<b> Travessa José Vieira Costa.</b>', '<b> 38º.</b>','<b> Mutãs.</b>', '<b> Guanambi.</b>'),
        'e-mail' => 'E-MAIL:<b> liviosv16@gmail.com.</b>',
        'curco' => 'CURÇO: <b> Técnico de Informática Para Internet.</b>',
        'disciplina' => array('<b>ANÁLISE DE SISTEMAS PARA WEB.</b>', '<b>BANCO DE DADOS.</b>', '<b>PROGRAMAÇÃO DE SISTEMAS PARA WEB I.</b>', '<b>PROJETO INTEGRADOR.</b>', '<b>REDES DE COMPUTADORES.</b>')

    );
    echo('<h1><b>Meu Perfil</b></h1>');
    echo('<img src=' . $v0['img'] .'>');
    echo('<br>');
    echo('div'.$v0 ['nome']);
    echo('<br>');
    echo($v0 ['data']);
    echo('<br>');
    echo($v0 ['apelido']);
    echo('<br>');
    echo('<br>');
    echo('LOCALIZAÇÃO:');
    echo('<br>');
    echo('RUA:'.$v0['localidade'][0]);
    echo('<br>');
    echo('NÚMERO:'.$v0['localidade'][1]);
    echo('<br>');
    echo('BAIRRO:'.$v0['localidade'][2]);
    echo('<br>');
    echo('CIDADE:'.$v0['localidade'][3]);
    echo('<br>');
    echo('<br>');
    echo($v0 ['e-mail']);
    echo('<br>');
    echo($v0 ['curco']);
    echo('<br>');
    echo('DISCIPLINAS:');
    echo('<br>');
    echo('MATÉRIA DO CORÇO: '.$v0['disciplina'][0]);
    echo('<br>');
    echo('MATÉRIA DO CORÇO: '.$v0['disciplina'][1]);
    echo('<br>');
    echo('MATÉRIA DO CORÇO: '.$v0['disciplina'][2]);
    echo('<br>');
    echo('MATÉRIA DO CORÇO: '.$v0['disciplina'][3]);
    echo('<br>');
    echo('MATÉRIA DO CORÇO: '.$v0['disciplina'][4].'</div>');
    
?>

</body>
</html>
