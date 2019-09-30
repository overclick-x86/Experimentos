<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Receber os dados enviados pelo formulário fazendo a filtragem dos dados
        $_itensRecebidos = isset($_POST['cad']) ? $_POST['cad'] : null;
        ?>

        <ul>
            <?php foreach ($_itensRecebidos as $servico) { ?>
                <li><?php echo $servico; ?></li>
            <?php } ?>
        </ul>

    </body>
</html>