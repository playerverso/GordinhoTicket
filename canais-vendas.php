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
    <title>Gordinho-Eventos </title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body>
        <style>
            @font-face {
                font-family: 'font';
                src: url('Mansalva-Regular.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }   

            * {
                font-family: 'Poppins', sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body{
                font-family: 'Poppins', sans-serif;
            }
        </style>

        <?=$sidebar?>
            <div class="menu-config">
            <?=$menucomp?>
            <style>
            @media (max-width: 768px) {
            .menu-config{
                margin-top:50px;
                }
            }
            
        </style>
    </div>

<div class="controle-principal">

<style>
/* Container principal */
.controle-principal {
  margin-left: 350px; 
  width: 80%;
  padding: 50px 0px;
}

/* Responsivo */
@media (max-width: 768px) {
  .controle-principal {
    margin-left: 0;
    padding: 50px 15px;
    width: 100%;
  }

}
</style>



<div class="canais-vendas">

    <h2>Canais e venda - INGRESSO 1°</h2>

    <div class="canais">

        <!-- CARD -->
        <div class="canal-card">
            <div class="canal-topo">
                <i class="bi bi-diagram-3"></i>
                <h3>Todos</h3>
            </div>

            <div class="canal-info">
                <div><label>Total</label><span>100</span></div>
                <div><label>Vendidos</label><span>40</span></div>
                <div><label>Reservados</label><span>10</span></div>
            </div>

            <label class="label-qtd">Informe a quantidade</label>
            <span class="qtd-destaque">Todos</span>

            <input type="number" placeholder="Digite a quantidade">
        </div>

        <!-- Portal -->
        <div class="canal-card">
            <div class="canal-topo">
                <i class="bi bi-globe"></i>
                <h3>Portal</h3>
            </div>

            <div class="canal-info">
                <div><label>Total</label><span>50</span></div>
                <div><label>Vendidos</label><span>20</span></div>
                <div><label>Reservados</label><span>5</span></div>
            </div>

            <label class="label-qtd">Informe a quantidade</label>
            <span class="qtd-destaque">Todos</span>

            <input type="number">
        </div>

        <!-- App do cliente -->
        <div class="canal-card">
            <div class="canal-topo">
                <i class="bi bi-phone"></i>
                <h3>App do cliente</h3>
            </div>

            <div class="canal-info">
                <div><label>Total</label><span>30</span></div>
                <div><label>Vendidos</label><span>15</span></div>
                <div><label>Reservados</label><span>3</span></div>
            </div>

            <label class="label-qtd">Informe a quantidade</label>
            <span class="qtd-destaque">Todos</span>

            <input type="number">
        </div>

        <!-- App do produtor -->
        <div class="canal-card">
            <div class="canal-topo">
                <i class="bi bi-person-badge"></i>
                <h3>App do produtor</h3>
            </div>

            <div class="canal-info">
                <div><label>Total</label><span>20</span></div>
                <div><label>Vendidos</label><span>8</span></div>
                <div><label>Reservados</label><span>2</span></div>
            </div>

            <label class="label-qtd">Informe a quantidade</label>
            <span class="qtd-destaque">Todos</span>

            <input type="number">
        </div>

        <!-- Balcão -->
        <div class="canal-card">
            <div class="canal-topo">
                <i class="bi bi-shop"></i>
                <h3>Balcão</h3>
            </div>

            <div class="canal-info">
                <div><label>Total</label><span>10</span></div>
                <div><label>Vendidos</label><span>4</span></div>
                <div><label>Reservados</label><span>1</span></div>
            </div>

            <label class="label-qtd">Informe a quantidade</label>
            <span class="qtd-destaque">Todos</span>

            <input type="number">
        </div>

        <!-- PDV -->
        <div class="canal-card">
            <div class="canal-topo">
                <i class="bi bi-credit-card"></i>
                <h3>PDV</h3>
            </div>

            <div class="canal-info">
                <div><label>Total</label><span>5</span></div>
                <div><label>Vendidos</label><span>2</span></div>
                <div><label>Reservados</label><span>0</span></div>
            </div>

            <label class="label-qtd">Informe a quantidade</label>
            <span class="qtd-destaque">Todos</span>

            <input type="number">
        </div>

    </div>

    <!-- BOTÃO ÚNICO -->
    <div class="acoes-final">
        <button class="btn-salvar-geral">Salvar</button>
    </div>

</div>

<style>
/* =========================
   CANAIS DE VENDA – BASE
========================= */
.canais-vendas {
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
}

.canais-vendas h2 {
    font-size: 22px;
    margin-bottom: 20px;
    font-weight: 700;
    color: #222;
}

/* =========================
   GRID DOS CANAIS
========================= */
.canais {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

/* =========================
   CARD DO CANAL
========================= */
.canal-card {
    background: #f7f7f7;
    border-radius: 12px;
    padding: 16px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    box-sizing: border-box;
}

/* =========================
   TOPO DO CARD
========================= */
.canal-topo {
    display: flex;
    align-items: center;
    gap: 10px;
}

.canal-topo i {
    font-size: 22px;
    color: #007bff;
}

.canal-topo h3 {
    font-size: 17px;
    font-weight: 700;
    color: #222;
}

/* =========================
   INFORMAÇÕES (TOTAL / VENDIDOS / RESERVADOS)
========================= */
.canal-info {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    text-align: center;
}

.canal-info label {
    font-size: 12px;
    color: #666;
}

.canal-info span {
    display: block;
    font-size: 15px;
    font-weight: 600;
    color: #222;
}

/* =========================
   QUANTIDADE
========================= */
.label-qtd {
    font-size: 13px;
    color: #666;
}

.qtd-destaque {
    font-size: 16px;
    font-weight: 700;
    color: #007bff;
}

/* =========================
   INPUT
========================= */
.canal-card input {
    width: 100%;
    padding: 8px 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
    outline: none;
    box-sizing: border-box;
}

.canal-card input:focus {
    border-color: #007bff;
}

/* =========================
   BOTÃO SALVAR (GERAL)
========================= */
.acoes-final {
    margin-top: 30px;
    display: flex;
    justify-content: center;
}

.btn-salvar-geral {
    padding: 10px 34px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s;
}

.btn-salvar-geral:hover {
    background: #0056b3;
}

/* =========================
   AJUSTES GERAIS
========================= */
* {
    box-sizing: border-box;
}
@media (max-width: 768px) {

    /* CONTÊINER */
    .canais-vendas {
        padding: 15px;
    }

    .canais-vendas h2 {
        font-size: 20px;
        text-align: center;
    }

    /* GRID: 2 COLUNAS */
    .canais {
        grid-template-columns: repeat(1, 1fr);
        gap: 15px;
    }

    /* CARD */
    .canal-card {
        padding: 14px;
        gap: 10px;
    }

    /* INFO */
    .canal-info {
        grid-template-columns: 1fr;
        gap: 6px;
        text-align: left;
    }

    .canal-info div {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* INPUT */
    .canal-card input {
        font-size: 14px;
    }

    /* BOTÃO FINAL */
    .acoes-final {
        margin-top: 25px;
    }

    .btn-salvar-geral {
        width: 100%;
        max-width: 320px;
        font-size: 15px;
        padding: 12px;
    }
}

</style>


</div>


</body>
</html>
