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

<div class="vendas-fisicas">
    <h3>Vendas Físicas</h3>

    <div class="inputs-botoes">
        <input type="text" id="pesquisaProdutora" placeholder="Pesquisar produtora...">
        <button id="botaoPesquisar">Pesquisar</button>
    </div>

    <!-- PRODUTORA -->
    <div class="produtora">
        <div class="gordinho-produtora">
            <span class="nome-produtora"><i class="bi bi-shop"></i>Gordinho Produções</span>
            <i class="bi bi-chevron-down seta-produtora"></i>
        </div>

        <div class="lista-ingressos">
            <!-- 1 -->
            <label class="item-ingresso">
                <span>INGRESSO MEIA TESTE [PRÉ-VENDA] — R$ 30,00</span>
                <div class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </div>
            </label>

            <!-- 2 -->
            <label class="item-ingresso">
                <span>INGRESSO TESTE CAMAROTE [PRÉ-VENDA] — R$ 5,00</span>
                <div class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </div>
            </label>

            <!-- 3 -->
            <label class="item-ingresso">
                <span>INGRESSO TESTE CAMAROTE — R$ 150,00</span>
                <div class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </div>
            </label>

            <!-- 4 -->
            <label class="item-ingresso">
                <span>INGRESSO TESTE OPEN BAR [PRÉ-VENDA] — R$ 5,00</span>
                <div class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </div>
            </label>

            <!-- 5 -->
            <label class="item-ingresso">
                <span>INGRESSO TESTE OPEN [PRÉ-VENDA] — R$ 0,00</span>
                <div class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </div>
            </label>

            <!-- 6 -->
            <label class="item-ingresso">
                <span>INGRESSO TESTE [PROMOCIONAL] — R$ 0,00</span>
                <div class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </div>
            </label>
        </div>
    </div>
</div>



<style>
  .vendas-fisicas {
    width: 100%;
    padding: 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0px 4px 16px rgba(0,0,0,0.1);
}

.inputs-botoes {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.inputs-botoes input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
}

.inputs-botoes button {
    padding: 10px 18px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

/* PRODUTORA */
.produtora {
    margin-top: 10px;
    border: 1px solid #eaeaea;
    border-radius: 10px;
    overflow: hidden;
}

.gordinho-produtora {
    padding: 12px;
    background: #f7f7f7;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}





/* Nome + Ícone da Produtora */
.nome-produtora {
    font-size: 16px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 8px; /* espaço entre o ícone e o texto */
}

/* Ícone da loja */
.icone-produtora {
    font-size: 20px;
    color: #007bff;  /* cor personalizada */
}

/* Ícone da seta */
.seta-produtora {
    font-size: 20px;
    transition: .3s;
}

.seta-aberta {
    transform: rotate(180deg);
}

.gordinho-produtora:hover {
    background: #efefef;
}

.seta-produtora {
    font-size: 20px;
    transition: .3s;
}

.lista-ingressos {
    display: none; /* INICIA CONTRAÍDO */
    flex-direction: column;
    padding: 10px;
    gap: 12px;
}

/* ÍTENS */
.item-ingresso {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fafafa;
    padding: 10px 14px;
    border-radius: 8px;
    border: 1px solid #e5e5e5;
}

/* SWITCH */
.switch {
    position: relative;
    width: 46px;
    height: 24px;
}

.switch input {
    display: none;
}

.slider {
    position: absolute;
    cursor: pointer;
    background: #ccc;
    border-radius: 34px;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    width: 20px;
    height: 20px;
    left: 2px;
    bottom: 2px;
    background: white;
    border-radius: 50%;
    transition: .4s;
}

.switch input:checked + .slider {
    background: #28a745;
}

.switch input:checked + .slider:before {
    transform: translateX(22px);
}

.seta-aberta {
    transform: rotate(180deg);
}
@media (max-width: 768px) {

    .vendas-fisicas {
        padding: 16px;
    }

    .inputs-botoes {
        flex-direction: column;
    }

    .inputs-botoes button {
        width: 100%;
    }

    /* PRODUTORA */
    .gordinho-produtora {
        padding: 14px;
    }

    .nome-produtora {
        font-size: 15px;
        gap: 6px;
    }

    .icone-produtora {
        font-size: 18px;
    }

    .seta-produtora {
        font-size: 18px;
    }

    .lista-ingressos {
        padding: 8px;
        gap: 10px;
    }

    .item-ingresso {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        padding: 12px;
    }

    /* Ajusta o switch no mobile */
    .item-ingresso .switch {
        margin-left: auto;
        transform: scale(0.9);
    }
}


</style>

<script>
// Expande/contrai produtora
document.querySelector(".gordinho-produtora").addEventListener("click", function () {
    const lista = document.querySelector(".lista-ingressos");
    const seta = document.querySelector(".seta-produtora");

    if (lista.style.display === "flex") {
        lista.style.display = "none";
        seta.classList.remove("seta-aberta");
    } else {
        lista.style.display = "flex";
        seta.classList.add("seta-aberta");
    }
});


</script>
</div>




</body>
</html>