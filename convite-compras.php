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
    padding: 50px 0px;
    width: 100%;
  }


}
</style>


<div class="gerar-convite">
    <h3>Gerar convite de compra</h3>

    <div class="convite-compra">

        <label class="label-convite">Selecione o ingresso</label>

        <!-- SELECT PERSONALIZADO -->
        <div class="seletor" id="seletorConvite">
            <span id="seletorTexto">Selecione um ingresso</span>
            <div class="seletor-seta">▼</div>
        </div>

        <!-- LISTA DE OPÇÕES -->
        <div class="lista-opcoes" id="listaConvite">
            <div class="opcao-item" data-valor="50">Ingresso Open Bar 1 — R$ 50,00</div>
            <div class="opcao-item" data-valor="70">Ingresso Open Bar 2 — R$ 70,00</div>
            <div class="opcao-item" data-valor="100">Ingresso Open Bar 3 — R$ 100,00</div>
        </div>

        <!-- TOTAL -->
        <div class="total-box">
            <span>Total:</span>
            <span id="valorSelecionado">R$ 0,00</span>
        </div>

        <button class="btn-gerar">Gerar convite</button>
    </div>
</div>


<style>
    /* CONTAINER PRINCIPAL */
.gerar-convite {
    background: #ffffff;
    padding: 22px;
    border-radius: 12px;
    box-shadow: 0 3px 14px rgba(0,0,0,0.1);
    width: 900px;
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin: 0 auto;
}

.gerar-convite h3 {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin-bottom: 5px;
}

/* BLOCO INTERNO */
.convite-compra {
    display: flex;
    flex-direction: column;
    gap: 14px;
}

/* INPUT LISTA */
.input-convite {
    width: 100%;
    padding: 12px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 15px;
}

/* TOTAL DO INGRESSO */
.total-ingresso {
    background: #f7f7f7;
    padding: 12px;
    border-radius: 6px;
    display: flex;
    justify-content: space-between;
    font-size: 16px;
    font-weight: 600;
    border: 1px solid #ddd;
}

/* SELETOR FALSO */
.seletor {
    width: 100%;
    padding: 12px;
    border-radius: 6px;
    border: 1px solid #ccc;
    background: #fff;
    font-size: 15px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.seletor-seta {
    font-size: 12px;
    pointer-events: none;
}

/* LISTA DE OPÇÕES */
.lista-opcoes {
    display: none;
    background: #fff;
    border: 1px solid #ccc;
    margin-top: 4px;
    border-radius: 6px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.1);
    overflow: hidden;
}

.opcao-item {
    padding: 12px;
    cursor: pointer;
}

.opcao-item:hover {
    background: #f2f2f2;
}

/* TOTAL */
.total-box {
    background: #f7f7f7;
    padding: 12px;
    border-radius: 6px;
    display: flex;
    justify-content: space-between;
    font-size: 16px;
    font-weight: 600;
    border: 1px solid #ddd;
}

/* BOTÃO */
.btn-gerar {
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}


.btn-gerar-convite:hover {
    background: #0064cc;
}
@media (max-width: 768px) {

    .gerar-convite {
        width: 90%;
        padding: 18px;
        border-radius: 10px;
      
    }

    .gerar-convite h3 {
        font-size: 18px;
        text-align: center;
    }

    .convite-compra {
        gap: 12px;
    }


    /* Total */
    .total-box {
        padding: 10px;
        font-size: 14px;
        flex-direction: column;
        gap: 6px;
        text-align: center;
    }

    /* Botão */
    .btn-gerar {
        padding: 14px;
        font-size: 15px;
        border-radius: 8px;
    }
}


</style>


<script>
const seletor = document.getElementById("seletorConvite");
const lista = document.getElementById("listaConvite");
const seletorTexto = document.getElementById("seletorTexto");
const valorTotal = document.getElementById("valorSelecionado");

// Abre / fecha a lista
seletor.addEventListener("click", () => {
    lista.style.display = lista.style.display === "block" ? "none" : "block";
});

// Seleciona a opção
document.querySelectorAll(".opcao-item").forEach(item => {
    item.addEventListener("click", () => {

        // Nome do ingresso selecionado
        seletorTexto.textContent = item.textContent;

        // Valor no total
        const valor = item.getAttribute("data-valor");
        valorTotal.textContent = `R$ ${valor},00`;

        // Fecha lista
        lista.style.display = "none";
    });
});

// Fecha ao clicar fora
document.addEventListener("click", (e) => {
    if (!seletor.contains(e.target) && !lista.contains(e.target)) {
        lista.style.display = "none";
    }
});

</script>
</div>




</body>
</html>