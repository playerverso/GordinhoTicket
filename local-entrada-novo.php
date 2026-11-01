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

        <!-- AQUI DENTRO VAI O SEU CONTEÚDO -->
        <div class="local-novo-entrada">

    <h2>Novo local de entrada</h2>

    <!-- Campo Nome -->
    <div class="campo">
        <label for="nomeLocal">Nome</label>
        <input type="text" id="nomeLocal" placeholder="Digite o nome do local">
    </div>

    <!-- Campo Ingressos -->
    <div class="campo">
        <label>Ingressos</label>

        <div class="checkbox-item">
            <input type="checkbox" id="ingresso1">
            <label for="ingresso1">Ingresso open-bar 1° lote</label>
        </div>
    </div>

    <!-- Botão Salvar -->
    <div class="btn-salvar-box">
        <button class="btn-salvar">Salvar</button>
    </div>

</div>


<style>
.local-novo-entrada {
    width: 100%;
    
    background: #fff;
    padding: 20px 22px;
    border-radius: 12px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.10);
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.local-novo-entrada h2 {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

/* Campos */
.campo {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.campo label {
    font-size: 15px;
    font-weight: 600;
    color: #444;
}

.campo input[type="text"] {
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 15px;
    outline: none;
    transition: .25s;
}

.campo input[type="text"]:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 3px rgba(0,123,255,0.2);
}

/* Checkbox */
.checkbox-item {
    display: flex;
    align-items: center;
    gap: 8px;
}

.checkbox-item input {
    width: 18px;
    height: 18px;
    cursor: pointer;
}

.checkbox-item label {
    font-size: 15px;
    cursor: pointer;
}

/* Botão salvar */
.btn-salvar-box {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.btn-salvar {
    padding: 12px 28px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: .25s;
}

.btn-salvar:hover {
    background: #0363caff;
   
}
@media (max-width: 768px) {

    .local-novo-entrada {
        padding: 18px;
        max-width: 100%;
        box-shadow: 0 3px 14px rgba(0,0,0,0.08);
        gap: 16px;
    }

    .local-novo-entrada h2 {
        font-size: 18px;
        text-align: left;
    }

    .campo label {
        font-size: 14px;
    }

    .campo input[type="text"] {
        font-size: 14px;
        padding: 9px 10px;
    }

    .checkbox-item label {
        font-size: 14px;
    }

    .checkbox-item input {
        width: 17px;
        height: 17px;
    }

    .btn-salvar {
        width: 100%;
        font-size: 15px;
        padding: 12px;
        border-radius: 10px;
    }

    .btn-salvar-box {
        justify-content: center;
    }
}

</style>


    </div>

</body>
</html>
