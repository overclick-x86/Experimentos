<!doctype html>
<html lang="pt-br">
    <head>
        <title>teste de validação</title>
    </head>
    <body>
        <input type="text" name="texto-primario" id="texto-primario" /> 
        <script type="text/javascript">
            document.getElementById("texto-primario")
                    .addEventListener("keypress", function (e) {
                        if (this.value.length >= 40) {
                            alert("O número máximo de caracteres neste input são 40");
                            e.preventDefault();
                            return false;
                        }
                    });
        </script>
    </body>
</html>
