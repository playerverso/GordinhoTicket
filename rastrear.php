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

        <!-- AQUI DENTRO VAI O SEU CONTEÚDO -->
<div class="rastreamento">
    <h3>Rastreamento</h3>

    <!-- FACEBOOK PIXEL -->
    <div class="integracoes">
        <img src="img/meta_pixel_logo.png" alt="Facebook Pixel">
        <div class="descricao">
            <h4>Facebook Pixel</h4>
            <p>Monitore seus anúncios no Facebook adicionando um pixel de conversão.</p>
            <p class="status"><b>• Não configurado</b></p>
        </div>
        <button class="btn-config">Configurar</button>
    </div>

<div class="integracoes">
    <img src="img/google_ads.webp" alt="Google Ads">
    <div class="descricao">
        <h4>Google Ads</h4>
        <p>Conecte ao Google Ads para monitorar suas campanhas e medir conversões de forma automática.</p>
        <p class="status" id="statusAds"><b>• Não configurado</b></p>
    </div>
    <button class="btn-config" id="btnConfigAds">Configurar</button>
</div>

<!-- GOOGLE ANALYTICS -->
<div class="integracoes">
    <img src="img/google-analytics-logo.png" alt="Google Analytics">
    <div class="descricao">
        <h4>Google Analytics</h4>
        <p>Monitore sua página conectando com o seu perfil no Google Analytics.</p>
        <p class="status" id="statusAnalytics"><b>• Não configurado</b></p>
    </div>
    <button class="btn-config" id="btnConfigAnalytics">Configurar</button>
</div>

<!-- TIKTOK -->
<div class="integracoes">
    <img src="img/tiktok_pixel.png" alt="TikTok Pixel">
    <div class="descricao">
        <h4>TikTok Pixel</h4>
        <p>Configure o pixel do TikTok para monitorar e melhorar o desempenho das suas conversões.</p>
        <p class="status" id="statusTiktok"><b>• Não configurado</b></p>
    </div>
    <button class="btn-config" id="btnConfigTiktok">Configurar</button>
</div>

</div>
<style>
    /* Área principal */
.rastreamento {
    box-shadow: 0 3px 12px rgba(0,0,0,0.05);
    padding: 20px;
    border-radius: 12px;
    margin-top: 10px;
    width: 100%;
}

.rastreamento h3 {
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #222;
}

/* Cada bloco de integração */
.integracoes {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    background: #f9f9f9;
    border: 1px solid #e5e5e5;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 18px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.05);
}

/* Imagens */
.integracoes img {
    width: 48px;
    height: 48px;
    object-fit: contain;
}

/* Textos internos */
.integracoes .descricao {
    flex: 1;
}

.integracoes h4 {
    font-size: 18px;
    margin-bottom: 5px;
    font-weight: 700;
    color: #333;
}

.integracoes p {
    font-size: 14px;
    color: #555;
    margin-bottom: 4px;
}

.integracoes .status b {
    color: #d9534f;
    font-weight: 600;
}

/* Botão configurar */
.btn-config {
    background: #007bff;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 8px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    align-self: center;
    transition: .2s;
}

.btn-config:hover {
    background: #0069d6;
}

/* RESPONSIVO */
@media (max-width: 768px) {

/* Container geral */
    .rastreamento {
        box-shadow: none;  
        border-radius: none;
        padding: 10px;
    }

    .rastreamento h3 {
        font-size: 20px;
        text-align: left;
    }

    /* Cada integração */
    .integracoes {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        padding: 14px;
    }

    /* Imagens menores */
    .integracoes img {
        width: 40px;
        height: 40px;
    }

    /* Texto */
    .descricao h4 {
        font-size: 16px;
    }

    .descricao p {
        font-size: 13px;
        line-height: 1.3;
    }

    .status b {
        font-size: 14px;
    }

    /* Botão configurar */
    .btn-config {
        width: 100%;
        text-align: center;
        padding: 10px 0;
        font-size: 16px;
    }

}

