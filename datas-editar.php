<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "sidebar.php";
include "menu-comp.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gordinho-Eventos</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    @font-face {
        font-family: 'font';
        src: url('Mansalva-Regular.ttf') format('truetype');
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Sidebar fixa (supondo...) */
    /* Ajuste este valor caso sua sidebar tenha outra largura */
    .sidebar {
        width: 350px;
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
    }

    /* Área principal */
    .controle-principal {
        margin-left: 350px; /* mesma largura da sidebar */
        padding: 50px 30px;
        width: calc(100% - 350px);
        min-height: 100vh;
    }

    @media (max-width: 768px) {  
        .controle-principal {
            margin-left: 0;
            width: 100%;
            padding: 40px 20px;
        }

        .menu-config {
            margin-top: 50px;
        }
    }
</style>

</head>
<body>

    <?=$sidebar?>

    <div class="menu-config">
        <?=$menucomp?>
    </div>

    <div class="controle-principal">

       <!-- ========================================= -->
<!-- NOVA DIV – CADASTRAR NOVA DATA -->
<!-- ========================================= -->
<div class="datas-novo">
    <h3>Editar data</h3>

    <!-- Inputs de datas -->
    <div class="grupo-data">
        <label for="dataInicio">Data de início</label>
        <input type="date" id="dataInicio">
    </div>

    <div class="grupo-data">
        <label for="dataTermino">Data de término</label>
        <input type="date" id="dataTermino">
    </div>

    <!-- Checkboxes de ingressos -->
    <div class="datas-ingressos">
        <label><input type="checkbox"> Ingresso 1</label>
        <label><input type="checkbox"> Ingresso 2</label>
        <label><input type="checkbox"> Ingresso 3</label>
        <label><input type="checkbox"> Ingresso 4</label>
        <label><input type="checkbox"> Ingresso 5</label>
        <label><input type="checkbox"> Ingresso 6</label>
    </div>

    <!-- Botão -->
    <button class="btn-salvar">Salvar</button>
</div>


<style>

.datas-novo {
    width: 100%;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 3px 18px rgba(0,0,0,0.08);
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-top: 20px;
}

.datas-novo h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 700;
    color: #333;
}


.grupo-data {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.grupo-data label {
    font-size: 14px;
    color: #555;
    font-weight: 600;
}

.grupo-data input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
    outline: none;
    transition: 0.25s;
}

.grupo-data input:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0,123,255,0.25);
}


.datas-ingressos {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 2 por linha */
    grid-template-rows: repeat(3, auto);   /* 3 fileiras */
    gap: 12px;
    margin-top: 10px;
}


.datas-ingressos label {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14px;
    color: #444;
}


.btn-salvar {
    margin-top: 10px;
    padding: 12px 16px;
    background: #007bff;
    border: none;
    border-radius: 10px;
    color: #fff;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: 0.25s;
}

.btn-salvar:hover {
    background: #0069d9;
}



@media (max-width: 768px) {
    .datas-ingressos {
        grid-template-columns: repeat(2, 1fr);
    }

    .datas-novo {
        padding: 16px;
    }

    .btn-salvar {
        width: 100%;
    }
}
</style>


    </div>

</body>
</html>
