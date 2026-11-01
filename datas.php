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
                    <!-- Tabela -->
<div class="status-ingressos">
    <div class="titulo-combo">
        <h2>Datas de entrada</h2>
    </div>

    <div class="btn-data">
        <a href="datas-novo.php" class="botao-a">Nova Data</a>
    </div>

    <!-- ===== TÍTULOS ===== -->
    <div class="linha-titulos">
        <div class="nome"><label class="titulo-campo">Data de inicio</label></div>
        <div class="lote"><label class="titulo-campo">Data de término</label></div>
        <div class="tipo"><label class="titulo-campo">Ingressos</label></div>
        <div></div>
        <div></div>
    </div>

    <!-- ===== VALORES ===== -->
    <div class="item-ingresso">
        <div class="nome"><span class="valor">22/11/2022</span></div>
        <div class="lote"><span class="valor">22/01/2023</span></div>
        <div class="preco"><span class="valor">Camarotre open bar</span></div>

        <a href="datas-editar.php">
            <button class="icon-btn editar" data-tooltip="Editar">
                <i class="bi bi-pencil-square"></i>
            </button>
        </a>

        <button class="icon-btn excluir" data-tooltip="Excluir">
            <i class="bi bi-trash-fill"></i>
        </button>
    </div>
</div>


<style>
/* ================================
   CONTAINER PRINCIPAL
================================ */
.status-ingressos {
    display: flex;
    flex-direction: column;
    gap: 18px;
    width: 100%;
}

/* ================================
   TÍTULO
================================ */
.titulo-combo h2 {
    font-size: 22px;
    font-weight: 700;
    color: #333;
}

/* ================================
   BOTÃO "NOVA DATA"
================================ */
.btn-data {
    width: 100%;
    text-align: right;
    margin-bottom: 5px;
}

.botao-a {
    text-decoration: none;
    padding: 10px 15px;
    background: #007bff;
    border-radius: 8px;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: 0.25s;
}

.botao-a:hover {
    background: #0069d9;
}

/* ================================
   GRID TÍTULOS (DESKTOP)
================================ */
.linha-titulos {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr auto auto;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* ================================
   LINHA DE DADOS (DESKTOP)
================================ */
.item-ingresso {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr auto auto;
    gap: 12px;
    padding: 16px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.06);
}

.titulo-campo {
    font-size: 13px;
    color: #666;
}

.valor {
    font-size: 15px;
    color: #333;
}

/* BOTÕES */
.icon-btn {
    width: 38px;
    height: 38px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .25s ease;
}

/* Botão editar */
.icon-btn.editar {
    background: #0d6efd15;
    color: #0d6efd;
}

.icon-btn.editar:hover {
    background: #0d6efd;
    color: #fff;
    transform: scale(1.05);
}

/* Botão excluir */
.icon-btn.excluir {
    background: #dc354515;
    color: #dc3545;
}

.icon-btn.excluir:hover {
    background: #dc3545;
    color: #fff;
    transform: scale(1.05);
}

/* Tooltip custom */
.icon-btn[data-tooltip] {
    position: relative;
}

.icon-btn[data-tooltip]:hover::after {
    content: attr(data-tooltip);
    position: absolute;
    top: -32px;
    background: #333;
    color: #fff;
    padding: 5px 8px;
    font-size: 12px;
    border-radius: 6px;
    white-space: nowrap;
    opacity: 1;
}

.icon-btn[data-tooltip]::after {
    opacity: 0;
    pointer-events: none;
    transition: .2s;
}


/* ======================================================
   RESPONSIVO ATÉ 768PX
====================================================== */
@media (max-width: 768px) {

    .btn-data {
        text-align: left;
    }

    .botao-a {
        font-size: 15px;
        padding: 9px 14px;
    }

    .linha-titulos {
        grid-template-columns: 1fr 1fr 1fr auto auto;
        font-size: 12px;
        padding: 12px;
    }

    .item-ingresso {
        grid-template-columns: 1fr 1fr 1fr auto auto;
        gap: 10px;
        padding: 12px;
    }

    .titulo-campo {
        font-size: 12px;
    }

    .valor {
        font-size: 14px;
    }
}
</style>

        
    </div>

</body>
</html>
