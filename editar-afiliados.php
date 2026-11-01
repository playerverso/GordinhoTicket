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

<div class="editar-afiliados">

    <h2>Editar afiliados</h2>

    <!-- Inputs principais -->
    <div class="grupo-inputs">
        <input type="text" placeholder="Código">

        <input list="lista-descontos" placeholder="Desconto">
        <datalist id="lista-descontos">
            <option value="5%">
            <option value="10%">
            <option value="15%">
            <option value="20%">
        </datalist>

        <input type="text" placeholder="Nome">
        <input type="text" placeholder="Sobrenome">
    </div>

    <!-- Switches -->
<div class="btn-slider">

    <!-- Slide 1 -->
    <div class="botao-slide">
        <span>Habilitado:</span>

        <button id="btn-habilitado" class="slide-btn" data-state="on"></button>
        <span class="estado-texto" id="txt-habilitado">Habilitado</span>
    </div>

    <!-- Slide 2 -->
    <div class="botao-slide">
        <span>Deseja vincular usuário?</span>

        <button id="btn-vincular" class="slide-btn" data-state="off"></button>
        <span class="estado-texto" id="txt-vincular">Não</span>
    </div>

</div>


    <!-- Email -->
    <div class="input-email">
        <input type="email" class="email" placeholder="E-mail">
    </div>
    <!-- Botão Salvar -->
    <button class="btn-salvar">Salvar</button>

</div>



<style>
  .editar-afiliados {
    background: #fff;
    padding: 25px;
    border-radius: 14px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.12);
    max-width: 900px;
    margin: 20px auto;
}

.editar-afiliados h2 {
    text-align: left;
    font-size: 22px;
    margin-bottom: 20px;
    color: #333;
}

/* Grupo dos inputs */
.grupo-inputs {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    margin-bottom: 25px;
}

.grupo-inputs input {
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

/* Switches */
.btn-slider {
    display: flex;
    flex-direction: column;
    gap: 25px;
    margin-top: 20px;
}

.botao-slide {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* switch */
.slide-btn {
    width: 55px;
    height: 28px;
    background: #ccc; /* OFF */
    border: none;
    border-radius: 20px;
    cursor: pointer;
    position: relative;
    transition: 0.3s;
}

/* bolinha */
.slide-btn::before {
    content: "";
    position: absolute;
    left: 3px;
    top: 3px;
    width: 22px;
    height: 22px;
    background: white;
    border-radius: 50%;
    transition: 0.3s;
}

/* estado ON */
.slide-btn[data-state="on"] {
    background: #007bff; /* verde */
}

.slide-btn[data-state="on"]::before {
    transform: translateX(26px);
}

/* texto do lado */
.estado-texto {
    font-weight: 600;
}



/* Email */
.input-email {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 25px;
}

.email{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin-bottom: 25px;


}

/* Botão salvar */
.btn-salvar {
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

.btn-salvar:hover {
    background: #0069d9;
}

@media (max-width: 768px) {

    .editar-afiliados {
        padding: 18px;
        max-width: 100%;
        margin: 15px;
    }

    .editar-afiliados h2 {
        font-size: 20px;
        text-align: center;
    }

    /* Inputs passam para 1 coluna */
    .grupo-inputs {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .grupo-inputs input {
        width: 100%;
        font-size: 15px;
    }

    /* Switches ajustados */
    .btn-slider {
        gap: 20px;
    }

    .botao-slide {
        flex-direction: row;
        justify-content: space-between;
    }

    .slide-btn {
        width: 50px;
        height: 26px;
    }

    .slide-btn::before {
        width: 20px;
        height: 20px;
        top: 3px;
        left: 3px;
    }

    .slide-btn[data-state="on"]::before {
        transform: translateX(22px);
    }

    .estado-texto {
        font-size: 15px;
    }

    /* Email */
    .email {
        font-size: 15px;
    }

    /* Botão salvar */
    .btn-salvar {
        width: 100%;
        padding: 14px;
        font-size: 17px;
    }
}


</style>


<script>

// Slide 1 - Habilitado
// Slide 1
const btnH = document.getElementById("btn-habilitado");
const txtH = document.getElementById("txt-habilitado");

btnH.addEventListener("click", () => {
    let st = btnH.getAttribute("data-state");

    if (st === "on") {
        btnH.setAttribute("data-state", "off");
        txtH.textContent = "Desabilitado";
    } else {
        btnH.setAttribute("data-state", "on");
        txtH.textContent = "Habilitado";
    }
});

// Slide 2
const btnV = document.getElementById("btn-vincular");
const txtV = document.getElementById("txt-vincular");

btnV.addEventListener("click", () => {
    let st = btnV.getAttribute("data-state");

    if (st === "off") {
        btnV.setAttribute("data-state", "on");
        txtV.textContent = "Sim";
    } else {
        btnV.setAttribute("data-state", "off");
        txtV.textContent = "Não";
    }
});

</script>
</div>




</body>
</html>













</body>
</html>