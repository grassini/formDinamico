<?php

class Formulario
{
    public $campo;
    public $campo2;
    public $nomeDoFormulario;

    public function __construct($nomeFormulario)
    {
        $this->nomeDoFormulario = $nomeFormulario;
    }


    public function getCampo()
    {
        return $this->campo;
    }


    public function setCampo($campo)
    {
        $this->campo = $campo;
    }


    public function getCampo2()
    {
        return $this->campo2;
    }


    public function setCampo2($campo2)
    {
        $this->campo2 = $campo2;
    }


    public function Render()
    {
        echo "
            <html>
                <header>
                    <title>{$this->nomeDoFormulario}</title>
                    <style>
                        body{
                            text-align: center;
                        }
                        h1{
                            font-family: 'Courier New, Courier', monospace;
                            margin-top: 30px;
                        }

                        .label{
                            font-family: 'Courier New', Courier, monospace;
                            font-size: 18px;
                            padding: 5px;
                        }

                        .input{
                            margin: 5px;
                            height: 30px;
                            width: 200px;
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
                </header>

                <body>
                    <h1>{$this->nomeDoFormulario}</h1>
                    <form>
                        <label for='' class='label'>{$this->getCampo()}</label>
                        <input type='text' class='input' value='' /><br>

                        <label for='' class='label'>{$this->getCampo2()}</label>
                        <input type='text' class='input' value='' /><br>

                        <input type='submit' class='btn' value='Enviar'/>
                    </form>
                </body>

            </html>
        ";
    }
}

$form = new Formulario('Formulario de Contato');
$form->setCampo('Nome :');
$form->setCampo2('E-mail:');
$form->Render();