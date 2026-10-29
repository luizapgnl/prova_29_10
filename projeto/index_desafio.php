    <?php

        session_start();

        require_once "desafio.php";

        $arquivo = "desafio.php";

        if(!file_exists($arquivo)){
            file_get_contents($arquivo, "[]");
        }

        if(!isset($_SESSION["recargas"])){
            $_SESSION["recargas"] = 0;
        }

        $mensagem = "";

        function lerRobos($arquivo){
            $conteudo = file_get_contents($arquivo);
            $robos=json_decode($conteudo, true);

            return is_array($robos) ? $robos:[];
        }

        function salvarRobos($arquivo, $robos){
            $json = json_encode(
                array_values($robos),
                JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
            );

            return file_put_contents($arquivo, $json, LOCK_EX)!== false;
        }

        function escapeshellargapar($texto){
            return htmlspecialchars(
                (strings)$texto,
                ENT_QUOTES,
                "UTF-8"
            );

        }

        IF ($_server["REQUEST_METHOD"]== "POST"){
            $robos = lerRobos(arquivo);

            if(isset($_POST["cadastrar"])){

            }
        }

    ?>