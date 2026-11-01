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
    <title>Gordinho-Eventos</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<style>
    @font-face {
        font-family: 'font';
        src: url('Mansalva-Regular.ttf') format('truetype');
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Sidebar fixa (supondo...) */
    /* Ajuste este valor caso sua sidebar tenha outra largura */
    .sidebar {
        width: 350px;
        position: fixed;
        left: 0;
        top: 0;
        height: 100%;
    }

    /* Área principal */
    .controle-principal {
        margin-left: 350px; /* mesma largura da sidebar */
        padding: 50px 30px;
        width: calc(100% - 350px);
        min-height: 100vh;
    }

    @media (max-width: 768px) {  
        .controle-principal {
            margin-left: 0;
            width: 100%;
            padding: 40px 20px;
        }

        .menu-config {
            margin-top: 50px;
        }
    }
</style>

</head>
<body>

    <?=$sidebar?>

    <div class="menu-config">
        <?=$menucomp?>
    </div>

    <div class="controle-principal">

    <div class="afiliados">

    <h2>Afiliados</h2>

    <div class="pesquisa">

        <div class="campo">
            <label for="pesquisaAfiliado">Pesquisa</label>
            <input type="text" id="pesquisaAfiliado" placeholder="Digite para buscar...">
        </div>

        <div class="campo">
            <label for="codigoAfiliado">Código</label>
            <input type="text" id="codigoAfiliado" placeholder="Código do afiliado...">
        </div>

    </div>



   <div class="status-ingressos">
                    <div class="btn-data">
                        <a href="local-entrada-novo.php" class="botao-a">Novo Afiliado</a>
                       <a href="#" id="importar-evento" class="botao-a">Importar por Evento</a>
<a href="#" id="importacao-massa" class="botao-a">Importação em Massa</a>
                    </div>
                    
                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="lote"><label class="titulo-campo">Codigo</label></div>
                    <div class="tipo"><label class="titulo-campo">Email</label></div>
                    <div class="tipo"><label class="titulo-campo">Nome</label></div>
                    <div class="tipo"><label class="titulo-campo">Descontos</label></div>
                    <div class="tipo"><label class="titulo-campo">Vizualizações</label></div>
               
                </div>

                <!-- ===== VALORES ===== -->
              
                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    <div class="nome"><span class="valor">#4585233</span></div>
                    <div class="lote"><span class="valor">Jubscreibson@gmail.com</span></div>
                    <div class="nome"><span class="valor">JubisCreibsoson</span></div>
                    <div class="preco"><span class="valor">---</span></div>
                    <div class="preco"><span class="valor">0</span></div>



                   <div class="acoes">
                    <button id="btn-acoes" class="btn-acoes">Ações</button>

                    <div id="menu-acoes" class="menu-acoes">
                        <a href="editar-afiliados.php?id=4585233">Editar</a>
                        <button class="remover">Remover</button>
                        <button class="copiar-link">Copiar link</button>
                        <button class="enviar-email">Enviar link por email</button>
                    </div>
                </div>
                       
                </div>




<style>

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 1.3fr 1.3fr 1.3fr 1.3fr 0.7fr;
    gap: 12px;
    padding: 16px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.06);
}

