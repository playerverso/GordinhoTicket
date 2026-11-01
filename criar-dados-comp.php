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


<!-- ================================
     NOVO DADO COMPLEMENTAR
================================ -->
<div class="criar-dados">

    <div class="dados-comp">

        <!-- TÍTULO -->
        <div class="dados-titulo">
            <h2>Novo dado complementar</h2>
        </div>

        <!-- TIPOS DE DADOS -->
        <div class="dados">
            <button class="btn-tipo">Telefone</button>
            <button class="btn-tipo">Data</button>
            <button class="btn-tipo">Hora</button>
            <button class="btn-tipo">Data/Hora</button>
            <button class="btn-tipo">CPF</button>
            <button class="btn-tipo">CNPJ</button>
            <button class="btn-tipo">CPF/CNPJ</button>
            <button class="btn-tipo">CEP</button>
            <button class="btn-tipo">Texto</button>
            <button class="btn-tipo">Parágrafo</button>
            <button class="btn-tipo">Lista</button>
            <button class="btn-tipo">Vários valores</button>
            <button class="btn-tipo">Múltipla escolha</button>
        </div>

        <!-- INPUTS PRINCIPAIS -->
        <div class="inputs-principais">

            <label class="label-campo">Título</label>
            <input type="text" class="input-campo" placeholder="Digite o título">

            <label class="label-campo">Tamanho</label>
            <select class="input-campo">
                <option>Muito pequeno</option>
                <option>Pequeno</option>
                <option>Médio</option>
                <option>Grande</option>
            </select>

            <label class="label-campo">Ordem de exibição</label>
            <input type="number" class="input-campo" placeholder="Ex: 1">

            <label class="label-campo">Instruções</label>
            <input type="text" class="input-campo" placeholder="Digite instruções para o usuário">
        </div>

        <!-- SWITCHES -->
        <div class="switch-area">

            <!-- OBRIGATÓRIO -->
            <div class="switch-item">
                <span>Obrigatório</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

            <!-- RESPOSTA NO INGRESSO -->
            <div class="switch-item">
                <span>Resposta no ingresso</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

            <!-- VISÍVEL -->
            <div class="switch-item">
                <span>Visível</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

            <!-- EXIBIR SOMENTE EM INGRESSOS ESPECÍFICOS -->
            <div class="switch-item">
                <span>Exibir ingressos específicos</span>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>

        </div>

        <!-- BOTÃO SALVAR -->
        <div class="area-salvar">
            <button class="btn-salvar">Salvar</button>
        </div>

    </div>

</div>
<style>
    /* ======= CONTAINER PRINCIPAL ======= */
.criar-dados {
    width: 100%;
    padding: 20px;
    display: flex;
    justify-content: center;
    background: #fff;
}

/* ======= BOX INTERNO ======= */
.dados-comp {
    width: 100%;
    max-width: 900px;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.08);
}

/* ======= TÍTULO ======= */
.dados-titulo {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 25px;
    color: #333;
}

/* ======= BOTÕES DE TIPOS ======= */
.dados {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
}

.dados .btn-tipo {
    padding: 10px 16px;
    background: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    transition: 0.25s;
}

.dados .btn-tipo:hover {
    background: #dfe3e6;
}

/* Quando selecionado (ativo) */
.dados .btn-tipo.ativo {
    background: #007bff;
    color: #fff;
    border-color: #007bff;
}

/* ======= INPUTS PRINCIPAIS ======= */
.inputs-principais {
    display: flex;
    flex-direction: column;
    gap: 14px;
    margin-bottom: 25px;
}

.label-campo {
    font-weight: 600;
    color: #444;
    font-size: 14px;
}

.input-campo {
    width: 100%;
    padding: 10px 12px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 6px;
    outline: none;
    transition: 0.2s;
}

.input-campo:focus {
    border-color: #007bff;
}
/* ======= ÁREA DE INPUTS EM LINHA ======= */
.dados-input-row {
    display: grid;
    grid-template-columns: 1fr 200px 1fr;
    gap: 18px;
    margin-bottom: 20px;
}

/* ======= TEXTAREA INSTRUÇÕES ======= */
textarea {
    resize: none;
    height: 100px;
}

/* ======= SWITCHES ======= */
.switch-area {
    display: flex;
    flex-direction: column;
    gap: 18px;
    margin: 25px 0;
}

/* Cada linha com título + switch */
.switch-linha {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Texto do switch */
.switch-linha label {
    font-size: 15px;
    color: #333;
    font-weight: 500;
}

/* Switch padrão */
.switch {
    position: relative;
    display: inline-block;
    width: 46px;
    height: 22px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

/* slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .3s;
    border-radius: 20px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 16px;
    width: 16px;
    left: 3px;
    bottom: 3px;
    background-color: white;
    transition: .3s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: #007bff;
}

input:checked + .slider:before {
    transform: translateX(24px);
}

/* ======= BOTÃO SALVAR ======= */
.btn-salvar {
    width: 100%;
    padding: 12px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: 0.25s;
    margin-top: 10px;
}

.btn-salvar:hover {
    background: #0069d9;
}

</style>
</div>




</body>
</html>