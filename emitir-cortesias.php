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


<div class="cortesias">
    <h2 class="titulo-cortesias">Emitir Cortesias</h2>

    <div class="caixa-cortesias">

        <h3 class="subtitulo-cortesias">
            Selecione o tipo de emissão de cortesia
        </h3>

        <div class="grupo-botoes-cortesias">
         <button class="btn-cortesia" id="btnUnicoEmail">Emitir para único e-mail</button>
         <button class="btn-cortesia" id="btnVariosEmails">Emitir para vários e-mails</button>

        </div>

    </div>
</div>

<style>
    /* ======= CONTAINER PRINCIPAL ======= */
.cortesias {
    background: #fff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.10);
    margin-bottom: 30px;
}

/* ======= TÍTULO ======= */
.titulo-cortesias {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
}

/* ======= BOX INTERNO ======= */
.caixa-cortesias {
    background: #f8f9fa;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
}

/* ======= SUBTÍTULO ======= */
.subtitulo-cortesias {
    font-size: 17px;
    margin-bottom: 18px;
    color: #444;
}

/* ======= BOTÕES ======= */
.grupo-botoes-cortesias {
    display: flex;
    gap: 12px;
}

.btn-cortesia {
    flex: 1;
    padding: 12px 18px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-cortesia:hover {
    background: #0069d9;
}
@media (max-width: 768px) {

    .cortesias {
        padding: 18px;
    }

    .titulo-cortesias {
        font-size: 20px;
        margin-bottom: 16px;
    }

    .caixa-cortesias {
        padding: 16px;
    }

    .subtitulo-cortesias {
        font-size: 15px;
        margin-bottom: 14px;
    }

    /* Botões passam a quebrar linha */
    .grupo-botoes-cortesias {
        flex-direction: column;
        gap: 10px;
    }

    .btn-cortesia {
        width: 100%;
        padding: 12px;
        font-size: 14px;
    }
}

</style>
<!-- POPUP EMITIR CORTESIA PARA UM ÚNICO EMAIL -->
<div id="popupUnicoEmail" class="popup-overlay">
    <div class="popup-cortesia">
        <h2>Emitir cortesia para um único e-mail</h2>

        <!-- Nome -->
        <label class="popup-label">Nome</label>
        <input type="text" class="popup-input" placeholder="Digite o nome">

        <!-- Sobrenome -->
        <label class="popup-label">Sobrenome</label>
        <input type="text" class="popup-input" placeholder="Digite o sobrenome">

        <!-- Email -->
        <label class="popup-label">E-mail</label>
        <input type="email" class="popup-input" placeholder="exemplo@email.com">

        <!-- CPF -->
        <label class="popup-label">CPF</label>
        <input type="text" class="popup-input" placeholder="000.000.000-00">

        <!-- Categoria / ingressos -->
      <label class="popup-label">Categoria</label>

<div class="categoria-select">
    <input  type="text"  id="inputCategoria"  class="popup-input" class="input-campo" placeholder="Selecione a categoria" readonly>
    <div class="categoria-lista" id="listaCategorias">
        <div class="categoria-opcao">Ingresso Open Bar 1</div>
        <div class="categoria-opcao">Ingresso Open Bar 2</div>
        <div class="categoria-opcao">Ingresso Open Bar 3</div>
    </div>
</div>

        <!-- Ações -->
        <div class="popup-botoes">
            <button class="btn-emitir">Emitir</button>
            <button class="btn-cancelar" id="closePopupUnicoEmail">Cancelar</button>
        </div>
    </div>
</div>


<style>
    /* Overlay */
.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.45);
    backdrop-filter: blur(2px);
    justify-content: center;
    align-items: center;
    z-index: 999;
}

/* Caixa do popup */
.popup-cortesia {
    width: 420px;
    background: #fff;
    padding: 28px;
    border-radius: 12px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.popup-cortesia h2 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 6px;
    color: #333;
}

/* Labels e Inputs */
.popup-label {
    font-size: 14px;
    font-weight: 600;
    color: #444;
}

.popup-input {
    padding: 12px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
}