.item-ingresso > div {
    display: flex;
    flex-direction: column;
    align-items: center; 
    text-align: center;
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

.menu-acoes {
    position: absolute;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
    padding: 8px 0;
    display: none;
    z-index: 10;
    width: 160px;
}

.menu-acoes a,
.menu-acoes button {
    display: block;
    width: 100%;
    padding: 10px 15px;
    border: none;
    color:#000;
    text-decoration: none;
    background: none;
    text-align: left;
    font-size: 14px;
    cursor: pointer;
}

.menu-acoes a:hover,
.menu-acoes button:hover {
    background: #f3f3f3;
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
        grid-template-columns: 
            1fr   /* Nome */
            0.6fr /* Lote */
            0.7fr /* Preço */
            0.7fr /* Tipo */
            0.7fr /* Repassar */
            0.6fr /* Visível */
            0.8fr /* Ações */
        ;
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

            </div>

            
        </div>

</div>
<script>
const btnAcoes = document.getElementById("btn-acoes");
const menuAcoes = document.getElementById("menu-acoes");

// abrir / fechar ao clicar
btnAcoes.addEventListener("click", (e) => {
    e.stopPropagation();
    menuAcoes.style.display = 
        menuAcoes.style.display === "block" ? "none" : "block";
});

// fechar ao clicar fora
document.addEventListener("click", () => {
    menuAcoes.style.display = "none";
});
</script>

<style>
.afiliados {
    width: 100%;
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.afiliados h2 {
    font-size: 22px;
    font-weight: 700;
    color: #333;
}

.pesquisa {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.campo {
    display: flex;
    flex-direction: column;
    width: 250px;
}

.campo label {
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #444;
}

.campo input {
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    font-size: 15px;
}


.status-ingressos {
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

.btn-data {
    width: 100%;
    text-align: left;
    margin-bottom: 5px;
}

.botao-a {
    text-decoration: none;
    padding: 10px 15px;
    background: #007bff;
    border-radius: 8px;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: 0.25s;
}

.botao-a:hover {
    background: #0069d9;
}


.linha-titulos {
    display: grid;
    grid-template-columns: 1.3fr 1.3fr 1.3fr 1.3fr 1.3fr 0.7fr;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

.linha-titulos > div {
    display: flex;
    flex-direction: column;
    align-items: center; 
    text-align: center;
}

/* LINHA VALORES */






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

    .btn-data {
        display: flex;
        flex-direction: column;
        gap: 12px;
        margin-top: 10px;
    }

    .botao-a {
        width: 100%;
        font-size: 15px;
        padding: 12px;
        text-align: center;
    }

        .afiliados {
        padding: 15px;
        gap: 15px;
    }

    .afiliados h2 {
        font-size: 20px;
    }

    /* Os campos ficam um abaixo do outro */
    .pesquisa {
        flex-direction: column;
        gap: 15px;
    }

    .campo {
        width: 100%;
    }

    .campo input {
        padding: 12px;
        font-size: 16px;
    }

    .campo label {
        font-size: 14px;
    }


    /* Ajuste das colunas */
    .linha-titulos {
        grid-template-columns: 
            1fr   /* Nome */
            0.6fr /* Lote */
            0.7fr /* Preço */
            0.7fr /* Tipo */
            0.7fr /* Repassar */

        ;
        padding: 12px;
        gap: 8px;
    }

    /* Fontes menores */
    .titulo-campo {
        font-size: 12px;
    }


}
</style>




<!-- OVERLAY -->
<div id="overlay-popup" class="overlay"></div>

<!-- POPUP IMPORTAR POR EVENTO -->
<div id="popup-evento" class="popup">
    <div class="popup-content">
        <h2>Importar comissários por evento</h2>

        <label for="select-eventos">Eventos</label>
        <select id="select-eventos" class="input-select">
            <option value="" disabled selected>Selecione um evento...</option>
            <option value="1">Evento de Abertura</option>
            <option value="2">Concerto Principal</option>
            <option value="3">Festival Anual</option>
            <option value="4">Show Beneficente</option>
        </select>

        <div class="botoes-popup">
            <button class="btn-importar">Importar</button>
            <button class="btn-fechar">Fechar</button>
        </div>
    </div>
</div>


<!-- POPUP IMPORTAÇÃO EM MASSA -->
<div id="popup-massa" class="popup">
    <div class="popup-content">
        <!-- <span class="fechar">&times;</span> -->
        <h2>Importar Comissários em massa</h2>

        <label>Arquivo</label>
        <input type="file" class="input-file">

        <p class="info">
            Você pode baixar a planilha exemplo <a href="#">clicando aqui</a>.
        </p>

        <div class="botoes-popup">
            <button class="btn-importar">Importar</button>
            <button class="btn-fechar">Fechar</button>
        </div>
    </div>
</div>
<style>
    /* Overlay escuro */
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.55);
    display: none;
    z-index: 900;
}

/* Estrutura do popup */
.popup {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.8);
    background: #fff;
    width: 400px;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.25);
    display: none;
    opacity: 0;
    transition: 0.25s ease;
    z-index: 1000;
}

/* Ativo */
.popup.ativo {
    display: block;
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
}

/* Conteúdo */
.popup-content {
    position: relative;
}

.popup-content h2 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 19px;
    color: #333;
}

/* Botão X */
.fechar {
    position: absolute;
    top: -5px;
    right: 0;
    font-size: 24px;
    cursor: pointer;
    color: #333;
}

/* Inputs */
.input-text,
.input-file {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 15px;
    font-size: 14px;
}

/* Informativo */
.info {
    font-size: 13px;
    color: #555;
    margin-bottom: 15px;
}

.info a {
    color: #ff5e00;
    text-decoration: underline;
}

/* Botões inferiores */
.botoes-popup {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
}

.input-select {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 14px;
    margin-bottom: 15px;
    background: #fff;
    cursor: pointer;
}

/* BOTÕES ATUALIZADOS */
.btn-importar {
    background: #007bff;
    color: #fff;
    padding: 10px 18px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-importar:hover {
    background: #0069d9;
}

.btn-fechar {
    background: #aaa;
    color: #fff;
    padding: 10px 18px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

.btn-fechar:hover {
    background: #888;
}

</style>
<script>
const overlay = document.getElementById("overlay-popup");

const botaoEvento = document.getElementById("importar-evento");
const botaoMassa = document.getElementById("importacao-massa");

const popupEvento = document.getElementById("popup-evento");
const popupMassa = document.getElementById("popup-massa");

/* Função geral para abrir popups */
function abrirPopup(popup) {
    overlay.style.display = "block";
    popup.classList.add("ativo");
}

/* Função geral para fechar popups */
function fecharPopup() {
    overlay.style.display = "none";
    popupEvento.classList.remove("ativo");
    popupMassa.classList.remove("ativo");
}

/* Abrir popups */
botaoEvento.onclick = (e) => {
    e.preventDefault();
    abrirPopup(popupEvento);
};

botaoMassa.onclick = (e) => {
    e.preventDefault();
    abrirPopup(popupMassa);
};

/* Fechar pelo botão fechar */
document.querySelectorAll(".btn-fechar, .fechar").forEach(btn => {
    btn.onclick = fecharPopup;
});

/* Fechar ao clicar fora */
overlay.onclick = fecharPopup;
</script>

    </div>
</div>

</body>
</html>