</style>
<!-- POPUP – CONFIGURAÇÃO FACEBOOK PIXEL -->
<div id="popupFacebookPixel" class="popup-overlay">
    <div class="popup-box">

        <h2>Configuração Facebook Pixel</h2>

        <label class="label-input">Número de identificação do Pixel</label>
        <input type="text" id="pixelID" class="input-pixel" placeholder="Digite o ID do Pixel">

        <p class="titulo-eventos">Eventos disponíveis para integração</p>

        <div class="evento-item">
            <label><input type="checkbox" class="chk-evento"> Adicionar ao carrinho</label>
            <p class="descricao-evento">Será enviado ao Facebook quando adicionar um ingresso ao carrinho.</p>
        </div>

        <div class="evento-item">
            <label><input type="checkbox" class="chk-evento"> Adicionar informação de pagamento</label>
            <p class="descricao-evento">Será enviado ao Facebook ao inserir informações de pagamento e seguir para o resumo do pedido.</p>
        </div>

        <div class="evento-item">
            <label><input type="checkbox" class="chk-evento"> Criação de lead</label>
            <p class="descricao-evento">Será enviado ao Facebook ao concluir o cadastro de informações pessoais.</p>
        </div>

        <div class="evento-item">
            <label><input type="checkbox" class="chk-evento"> Iniciar o pagamento</label>
            <p class="descricao-evento">Será enviado ao Facebook no início da conclusão da compra.</p>
        </div>

        <div class="evento-item">
            <label><input type="checkbox" class="chk-evento"> Finalização de compra</label>
            <p class="descricao-evento">Será enviado ao Facebook quando a compra for concluída.</p>
        </div>

        <p class="obs">
            <b>Obs.:</b> A visualização de página (<i>pageview</i>) é obrigatória e é ativada automaticamente
            a partir do momento que o pixel está ativo.
        </p>

        <div class="botoes-popup">
            <button id="btnSalvarPixel" class="btn-salvar">Salvar</button>
            <button id="btnFecharPixel" class="btn-fechar">Fechar</button>
        </div>

    </div>
</div>


<script>
    // Abrir popup ao clicar no botão do Facebook Pixel
document.querySelector('.integracoes .btn-config').addEventListener('click', function () {
    document.getElementById("popupFacebookPixel").style.display = "flex";
});

// Fechar popup
document.getElementById("btnFecharPixel").addEventListener("click", function () {
    document.getElementById("popupFacebookPixel").style.display = "none";
});

// Salvar (aqui você envia para o backend futuramente)
document.getElementById("btnSalvarPixel").addEventListener("click", function () {

    // Seleciona apenas o status do Facebook Pixel (primeiro bloco de integrações)
    const statusFacebook = document.querySelector(".integracoes .status b");

    statusFacebook.textContent = "• Configurado";
    statusFacebook.style.color = "#007bff";

    alert("Configurações do Facebook Pixel salvas com sucesso!");
    document.getElementById("popupFacebookPixel").style.display = "none";
});


// Fechar ao clicar fora da caixa
document.getElementById("popupFacebookPixel").addEventListener("click", function (e) {
    if (e.target === this) {
        this.style.display = "none";
    }
});

</script>


<!-- POPUP GOOGLE ADS -->
<div class="popup-overlay" id="popupAds">
    <div class="popup-box">

        <h2>Configuração Google Ads</h2>

        <label class="label-input">ID de conversão</label>
        <input type="text" id="idConversaoAds" class="input-pixel" placeholder="Ex: AW-123456789">

        <div class="evento-item" style="margin-top: 10px;">
            <label>
                <input type="checkbox" id="snippetConversao">
                Adicionar Snippet para medir conversão
            </label>
        </div>

        <p class="descricao-evento">
            Acompanha as ações que devem ser contabilizadas como conversões.
        </p>

        <div class="botoes-popup">
            <button class="btn-salvar" onclick="salvarAds()">Salvar</button>
            <button class="btn-fechar" onclick="fecharPopupAds()">Fechar</button>
        </div>

    </div>