/* Categorias */
.categoria-select {
    position: relative;
    width: 100%;
}

#inputCategoria {
    cursor: pointer;
}

.categoria-lista {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 6px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.1);
    margin-top: 4px;
    display: none;
    z-index: 20;
}

.categoria-opcao {
    padding: 10px 12px;
    cursor: pointer;
    transition: .2s;
}

.categoria-opcao:hover {
    background: #f0f0f0;
}

/* Botões Emitir e Cancelar */
.popup-botoes {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.btn-emitir {
    background: #007bff;
    color: #fff;
    padding: 12px 20px;
    border: none;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
}

.btn-cancelar {
    background: #ccc;
    color: #333;
    padding: 12px 20px;
    border: none;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
}

.btn-emitir:hover {
    background: #0069d9;
}

.btn-cancelar:hover {
    background: #b5b5b5;
}

@media (max-width: 768px) {

    /* Overlay */
    .popup-overlay {
        margin-top: 30px;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Caixa do popup — agora rolável */
    .popup-cortesia {
        width: 100%;
        max-width: 360px;
        max-height: 90vh;  /* Altura máxima de tela */
        overflow-y: auto;  /* ATIVA A ROLAGEM */
        
        padding: 22px;
        gap: 12px;
    }

    .popup-cortesia::-webkit-scrollbar {
        width: 6px;
    }
    .popup-cortesia::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 3px;
    }

    .popup-cortesia h2 {
        font-size: 20px;
        text-align: center;
    }

    /* Labels */
    .popup-label {
        font-size: 13px;
    }

    /* Inputs */
    .popup-input {
        padding: 11px;
        font-size: 13px;
    }

    /* Lista de categorias */
    .categoria-lista {
        max-height: 220px;
        overflow-y: auto;
    }

    .categoria-opcao {
        padding: 9px 11px;
        font-size: 14px;
    }

    /* Botões */
    .popup-botoes {
        flex-direction: column;
        gap: 10px;
        margin-top: 16px;
    }

    .btn-emitir,
    .btn-cancelar {
        width: 100%;
        padding: 13px;
        font-size: 15px;
    }
}


</style>

<script>
const btnUnicoEmail = document.getElementById("btnUnicoEmail");
const popupUnicoEmail = document.getElementById("popupUnicoEmail");

btnUnicoEmail.addEventListener("click", () => {
    popupUnicoEmail.style.display = "flex";
});

document.getElementById("closePopupUnicoEmail").addEventListener("click", () => {
    popupUnicoEmail.style.display = "none";
});

/* Abrir lista */
const inputCategoriaUnico = document.getElementById("inputCategoria");
const listaCategoriasUnico = document.getElementById("listaCategorias");

inputCategoriaUnico.addEventListener("click", (event) => {
    event.stopPropagation();
    listaCategoriasUnico.style.display =
        listaCategoriasUnico.style.display === "block" ? "none" : "block";
});

/* Selecionar categoria */
document.querySelectorAll("#listaCategorias .categoria-opcao-unico").forEach(item => {
    item.addEventListener("click", () => {
        inputCategoriaUnico.value = item.textContent;
        listaCategoriasUnico.style.display = "none";
    });
});

/* Fechar ao clicar fora */
document.addEventListener("click", (e) => {
    if (!listaCategoriasUnico.contains(e.target) &&
        e.target.id !== "inputCategoria") 
    {
        listaCategoriasUnico.style.display = "none";
    }
});
</script>




<!-- POPUP OVERLAY -->
<div class="popup-overlay" id="overlayVarios" style="display: none;">

    <!-- POPUP -->
    <div class="popup-cortesia" id="popupVarios">

        <h2>Emitir Cortesia para Vários E-mails</h2>

        <!-- Upload -->
        <label class="popup-label">Selecione o arquivo</label>
        <input type="file" class="popup-input" id="arquivoCortesias">

        <!-- Botões Upload -->
        <div class="upload-botoes">
            <button class="btn-add" id="btnAdicionar">Adicionar</button>
            <button class="btn-validar" id="btnValidar">Validar arquivo</button>
        </div>

        <!-- Categorias -->
        <label class="popup-label">Categoria</label>
        <div class="categoria-select">
            <input type="text" id="inputCategoriaVarios" class="popup-input" placeholder="Selecione uma categoria" readonly>
            <div class="categoria-lista" id="listaCategoriaVarios">
                <div class="categoria-opcao">Ingresso Open Bar 1</div>
                <div class="categoria-opcao">Ingresso Open Bar 2</div>
                <div class="categoria-opcao">Ingresso Open Bar 3</div>
            </div>
        </div>

        <!-- Botões -->
        <div class="popup-botoes">
            <button class="btn-emitir">Emitir</button>
            <button class="btn-cancelar" id="cancelarVarios">Cancelar</button>
        </div>

    </div>
</div>
<style>
   /* Overlay */
.popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.45);
    backdrop-filter: blur(2px);
    justify-content: center;
    align-items: center;
    overflow-y: auto; /* caso o popup fique grande */
    z-index: 999;
}

