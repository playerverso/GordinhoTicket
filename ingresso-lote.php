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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<div class="Ingressos">

    <div class="topo-ingressos">
        <h2>Lote</h2>

        <div class="acoes-box">
            <!-- Botão de ações do bloco superior -->
                <a href="ingressos.php"><button class="btn-acoes">Ingresso <i class="bi bi-ticket-detailed"></i></button></a>
                <button id="btnAcoesIngressos" class="btn-acoes">Ações <i class="bi bi-caret-down-fill"></i></button>
                <div id="listaAcoesIngressos" class="lista-acoes">
                <div class="item" id="novoIngresso">Novo ingresso</div>
                <div class="item" id="abrirPopupLote">Lote de ingresso</div>
                <a href="gerenciar-ingresso.php" class="item-link"><div class="item">Gerenciar ingresso</div></a>
                <a href="gerenciar-ingresso.php"><div class="item">Ordem de exibição</div></a>
            </div>
        </div>
    </div>

</div>



<div class="status" id="statusIngressos">
    <h3> 1° Lote</h3>
    <div class="linha-status">

        <div class="campo">
            <label>Nome</label>
            <span>Ingresso</span>
        </div>

        <div class="campo">
            <label>Preço</label>
            <span>R$ 255,00</span>
        </div>

        <div class="campo">
            <label>Tipo</label>
            <span class="tipo-ingresso">Cortesia</span>
        </div>

        <div class="campo">
            <label>Tipo</label>
            <span>quantidade</span>
        </div>

        <div class="campo">
            <label>Visível</label>
            <i class="bi bi-check-circle-fill confirmado"></i>
        </div>

        <div class="acoes2-box">
            <!-- Botão de ações do status -->
            <a href="editar-ingresso.php"><button id="btnAcoesStatus" class="btn-acoes2">Editar <i class="bi bi-pencil-square"></i></button></a>
        </div>
    </div>

</div>






<style>
.Ingressos {
    width: 100%;
    padding: 20px;
    background: #f7f7f7;
    border-radius: 10px;
    margin-bottom: 30px;
}

/* topo */
.topo-ingressos {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.btn-acoes, .btn-acoes2 {
    padding: 8px 16px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.acoes-box, .acoes2-box {
    position: relative;
}

.status h3 {
    font-size: 20px;
    font-weight: 600;
    color: #000;
    margin-top: 10px;
    margin-left: 15px;
    margin-bottom: 10px;
}

.lista-acoes a,
.lista-acoes2 a {
    text-decoration: none !important;
    color: inherit;
    border: none;
    outline: none;
}



.lista-acoes, .lista-acoes2 {
    display: none;
    position: absolute;
    top: 40px;
    left: -100px;
    background: #fff;
    padding: 10px;
    border-radius: 6px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.15);
     flex-direction: column;  /* agora vertical */
    gap: 12px;
    z-index:9999;
}

.lista-acoes .item, .lista-acoes2 .item {
    padding: 8px 12px;
    background: #eee;
    border-radius: 4px;
    cursor: pointer;
    white-space: nowrap;
    text-decoration: none;
    color: #222;
    display: block;
}

.lista-acoes .item:hover,
.lista-acoes2 .item:hover {
    background: #ddd;
}


.linha-status {
    background: #f7f7f7;
    border-radius: 10px;
    padding: 10px;
    display: grid;
    grid-template-columns: repeat(7, auto);
    gap: 25px;
    align-items: center;
}

.campo {
    display: flex;
    flex-direction: column;
}

.campo label {
    font-size: 13px;
    color: #666;
}

.confirmado {
    color: #28a745;
    font-size: 20px;
}

.recusado {
    color: #dc3545;
    font-size: 20px;
}
@media (max-width: 768px) {
    .topo-ingressos {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .acoes-box, .acoes2-box {
        width: 100%;
    }

    .lista-acoes, .lista-acoes2 {
        left: 0 !important; /* corrige posição em telas menores */
        top: 35px;
        min-width: 150px;
    }

    .btn-organizar {
        flex-wrap: wrap;
        gap: 8px;
    }

    .linha-status {
        grid-template-columns: 1fr 1fr; /* organiza em 2 colunas */
        gap: 15px;
    }

    .campo label {
        font-size: 12px;
    }

    .campo span {
        font-size: 14px;
    }
}

</style>


<script>
// =============================
// MENU AÇÕES (Ingressos e Status)
// =============================
function fecharTodosMenus() {
    document.querySelectorAll(".lista-acoes, .lista-acoes2").forEach(menu => {
        menu.style.display = "none";
    });
}

// Ações do bloco superior
const btnAcoesIngressos = document.getElementById("btnAcoesIngressos");
const listaAcoesIngressos = document.getElementById("listaAcoesIngressos");

if (btnAcoesIngressos && listaAcoesIngressos) {
    btnAcoesIngressos.addEventListener("click", (e) => {
        e.stopPropagation();

        // alterna visibilidade
        listaAcoesIngressos.style.display =
            listaAcoesIngressos.style.display === "flex" ? "none" : "flex";
    });
}

// Fecha menus ao clicar fora
document.addEventListener("click", fecharTodosMenus);
</script>





</div>

</body>
</html>
