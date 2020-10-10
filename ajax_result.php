<?php

// não esquecer de configurar o banco de dados nessa página para o SELECT ser válido.

    $id = $_POST['id_estado'];

    $filtroCidades = $sql->select("SELECT * FROM cidades WHERE estados_cod_estados = " . $id);

    if($filtroCidades){
        echo json_encode($filtroCidades);
    }
    }else{

    echo json_encode(array(
        "status" => false,
        "mensagem" => "Requisicao Nao Permitida"
    ));
}