/* Caixa do popup */
.popup-cortesia {
    width: 460px;
    background: #fff;
    padding: 28px;
    border-radius: 12px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.popup-cortesia h2 {
    font-size: 20px;
    font-weight: 700;
    color: #333;
    margin-bottom: 4px;
}

/* Labels */
.popup-label {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin-bottom: 3px;
}

/* Inputs */
.popup-input {
    padding: 12px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
    width: 100%;
}

/* Área do upload */
.upload-area {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
}

/* Botões do upload */
.upload-botoes {
    display: flex;
    gap: 10px;
}

.btn-add,
.btn-validar {
    padding: 10px 14px;
    font-size: 14px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-weight: 600;
    transition: 0.2s;
}

.btn-add {
    background: #007bff;
    color: #fff;
}

.btn-add:hover {
    background: #0069d9;
}

.btn-validar {
    background: #28a745;
    color: #fff;
}

.btn-validar:hover {
    background: #1e8a36;
}

/* Select de categorias */
.categoria-select {
    position: relative;
    width: 100%;
}

.categoria-lista {
    display: none;
    position: absolute;
    top: 100%;
    background: white;
    width: 100%;
    border-radius: 6px;
    border: 1px solid #ccc;
    margin-top: 4px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.1);
    z-index: 20;
}

.categoria-opcao {
    padding: 10px;
    cursor: pointer;
    font-size: 14px;
}

.categoria-opcao:hover {
    background: #f0f0f0;
}

/* Botões finais do popup */
.popup-botoes {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.btn-emitir {
    background: #007bff;
    color: #fff;
    padding: 12px 20px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    transition: 0.2s;
}

.btn-emitir:hover {
    background: #0069d9;
}

.btn-cancelar {
    background: #ccc;
    color: #333;
    padding: 12px 20px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
    transition: 0.2s;
}

.btn-cancelar:hover {
    background: #b5b5b5;
}


</style>
<script>
document.getElementById("btnVariosEmails").onclick = function () {
    document.getElementById("overlayVarios").style.display = "flex";
};

document.getElementById("cancelarVarios").onclick = function () {
    document.getElementById("overlayVarios").style.display = "none";
};

/* Abrir lista */
document.getElementById("inputCategoriaVarios").onclick = function (event) {
    event.stopPropagation();
    document.getElementById("listaCategoriaVarios").style.display = "block";
};

/* Selecionar categoria */
document.querySelectorAll("#listaCategoriaVarios .categoria-opcao-varios").forEach(opcao => {
    opcao.onclick = function () {
        document.getElementById("inputCategoriaVarios").value = this.textContent;
        document.getElementById("listaCategoriaVarios").style.display = "none";
    };
});

/* Fechar ao clicar fora */
document.addEventListener("click", function(e) {
    if (!document.getElementById("listaCategoriaVarios").contains(e.target) &&
        e.target.id !== "inputCategoriaVarios") 
    {
        document.getElementById("listaCategoriaVarios").style.display = "none";
    }
});

</script>

</div>




</body>
</html>