<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!-- index.php -->

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $dados = [];

        $dados[] = array('id' => 1, 'nome' => 'coisa01');
        $dados[] = array('id' => 2, 'nome' => 'coisa02');
        $dados[] = array('id' => 3, 'nome' => 'coisa03');
        $dados[] = array('id' => 4, 'nome' => 'coisa04');
        $dados[] = array('id' => 5, 'nome' => 'coisa05');
        $dados[] = array('id' => 6, 'nome' => 'coisa06');
        $dados[] = array('id' => 7, 'nome' => 'coisa07');
        $dados[] = array('id' => 8, 'nome' => 'coisa08');
        ?>

        <form action="gerar_serv.php" method="POST" >

            <select name="cad[]" multiple title="Selecione os serviços">

                <?php foreach ($dados as $servico) { ?>
                    <option value="<?php echo $servico['id']; ?>">
                            <?php echo $servico['nome']; ?>
                    </option>
                <?php } ?>

            </select>
            
            <input type="submit" value="Enviar" />

        </form>
    </body>
</html>