</div>
<script>
// Abrir popup Ads
document.querySelector("#btnConfigAds").addEventListener("click", () => {
    document.querySelector("#popupAds").style.display = "flex";
});

// Fechar popup Ads
function fecharPopupAds() {
    document.querySelector("#popupAds").style.display = "none";
}

// Salvar Ads
function salvarAds() {

    let idConv = document.querySelector("#adsConversionId").value.trim();

    if (idConv === "") {
        alert("Digite o ID de conversão.");
        return;
    }

    let status = document.querySelector("#statusAds");
    status.innerHTML = "<b>• Configurado</b>";
    status.style.color = "#007bff";

    fecharPopupAds();
}


</script>




<!-- POPUP GOOGLE ANALYTICS -->
<div class="popup-overlay" id="popupAnalytics">
    <div class="popup-box">

        <h2>Configuração Google Analytics</h2>

        <label class="label-input">Código do Google Analytics</label>
        <input type="text" id="codigoAnalytics" class="input-pixel" placeholder="Ex: G-ABCDE12345">

        <p class="descricao-evento">Digite seu código completo, por exemplo <b>G-ABCDE12345</b>.</p>

        <div class="botoes-popup">
            <button class="btn-salvar" onclick="salvarAnalytics()">Salvar</button>
            <button class="btn-fechar" onclick="fecharPopupAnalytics()">Fechar</button>
        </div>

    </div>
</div>
<style>

</style>

<script>
// Abrir popup Analytics
document.querySelector("#btnConfigAnalytics").addEventListener("click", () => {
    document.querySelector("#popupAnalytics").style.display = "flex";
});

// Fechar popup Analytics
function fecharPopupAnalytics() {
    document.querySelector("#popupAnalytics").style.display = "none";
}

// Salvar Analytics
function salvarAnalytics() {

    let codigo = document.querySelector("#analyticsCode").value.trim();

    if (codigo === "") {
        alert("Digite o código do Google Analytics.");
        return;
    }

    let status = document.querySelector("#statusAnalytics");
    status.innerHTML = "<b>• Configurado</b>";
    status.style.color = "#007bff";

    fecharPopupAnalytics();
}


</script>


<!-- POPUP TIKTOK PIXEL -->
<div class="popup-overlay" id="popupTiktok">
    <div class="popup-box">

        <h2>Configuração TikTok Pixel</h2>

        <label class="label-input">Número de identificação do Pixel</label>
        <input type="text" id="tiktokPixelId" class="input-pixel" placeholder="Ex: 1234567890">

        <p class="titulo-eventos">Eventos disponíveis para integração</p>

        <!-- EVENTO 1 -->
        <div class="evento-item">
            <label>
                <input type="checkbox" id="tkAddCarrinho">
                Adicionar ao carrinho
            </label>
            <p class="descricao-evento">Será enviado ao TikTok quando adicionar um ingresso ao carrinho.</p>
        </div>

        <!-- EVENTO 2 -->
        <div class="evento-item">
            <label>
                <input type="checkbox" id="tkInfoPagamento">
                Adicionar informações de pagamento
            </label>
            <p class="descricao-evento">Será enviado ao TikTok ao inserir informações de pagamento e seguir para o resumo do pedido.</p>
        </div>

        <!-- EVENTO 3 -->
        <div class="evento-item">
            <label>
                <input type="checkbox" id="tkRegistro">
                Concluir registro
            </label>
            <p class="descricao-evento">Será enviado ao TikTok ao concluir o cadastro de informações pessoais.</p>
        </div>

        <!-- EVENTO 4 -->
        <div class="evento-item">
            <label>
                <input type="checkbox" id="tkInicioPagamento">
                Iniciar finalização da compra
            </label>
            <p class="descricao-evento">Será enviado ao TikTok no início da conclusão da compra.</p>
        </div>

        <!-- EVENTO 5 -->
        <div class="evento-item">
            <label>
                <input type="checkbox" id="tkCompraFinal">
                Compras
            </label>
            <p class="descricao-evento">Será enviado ao TikTok quando a compra for concluída.</p>
        </div>

        <p class="obs">
            Obs.: A visualização de Página (PageView) é um evento obrigatório, ele é ativado automaticamente a partir do momento que o pixel está ativado.
        </p>

        <div class="botoes-popup">
            <button class="btn-salvar" onclick="salvarTikTok()">Salvar</button>
            <button class="btn-fechar" onclick="fecharPopupTikTok()">Fechar</button>
        </div>

    </div>
