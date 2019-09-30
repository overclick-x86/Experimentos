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
        // Dados para conexão
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "myDB";

        // String de conexão
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Verificar se conexão foi bem sucedida
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Receber os dados enviados pelo formulário fazendo a filtragem dos dados
        $_itensRecebidos = isset($_POST['cad']) ? $_POST['cad'] : null;

        // Criar o objeto data para o BD
        $data = date_format(date_create(date("Y/m/d")), "Y/m/d");

        // Buscar id do cliente
        $sqlBuscarClienteId = "SELECT id FROM cliente WHERE cpf='12345678901'";
        $clienteId = mysqli_query($conn, $sqlBuscarClienteId);

        // Insere o registro da ordem de serviço e captura o id gerado para o registro.
        $sqlInsertOrdemDeServico = "INSERT INTO ordem_de_servico "
                . "( data, cliente_id ) "
                . "VALUES "
                . "( '{$data}', '{$clienteId}')";
        $ordemDeServicoId = mysqli_insert_id($conn, $sqlInsertOrdemDeServico);

        // Fazer relação dos serviços que estarão na OS
        $sqlOrdemDeServicoContemServicos = "";
        foreach ($_itensRecebidos as $servicoId) {
            $sqlOrdemDeServicoContemServicos .= "INSERT INTO ordem_de_servico_has_servico "
                    . "( ordem_de_servico_id, servico_id ) "
                    . "VALUES "
                    . "( '{$ordemDeServicoId}', '{$servicoId}') ";
        }
        mysqli_query($conn, $sqlOrdemDeServicoContemServicos);
        // 
        ?>

        <ul>
            <?php foreach ($_itensRecebidos as $servico) { ?>
                <li><?php echo $servico; ?></li>
            <?php } ?>
        </ul>

    </body>
</html>