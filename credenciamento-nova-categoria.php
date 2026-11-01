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

<div class="nova-categoria">
    <h2>Nova categoria</h2>

    <div class="nome-categoria">

        <div class="campo">
            <label>Nome da categoria</label>
            <input type="text" placeholder="Digite o nome">
        </div>

        <div class="campo">
            <label>Descrição</label>
            <input type="text" placeholder="Digite a descrição">
        </div>

    </div>

    <!-- Botão deslizante -->
    <div class="categoria-slide">
        <span>Permitir convidados?</span>
        <button id="btn-convidados" class="slide-btn" data-state="off"></button>
        <span class="estado-texto">Não</span>
    </div>

    <button class="btn-salvar-categoria">Salvar</button>
</div>

<style>
    .nova-categoria {
    background: #fff;
    padding: 25px;
    border-radius: 14px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    max-width: 900px;
    margin: 25px auto;
}

.nova-categoria h2 {
    font-size: 22px;
    margin-bottom: 20px;
    color: #333;
}

.nome-categoria {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 15px;
    margin-bottom: 25px;
}

.campo label {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 5px;
    display: block;
}

.campo input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

/* Slide */
.categoria-slide {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
}

.slide-btn {
    width: 55px;
    height: 28px;
    background: #ccc;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    position: relative;
    transition: 0.3s;
}

.slide-btn::before {
    content: "";
    position: absolute;
    left: 3px;
    top: 3px;
    width: 22px;
    height: 22px;
    background: #fff;
    border-radius: 50%;
    transition: 0.3s;
}

.slide-btn[data-state="on"] {
    background: #007bff;
}

.slide-btn[data-state="on"]::before {
    transform: translateX(26px);
}

.estado-texto {
    font-weight: 600;
}

/* Botão salvar */
.btn-salvar-categoria {
    display: block;
    margin: 0 auto;
    padding: 12px 35px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
}

.btn-salvar-categoria:hover {
    background: #0069d9;
}
@media (max-width: 768px) {

    .nova-categoria {
        padding: 18px;
        margin: 15px;
    }

    .nova-categoria h2 {
        font-size: 18px;
        text-align: center;
    }

    /* inputs passam para 1 coluna */
    .nome-categoria {
        grid-template-columns: 1fr;
    }

    .campo label {
        font-size: 13px;
    }

    .campo input {
        padding: 10px;
        font-size: 14px;
    }

    /* slide */
    .categoria-slide {
        flex-direction: row;
        justify-content: space-between;
        gap: 10px;
        margin-top: 10px;
    }

    .slide-btn {
        width: 50px;
        height: 26px;
    }

    .slide-btn::before

</style>

<script>
    document.getElementById("btn-convidados").addEventListener("click", function () {
    let state = this.getAttribute("data-state");
    let text = this.nextElementSibling;

    if (state === "off") {
        this.setAttribute("data-state", "on");
        text.textContent = "Sim";
    } else {
        this.setAttribute("data-state", "off");
        text.textContent = "Não";
    }
});
</script>
</div>

</body>
</html>
