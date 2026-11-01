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



<!-- NOVO DESCONTO -->
<div class="novo-desconto">

    <div class="desconto">

        <!-- TÍTULO -->
        <h2>Novo desconto</h2>

        <!-- CÓDIGO -->
        <label class="label-campo">Código</label>
        <input type="text" class="input-campo" placeholder="Digite o código do desconto">

        <!-- DESCRIÇÃO -->
        <label class="label-campo">Descrição</label>
        <input type="text" class="input-campo" placeholder="Digite uma descrição">

        <!-- TIPO DE DESCONTO -->
        <label class="label-campo">Tipo de desconto</label>

        <div class="grupo-botoes tipo-desconto">
            <button class="btn-opcao-desconto">Simples</button>
            <button class="btn-opcao-desconto">Clube de vantagens</button>
            <button class="btn-opcao-desconto">Progressivo</button>
        </div>

        <!-- MODO DE APLICAÇÃO -->
        <label class="label-campo">Modo de aplicação</label>

        <div class="grupo-botoes modo-aplicacao">
            <button class="btn-opcao-aplicacao">Fixo</button>
            <button class="btn-opcao-aplicacao">Percentual</button>
        </div>

        <!-- INFORMATIVO -->
        <p class="texto-info">
            Para o desconto percentual, você define uma porcentagem de desconto que será aplicada ao valor do ingresso. 
            É possível também definir um valor máximo que limitará este desconto.
        </p>

        <!-- INPUTS DE VALORES -->
        <div class="grupo-inputs-duplos">
            <div>
                <label class="label-campo">Desconto</label>
                <input type="number" class="input-campo" placeholder="Ex: 10%">
            </div>

            <div>
                <label class="label-campo">Valor máximo</label>
                <input type="number" class="input-campo" placeholder="Ex: R$ 50,00">
            </div>

            <div>
                <label class="label-campo">Limite de utilização</label>
                <input type="number" class="input-campo" placeholder="Ex: 100 usos">
            </div>
        </div>

        <!-- SWITCH ATIVADO -->
        <div class="switch-desconto">
            <label class="label-campo">Desconto ativado</label>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>

        <!-- INGRESSOS -->
        <label class="label-campo">Ingressos</label>

        <div class="lista-ingressos">
            <label><input type="checkbox"> Ingresso meia pré-venda</label>
            <label><input type="checkbox"> Ingresso camarote pré-venda</label>
            <label><input type="checkbox"> Ingresso open bar</label>
            <label><input type="checkbox"> Ingresso open pré-venda</label>
            <label><input type="checkbox"> Ingresso promocional</label>
        </div>

        <!-- BOTÃO SALVAR -->
        <div class="area-salvar">
            <button class="btn-salvar">Salvar</button>
        </div>

    </div>

</div>

<style>
  /* CONTAINER PRINCIPAL */
.novo-desconto {
    width: 100%;
    padding: 25px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

/* BLOCO DO DESCONTO */
.desconto {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

/* TÍTULO */
.desconto h2 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
}

/* LABEL PADRÃO */
.label-campo {
    font-weight: 600;
    margin-bottom: 4px;
    display: block;
}

/* INPUTS */
.input-campo {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    outline: none;
    font-size: 14px;
    transition: 0.2s;
}

.input-campo:focus {
    border-color: #007bff;
}

/* GRUPO DE BOTÕES (TIPO + MODO) */
.grupo-botoes {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.btn-opcao-desconto,
.btn-opcao-aplicacao {
    padding: 10px 14px;
    background: #007bff;
    border: 1px solid transparent;
    color: #fff;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.2s;
    font-size: 14px;
}

.btn-opcao-desconto:hover,
.btn-opcao-aplicacao:hover {
    background: #dcdcdc;
}

.btn-opcao-desconto.ativo,
.btn-opcao-aplicacao.ativo {
    background: #007bff;
    border-color: #4a8cf7;
    color: #fff;
}

/* TEXTO INFORMATIVO */
.texto-info {
    background: #f7f7f7;
    padding: 12px;
    border-left: 4px solid #4a8cf7;
    border-radius: 6px;
    font-size: 13px;
    line-height: 1.4;
    color: #555;
}

/* GRID 3 INPUTS */
.grupo-inputs-duplos {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
}

/* Switch */
.switch-desconto {
    display: flex;
    align-items: center;
    gap: 10px;
}

/* SWITCH BOTÃO */
.switch {
    position: relative;
    width: 45px;
    height: 24px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    inset: 0;
    background-color: #ccc;
    border-radius: 30px;
    transition: .3s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 4px;
    bottom: 3px;
    background-color: white;
    border-radius: 50%;
    transition: .3s;
}

input:checked + .slider {
    background-color: #007bff;
}

input:checked + .slider:before {
    transform: translateX(20px);
}

/* LISTA DE INGRESSOS */
.lista-ingressos label {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 6px 0;
    font-size: 14px;
}

/* ÁREA DO BOTÃO SALVAR */
.area-salvar {
    margin-top: 25px;
    text-align: center;
}

.btn-salvar {
    padding: 12px 28px;
    background: #007bff;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-salvar:hover {
    background: #3b78d9;
}

@media (max-width: 768px) {

    .novo-desconto {
        padding: 18px;
    }

    .desconto h2 {
        font-size: 20px;
    }

    .input-campo {
        padding: 9px;
        font-size: 14px;
    }

    /* Botões viram coluna */
    .grupo-botoes {
        flex-direction: column;
        gap: 8px;
    }

    .btn-opcao-desconto,
    .btn-opcao-aplicacao {
        width: 100%;
        text-align: center;
        padding: 12px;
        font-size: 15px;
    }

    /* Inputs viram coluna */
    .grupo-inputs-duplos {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    .texto-info {
        font-size: 13px;
    }

    /* Botão salvar */
    .btn-salvar {
        width: 100%;
        padding: 14px;
        font-size: 17px;
    }
}


</style>

</div>




</body>
</html>