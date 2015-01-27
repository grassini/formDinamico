<?php

interface Form
{
    function CriarFormulario($label, $input);
}

class CriaForm implements Form
{
    function CriarFormulario($label, $input)
    {
        echo "
        <html>
            <head>
                <title>Formulario Teste</title>
                <style>
                    body{
                        text-align: center;
                    }
                    h1{
                        font-family: 'Courier New, Courier', monospace;
                    }

                    .label{
                        font-family: 'Courier New', Courier, monospace;
                        font-size: 18px;
                        padding: 5px;
                    }

                    .input{
                        margin: 5px;
                        height: 30px;
                        width: 300px;
                    }

                    .btn{
                        height: 30px;
                        width: 80px;
                        background: #f4f4f4;
                        margin-left: 5%;
                        margin-top: 10px;
                    }
                    .btn:hover{
                        cursor: pointer;
                    }

                </style>
            </head>
            <body>
                <h1 class='teste'>Formulario Dinamico</h1>
                <form action=''>


                    <label for='' class='label'>{$label}:</label>
                    <input type='{$input}' class='input'/><br/>


                    <input type='submit' class='btn' value='Enviar'/>

                </form>
            </body>
        </html>
        ";

    }

}


$mostrar = new CriaForm();
//echo $mostrar->CriarFormulario(Nome, text);



$campos = [
    'Nome',
    'Email',
    'Senha',
    'Assunto'
];

 foreach ($campos as $v) {
     //echo $v . '<br>';


    $mostrar->CriarFormulario($v,text);

 }

//
// $mostrar->CriarFormulario(foreach($campos as $v2){echo $v2.'<br>';});