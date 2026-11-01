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
<div class="relatorio-vendas">
    <h2>Relatório de vendas de comissários</h2>

    <div class="relatorio-afiliados">

        <div class="campo">
            <label>Código do comissário</label>
            <input type="text">
        </div>

        <div class="campo">
            <label>Afiliados</label>
            <select>
                <option value="">Selecione...</option>
                <option value="Afiliado 1">Afiliado 1</option>
                <option value="Afiliado 2">Afiliado 2</option>
                <option value="Afiliado 3">Afiliado 3</option>
            </select>
        </div>

        <div class="campo">
            <label>Código da compra</label>
            <input type="text">
        </div>

        <div class="campo">
            <label>Status da compra</label>
            <select>
                <option value="">Selecione...</option>
                <option value="Aprovado">Aprovado</option>
                <option value="Cancelado">Cancelado</option>
                <option value="Pendente com afiliado">Pendente com afiliado</option>
            </select>
        </div>

        <div class="campo">
            <label>Data de início da compra</label>
            <input type="date">
        </div>

        <div class="campo">
            <label>Data de término da compra</label>
            <input type="date">
        </div>

        <div class="campo">
            <label>Código de desconto</label>
            <input type="text">
        </div>

        <div class="campo-check">
            <input type="checkbox">
            <label>Aplicar filtro adicional</label>
        </div>

    </div>
</div>




<style>
 .relatorio-vendas {
    margin-top: 30px;
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.relatorio-vendas h2 {
    font-size: 20px;
    margin-bottom: 20px;
    color: #333;
}

/* GRID DOS INPUTS */
.relatorio-afiliados {
    display: grid;
    grid-template-columns: repeat(3, 2fr); /* 3 colunas */
    gap: 20px 25px; /* espaçamento vertical e horizontal */
    margin-top: 15px;
}

.relatorio-afiliados .campo {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.relatorio-afiliados label {
    font-size: 14px;
    font-weight: 600;
    color: #444;
}

/* INPUTS PADRÃO */
.relatorio-afiliados input,
.relatorio-afiliados select,
.relatorio-afiliados datalist {
    padding: 10px 12px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
    outline: none;
}

.relatorio-afiliados input:focus,
.relatorio-afiliados select:focus {
    border-color: #0077ff;
}

/* CHECKBOX */
.campo-check {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-top: 10px;
}

.campo-check input[type="checkbox"] {
    width: 18px;
    height: 18px;
}
@media (max-width: 768px) {

    /* Container principal */
    .relatorio-vendas {
        padding: 20px;
    }

    .relatorio-vendas h2 {
        font-size: 20px;
        text-align: center;
    }

    /* Grid de inputs */
    .relatorio-afiliados {
        grid-template-columns: 1fr 1fr; /* 2 colunas no tablet */
        gap: 14px;
    }

    .relatorio-afiliados label {
        font-size: 14px;
        margin-bottom: 4px;
    }

    .relatorio-afiliados input,
    .relatorio-afiliados select {
        padding: 10px;
        font-size: 14px;
    }

    /* Ajuste do checkbox */
    .caixa-check {
        grid-column: span 2; /* ocupa a largura inteira */
        display: flex;
        align-items: center;
        gap: 10px;
        padding-top: 10px;
    }

    /* Botão */
    .btn-buscar {
        width: 100%;
        padding: 14px;
        font-size: 16px;
        grid-column: span 2;
    }
}


</style>
            <!-- Tabela -->
            <div class="status-ingressos">
                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">ingressos</label></div>
                    <div class="lote"><label class="titulo-campo">lote</label></div>
                    <div class="preco"><label class="titulo-campo">quantidade</label></div>
                    <div class="tipo"><label class="titulo-campo">Total</label></div>
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">                    
                    <div class="nome"><span class="valor tipo-cortesia">40028922</span></div>
                    <div class="lote"><span class="valor">2°</span></div>                    
                    <div class="tipo"><span class="valor ">250</span></div>
                    <div class="preco"><span class="valor">8.500,00</span></div>
                    </div>
                </div>
            </div>
        </div>
</div>


<style>
    .status-ingressos {
        padding: 15px 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.titulo-combo {
    width: 100%;
    text-align: left; /* Alinha tudo à esquerda */
    margin-bottom: 15px;
}

.titulo-combo h2 {
    font-size: 22px;
    font-weight: 700;
    color: #333;
}

/* TITULOS */
.linha-titulos {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr;
    gap: 12px;
    padding: 16px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.06);
}

.titulo-campo {
    font-size: 13px;
    color: #666;
    margin-bottom: 3px;
}

.valor {
    font-size: 15px;
    color: #333;
}

.tipo-cortesia {
    width: 80px;
    padding: 4px 8px;
    background: #eafaf0;
    border: 1px solid #27ae60;
    border-radius: 6px;
    color: #27ae60;
}

.icon-reprovar { 
    color: #e63946; 
    font-size: 20px; 
}

.icon-aprovar { 
    color: #2ecc71; 
    font-size: 20px; 
}

.btn-acoes {
    padding: 8px 12px;
    border: none;
    background: #007bff;
    color: #fff;
    border-radius: 8px;
    cursor: pointer;
}




@media (max-width: 768px) {

    /* Botões de filtro mais compactos */
    .filtros-ingressos {
        gap: 6px;
        flex-wrap: wrap;
    }

    .btnFiltro {
        padding: 6px 10px;
        font-size: 13px;
    }

    /* Ajuste das colunas */
    .linha-titulos,
    .item-ingresso {
        grid-template-columns: 1fr 0.6fr 0.7fr 0.7fr;
        padding: 12px;
        gap: 8px;
    }

    /* Fontes menores */
    .titulo-campo {
        font-size: 12px;
    }

    .valor {
        font-size: 14px;
    }

    .tipo-cortesia {
        font-size: 12px;
        width: auto;
        padding: 3px 6px;
    }

    /* Ícones menores */
    .icon-aprovar,
    .icon-reprovar {
        font-size: 18px;
    }

    /* Botão ações reduzido */
    .btn-acoes {
        padding: 6px 10px;
        font-size: 13px;
    }
}
</style>
</div>




</body>
</html>