</div>

<script>
// Abrir popup TikTok
document.querySelector("#btnConfigTiktok").addEventListener("click", () => {
    document.querySelector("#popupTiktok").style.display = "flex";
});

// Fechar popup TikTok
function fecharPopupTikTok() {
    document.querySelector("#popupTiktok").style.display = "none";
}

// Salvar TikTok
function salvarTikTok() {

    let pixelId = document.querySelector("#tiktokPixelId").value.trim();

    if (pixelId === "") {
        alert("Digite o número de identificação do Pixel TikTok.");
        return;
    }

    let status = document.querySelector("#statusTiktok");
    status.innerHTML = "<b>• Configurado</b>";
    status.style.color = "#007bff";

    fecharPopupTikTok();
}


</script>

<style>
    /* Fundo escurecido */
.popup-overlay {
    display: none; 
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.55);
    backdrop-filter: blur(2px);
    justify-content: center;
    align-items: center;
    z-index: 999999;
}

/* Caixa do popup */
.popup-box {
    background: #fff;
    width: 520px;
    max-width: 92%;
    padding: 25px 30px;
    border-radius: 14px;
    box-shadow: 0 6px 25px rgba(0,0,0,0.15);
    animation: fadeDown .25s ease-out;
}

@keyframes fadeDown {
    from {transform: translateY(-20px); opacity: 0;}
    to {transform: translateY(0); opacity: 1;}
}

.popup-box h2 {
    margin-bottom: 20px;
    font-size: 22px;
}

/* Campos e textos */
.label-input {
    font-weight: 600;
}

.input-pixel {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    margin: 6px 0 18px 0;
    border-radius: 6px;
}

.titulo-eventos {
    margin: 10px 0;
    font-weight: 600;
}

.evento-item {
    margin-bottom: 14px;
}

.evento-item label {
    font-weight: 600;
}

.descricao-evento {
    font-size: 13px;
    color: #555;
    margin-left: 22px;
    margin-top: 3px;
}

.obs {
    margin-top: 20px;
    text-align: center;
    font-size: 13px;
    color: #777;
}

/* Botões */
.botoes-popup {
    margin-top: 25px;
    display: flex;
    justify-content: center;
    gap: 14px;
}

.btn-salvar,
.btn-fechar {
    padding: 10px 22px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
}

.btn-salvar {
    background: #007bff;
    color: #fff;
}

.btn-salvar:hover {
    background: #0069d9;
}

.btn-fechar {
    background: #e5e5e5;
}

.btn-fechar:hover {
    background: #cfcfcf;
}

/* Responsivo */

@media (max-width: 768px) {

    /* Caixa do popup com scroll */
    .popup-box {
        max-height: 85vh;     /* limite de altura */
        overflow-y: auto;     /* permite rolagem */
        padding: 20px;
    }

    .popup-box h2 {
        font-size: 20px;
        text-align: center;
    }

    /* Input */
    .input-pixel {
        font-size: 15px;
        padding: 10px;
    }

    .label-input {
        font-size: 14px;
    }

    .descricao-evento {
        font-size: 13px;
        margin-left: 20px;
    }

    /* Evento item */
    .evento-item {
        display: flex;
        flex-direction: column;
        padding: 10px 0;
    }

    /* Observação final */
    .obs {
        font-size: 13px;
        padding: 10px;
    }

    /* Botões */
    .botoes-popup {
        flex-direction: column;
        gap: 10px;
        margin-top: 20px;
    }

    .botoes-popup button {
        width: 100%;
        font-size: 16px;
        padding: 12px;
    }
}

</style>


    </div>

</body>
</html>
