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
    <title>Gordinho-Eventos Editar evento </title>
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
  margin-left: 300px; 
  
}


/* Responsivo */
@media (max-width: 768px) {
  .controle-principal {
    margin-left: 0;
    padding: 60px 0px;
    
  }


}


</style>


<div class="Editar-evento">
    <div class="texto-evento">
        <h1>Qual é o nome do evento?</h1>
        <p>Adicione também uma imagem de divulgação com as principais informações do seu evento!</p>
    </div>

    <div class="info-evento">
        <!-- Lado Esquerdo -->
        <div class="lado-esquerdo">
            <label>Nome do evento</label>
            <input type="text" placeholder="Nome do evento">
            <label>URL do evento</label>
            <input type="text" placeholder="URL do evento">
        </div>

        <!-- Lado Direito -->
        <div class="lado-direito">
            <label>Categoria</label>
            <select>
                <option selected disabled>Categoria</option>
                <option>Show, música e festa</option>
                <option>Religioso e espiritual</option>
                <option>Gastronomia</option>
                <option>Filme, cinema e teatro</option>
                <option>Encontro e network</option>
            </select>

            <label>Tipo</label>
            <select>
                <option selected disabled>Tipo</option>
                <option>Aula</option>
                <option>Festa</option>
                <option>Show</option>
                <option>Network</option>
                <option>Seminário</option>
            </select>

            <label>Tags do evento</label>
            <input type="text" placeholder="Tags do evento">
        </div>
    </div>
    
<div class="editar-img">

    <div class="banner">
        <img id="banner-img" src="https://via.placeholder.com/1200x380" alt="Banner do evento">

        <div class="banner-info">
            <button id="btn-banner">Alterar Banner</button>

            <p>
                A dimensão recomendada é de <strong>1200 x 380</strong> com o conteúdo centralizado. <br>
                Não utilize informações importantes nas bordas da imagem. <br>
                Imagens com dimensões diferentes serão redimensionadas.
            </p>
        </div>
    </div>

    <div class="thumbnail">
        <img id="thumb-img" src="https://via.placeholder.com/340x210" alt="Thumbnail do evento">

        <div class="thumbnail-info">
            <button id="btn-thumb">Alterar Thumbnail</button>

            <p>
                A dimensão recomendada é de <strong>340 x 210</strong> com o conteúdo centralizado. <br>
                Não utilize informações importantes nas bordas da imagem. <br>
                Imagens com dimensões diferentes serão redimensionadas.
            </p>
        </div>
    </div>

</div>

<style>
.editar-img {
    margin: 40px auto;
    max-width: 900px;
    display: grid;
    gap: 30px;
}

.banner, .thumbnail {
    display: flex;
    gap: 20px;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.banner img {
    width: 300px;
    border-radius: 8px;
}

.thumbnail img {
    width: 200px;
    border-radius: 8px;
}

.banner-info button,
.thumbnail-info button {
    padding: 10px 18px;
    border: none;
    border-radius: 6px;
    background: #007bff;
    color: #fff;
    font-size: 14px;
    cursor: pointer;
    margin-bottom: 10px;
}

.banner-info p,
.thumbnail-info p {
    font-size: 13px;
    color: #555;
    line-height: 1.4;
}

@media (max-width: 768px) {
    .banner, .thumbnail {
        flex-direction: column;
        text-align: center;
    }

    .banner img, .thumbnail img {
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }
}
</style>

<script>
// Substituir imagem do banner
document.getElementById("btn-banner").addEventListener("click", function () {
    let input = document.createElement("input");
    input.type = "file";
    input.accept = "image/*";

    input.onchange = e => {
        let file = e.target.files[0];
        document.getElementById("banner-img").src = URL.createObjectURL(file);
    };

    input.click();
});

// Substituir imagem do thumbnail
document.getElementById("btn-thumb").addEventListener("click", function () {
    let input = document.createElement("input");
    input.type = "file";
    input.accept = "image/*";

    input.onchange = e => {
        let file = e.target.files[0];
        document.getElementById("thumb-img").src = URL.createObjectURL(file);
    };

    input.click();
});
</script>

</div>


<style>
.Editar-evento {
    width: 100%;
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

.texto-evento h1 {
    font-size: 24px;
    margin-bottom: 5px;
    color: #007bff;
}

.texto-evento p {
    font-size: 14px;
    color: #555;
    margin-bottom: 20px;
}

.info-evento {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.lado-esquerdo input,
.lado-direito input,
.lado-direito select {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

@media (max-width: 768px) {
    .info-evento {
        grid-template-columns: 1fr;
    }
}
</style>





<div class="inicio-evento">

    <div class="texto-inicio">
        <h1>Quando vai acontecer?</h1>
    </div>

    <div class="data-evento">

        <div class="campo">
            <label>Data de início</label>
            <input type="date">
        </div>

        <div class="campo">
            <label>Horário de início</label>
            <input type="time">
        </div>

        <div class="campo">
            <label>Data de término</label>
            <input type="date">
        </div>

        <div class="campo">
            <label>Horário de término</label>
            <input type="time">
        </div>

        <div class="campo">
            <label>Início das vendas</label>
            <input type="date">
        </div>

        <div class="campo">
            <label>Horário de término das vendas</label>
            <input type="time">
        </div>

    </div>

    <p class="info-vendas">
        Caso a data de início das vendas seja preenchido e o evento esteja publicado, será exibido um contador remanescente com esta data.
    </p>

</div>

<style>
.inicio-evento {
    max-width: 900px;
    margin: 40px auto 0;
    padding: 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    font-family: Arial, sans-serif;
}

.texto-inicio h1 {
    font-size: 22px;
    color: #007bff;
    margin-bottom: 20px;
}

.data-evento {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px 25px;
}

.campo label {
    font-size: 13px;
    color: #444;
    margin-bottom: 5px;
    display: block;
}

.campo input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

.info-vendas {
    font-size: 13px;
    margin-top: 15px;
    color: #555;
}

@media (max-width: 768px) {
    .data-evento {
        grid-template-columns: 1fr;
    }
}
</style>
<div class="local-evento">

    <div class="texto-local">
        <h1>Onde o seu evento vai acontecer?</h1>
        <p>
            Ajude o público a chegar até o seu evento! Informe o endereço completo de onde ele irá acontecer.
        </p>
    </div>

    <p class="titulo-localizacao">Localização do evento</p>

    <div class="opcoes-local">
        <label class="check-opcao">
            <input type="radio" name="tipoLocal" value="fisico">
            Físico
        </label>

        <label class="check-opcao">
            <input type="radio" name="tipoLocal" value="virtual">
            Virtual
        </label>
    </div>

    <div class="inputs-localizacao">

        <div class="input-group">
            <label>Informe o endereço ou nome do local do evento</label>
            <input type="text" placeholder="Digite o endereço ou nome do local">
        </div>

        <div class="input-group">
            <label>
                Nome do local
                <i class="bi bi-info-circle" title="Nome que deseja atribuir ao endereço ex: parque dos lagos"></i>
            </label>
            <input type="text" placeholder="Ex: Parque dos Lagos">
        </div>

        <div class="input-group">
            <label>CEP</label>
            <input type="text" placeholder="00000-000">
        </div>

        <div class="input-group">
            <label>Rua / Avenida</label>
            <input type="text" placeholder="Ex: Rua Central">
        </div>

        <div class="input-group">
            <label>Número</label>
            <input type="text" placeholder="Ex: 123">
        </div>

        <div class="input-group">
            <label>Complemento</label>
            <input type="text" placeholder="Opcional">
        </div>

        <div class="input-group">
            <label>Bairro</label>
            <input type="text" placeholder="Ex: Centro">
        </div>

        <div class="input-group">
            <label>Cidade</label>
            <input type="text" placeholder="Ex: São Paulo">
        </div>

        <div class="input-group">
            <label>Estado</label>
            <select>
                <option value="">Selecione um estado</option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
            </select>
        </div>

    </div>

</div>
<style>
    /* ===== LOCAL DO EVENTO ===== */

.local-evento {
    max-width: 900px;
    margin: 40px auto 0;
    width: 100%;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    margin-top: 25px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Título e texto inicial */
.local-evento .texto-local h1 {
    font-size: 22px;
    color: #007bff;
    margin-bottom: 5px;
}

.local-evento .texto-local p {
    font-size: 14px;
    color: #555;
    line-height: 1.4;
}

/* Subtítulo Localização */
.titulo-localizacao {
    font-weight: 600;
    font-size: 16px;
    margin-top: 10px;
}

/* Botões de tipo de evento */
.opcoes-local {
    display: flex;
    gap: 20px;
}

.check-opcao {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 15px;
    cursor: pointer;
}

.check-opcao input {
    width: 18px;
    height: 18px;
}

/* Caixa de inputs */
.inputs-localizacao {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
    margin-top: 10px;
}

.input-group {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.input-group label {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    display: flex;
    align-items: center;
    gap: 5px;
}

.input-group input,
.input-group select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
    width: 100%;
    transition: border-color .2s;
}

.input-group input:focus,
.input-group select:focus {
    border-color: #007bff;
    outline: none;
    box-shadow: 0 0 0 2px rgba(0,123,255,.2);
}

/* Ícone de informação */
.input-group label i {
    color: #007bff;
    font-size: 16px;
    cursor: pointer;
}

/* ===== RESPONSIVIDADE ===== */

@media (max-width: 900px) {
    .inputs-localizacao {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .inputs-localizacao {
        grid-template-columns: 1fr;
    }
}

</style>

<div class="Descricao-evento">
    <div class="descricao-texto">
        <h1>Descrição do Evento</h1>
        <p>Conte todos os detalhes do seu evento, como a programação e os diferenciais da sua produção!</p>
    </div>

    <!-- MENU DO EDITOR -->
    <div class="editor-menu">
        <select id="fontSize">
            <option value="1">Small</option>
            <option value="3" selected>Normal</option>
            <option value="5">Large</option>
            <option value="7">Huge</option>
        </select>

        <button onclick="execCmd('bold')"><b>B</b></button>
        <button onclick="execCmd('italic')"><i>I</i></button>
        <button onclick="execCmd('underline')"><u>U</u></button>
        <button onclick="execCmd('strikeThrough')"><s>S</s></button>

        <!-- BOTÃO PARA UPLOAD DE IMAGEM -->
        <button onclick="selectImage()"><i class="bi bi-file-earmark-image"></i> Img</button>
        <input type="file" id="imageUploader" accept="image/*" style="display:none">

        <button onclick="insertVideo()"><i class="bi bi-camera-reels-fill"></i> Vídeo</button>
    </div>

    <!-- ÁREA EDITÁVEL -->
    <div id="editorArea" class="editor-area" contenteditable="true">
        Digite aqui a descrição do seu evento...
    </div>
</div>

<style>
.Descricao-evento {
    max-width: 900px;
    margin: 40px auto 0;
    width: 100%;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    margin-top: 25px;
    font-family: Arial, sans-serif;
}

.descricao-texto h1 {
    font-size: 22px;
    color: #007bff;
    margin-bottom: 5px;
}

.descricao-texto p {
    font-size: 14px;
    color: #555;
    margin-bottom: 20px;
}

.editor-menu {
    display: flex;
    gap: 10px;
    background: #f4f4f4;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 12px;
}

.editor-menu button,
.editor-menu select {
    padding: 6px 10px;
    border: 1px solid #ccc;
    background: #fff;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
}

.editor-menu button:hover {
    background: #e9e9e9;
}

.editor-area {
    width: 100%;
    min-height: 200px;
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 15px;
    font-size: 15px;
    line-height: 1.5;
    outline: none;
}
/* ====== RESPONSIVO ====== */

/* Tablets – abaixo de 900px */
@media (max-width: 900px) {
    .editor-menu {
        flex-wrap: wrap;
        padding: 12px;
    }

    .editor-menu select {
        width: 120px;
    }

    .editor-area {
        min-height: 180px;
    }
}

/* Celulares – abaixo de 600px */
@media (max-width: 768px) {
    .Descricao-evento {
        padding: 18px;
    }

    .descricao-texto h1 {
        font-size: 20px;
    }

    .editor-menu {
        gap: 8px;
    }

    .editor-menu button,
    .editor-menu select {
        padding: 6px;
        font-size: 13px;
    }

    .editor-area {
        min-height: 160px;
        font-size: 14px;
    }
}

/* Celulares muito pequenos – abaixo de 400px */


</style>
<script>
// Comandos padrão (negrito, itálico, etc.)
function execCmd(command) {
    document.execCommand(command, false, null);
}

// Alterar tamanho da fonte
document.getElementById("fontSize").addEventListener("change", function () {
    document.execCommand("fontSize", false, this.value);
});

// ==== IMAGEM DO COMPUTADOR ====
function selectImage() {
    document.getElementById("imageUploader").click();
}

document.getElementById("imageUploader").addEventListener("change", function () {
    const file = this.files[0];
    if (!file) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        document.execCommand("insertImage", false, e.target.result);
    };

    reader.readAsDataURL(file);
});

// ==== INSERIR VÍDEO POR URL ====
function insertVideo() {
    let url = prompt("URL do vídeo (YouTube, Vimeo, MP4):");

    if (url) {
        let embed = "";

        if (url.includes("youtube.com") || url.includes("youtu.be")) {
            embed = `<iframe width="420" height="240" src="${url.replace("watch?v=", "embed/")}" frameborder="0" allowfullscreen></iframe>`;
        } else {
            embed = `<video width="420" controls><source src="${url}"></video>`;
        }

        document.getElementById("editorArea").insertAdjacentHTML("beforeend", embed);
    }
}
</script>


<div class="organizacao">
    <div class="texto-organizacao">
        <h1>Organização</h1>
        <p>
            Conte um pouco sobre você ou a sua empresa. É importante mostrar ao público quem está por trás do evento, 
            dando mais credibilidade à sua produção.
        </p>
    </div>

    <div class="org-botoes">
        <button class="btn-org" onclick="abrirPopupOrganizacao()">Cadastrar nova organização</button>
    </div>

    <div class="publicar-container">
        <button class="btn-publicar">Publicar</button>
    </div>
</div>

<style>
  .organizacao {
    max-width: 900px;
    margin: 40px auto 0;
    width: 100%;
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    font-family: Arial, sans-serif;
}

.texto-organizacao h1 {
    font-size: 22px;
    color: #007bff;
    margin-bottom: 5px;
}

.texto-organizacao p {
    font-size: 14px;
    color: #555;
    line-height: 1.4;
    margin-bottom: 20px;
}

/* Botão cadastrar organização */
.org-botoes {
    margin-bottom: 30px;
}

.btn-org {
    padding: 12px 18px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-org:hover {
    background: #0069d9;
}

/* BOTÃO PUBLICAR - centralizado */
.publicar-container {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.btn-publicar {
    padding: 14px 35px;
    background: #007bff;
    color: #fff;
    font-size: 17px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-publicar:hover {
    background: #0457b1ff;
}
/* ====== RESPONSIVO ORGANIZAÇÃO ====== */

/* Tablets – abaixo de 900px */
@media (max-width: 900px) {
    .organizacao {
        padding: 20px;
    }

    .texto-organizacao h1 {
        font-size: 20px;
    }

    .btn-org {
        width: 100%;
        text-align: center;
    }
}

/* Celulares – abaixo de 600px */
@media (max-width: 600px) {
    .organizacao {
        padding: 18px;
    }

    .texto-organizacao p {
        font-size: 13px;
    }

    .btn-org {
        width: 100%;
        padding: 12px;
        font-size: 14px;
    }

    .btn-publicar {
        width: 100%;
        padding: 15px;
        font-size: 16px;
    }
}

/* Celulares muito pequenos – abaixo de 400px */
@media (max-width: 400px) {

    .texto-organizacao h1 {
        font-size: 19px;
        text-align: center;
    }

    .texto-organizacao p {
        text-align: center;
    }

    .btn-org,
    .btn-publicar {
        width: 100%;
        padding: 14px;
    }
}

</style>

<!-- BOTÃO QUE ABRE O POPUP -->


<!-- POPUP -->
<div id="popup-organizacao" class="popup-organizacao">
    <div class="popup-container">

        <!-- ÁREA COM ROLAGEM -->
        <div class="popup-scroll">

            <h1>Organização</h1>

            <div class="popup-inputs">
                <label>Nome</label>
                <input type="text" placeholder="Nome da organização">

                <label>E-mail</label>
                <input type="email" placeholder="E-mail">

                <label>Telefone</label>
                <input type="text" placeholder="Telefone">

                <label>URL</label>
                <input type="text" placeholder="Site, rede social ou link">

                <label>Descrição</label>

                <!-- MENU DO EDITOR -->
                <div class="editor-menu">
                    <select id="popupFontSize">
                        <option value="1">Small</option>
                        <option value="3" selected>Normal</option>
                        <option value="5">Large</option>
                        <option value="7">Huge</option>
                    </select>

                    <button onclick="popupExec('bold')"><b>B</b></button>
                    <button onclick="popupExec('italic')"><i>I</i></button>
                    <button onclick="popupExec('underline')"><u>U</u></button>
                    <button onclick="popupExec('strikeThrough')"><s>S</s></button>

                    <button onclick="popupSelectImg()">🖼️ Img</button>
                    <input type="file" id="popupImg" accept="image/*" style="display:none">

                    <button onclick="popupVideo()">🎥 Vídeo</button>
                </div>

                <div id="popupEditor" class="editor-area" contenteditable="true"></div>
            </div>

            <!-- IMAGEM DE PERFIL -->
            <div class="box-imagem">
                <div class="banner">
                    <img id="imgPerfil" src="https://via.placeholder.com/300x150?text=Perfil">
                    <div>
                        <button onclick="uploadPerfil()">Selecionar imagem de perfil</button>
                        <input type="file" id="perfilUploader" accept="image/*" style="display:none">

                        <p>A dimensão recomendada é de 300 x 300.<br>
                        Evite informações importantes nas bordas.</p>
                    </div>
                </div>

                <!-- CAPA -->
                <div class="thumbnail">
                    <img id="imgCapa" src="https://via.placeholder.com/340x210?text=Capa">
                    <div>
                        <button onclick="uploadCapa()">Selecionar capa</button>
                        <input type="file" id="capaUploader" accept="image/*" style="display:none">

                        <p>A dimensão recomendada é de 1200 x 380.<br>
                        Imagens diferentes serão redimensionadas.</p>
                    </div>
                </div>
            </div>

        </div> <!-- FIM SCROLL -->

        <!-- BOTÕES -->
        <div class="botoes-popup">
            <button class="cancelar" onclick="fecharPopupOrganizacao()">Cancelar</button>
            <button class="salvar">Salvar</button>
        </div>

    </div>
</div>

<style>
/* FUNDO DO POPUP */
.popup-organizacao {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(3px);
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

/* CONTAINER */
.popup-container {
    width: 95%;
    max-width: 850px;
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.2);
    animation: fade 0.3s ease;
    max-height: 90vh;
    display: flex;
    flex-direction: column;
}

/* SCROLL INTERNO */
.popup-scroll {
    overflow-y: auto;
    padding-right: 10px;
    max-height: calc(90vh - 90px);
}

.popup-scroll::-webkit-scrollbar {
    width: 8px;
}

.popup-scroll::-webkit-scrollbar-thumb {
    background: #007bff;
    border-radius: 10px;
}

@keyframes fade {
    from { opacity: 0; transform: scale(0.97); }
    to   { opacity: 1; transform: scale(1); }
}

.popup-container h1 {
    color: #007bff;
    margin-bottom: 15px;
}

/* INPUTS */
.popup-inputs {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.popup-inputs input {
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 14px;
}

/* EDITOR */
.editor-menu {
    display: flex;
    gap: 8px;
    background: #f4f4f4;
    padding: 8px;
    border-radius: 6px;
}

.editor-menu button,
.editor-menu select {
    padding: 6px 10px;
    border: 1px solid #ccc;
    background: #fff;
    border-radius: 6px;
    cursor: pointer;
}

.editor-area {
    min-height: 140px;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 10px;
}

/* BOX IMAGENS */
.box-imagem {
    margin-top: 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

.box-imagem img {
    width: 100%;
    max-height: 150px;
    max-width: 150px;
    border-radius: 10px;
    border: 1px solid #ddd;
}

.box-imagem button {
    background: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 6px;
    margin-bottom: 6px;
    cursor: pointer;
}

.box-imagem p {
    font-size: 12px;
    color: #555;
}

/* BOTÕES */
.botoes-popup {
    display: flex;
    justify-content: flex-end;
    gap: 15px;
    padding-top: 10px;
}

.botoes-popup button {
    padding: 12px 22px;
    border-radius: 8px;
    border: none;
    font-size: 15px;
    cursor: pointer;
}

.botoes-popup .cancelar {
    background: #ccc;
}

.botoes-popup .salvar {
    background: #007bff;
    color: #fff;
}

</style>

<script>
function abrirPopupOrganizacao(){
    document.getElementById("popup-organizacao").style.display = "flex";
}

function fecharPopupOrganizacao(){
    document.getElementById("popup-organizacao").style.display = "none";
}

/* ========== EDITOR TEXTO ========= */

function popupExec(cmd){
    document.execCommand(cmd, false, null);
}

document.getElementById("popupFontSize").addEventListener("change", function(){
    document.execCommand("fontSize", false, this.value);
});

/* Inserir imagem dentro do editor */
function popupSelectImg(){
    document.getElementById("popupImg").click();
}

document.getElementById("popupImg").addEventListener("change", function(){
    const file = this.files[0];
    const reader = new FileReader();
    reader.onload = e => document.execCommand("insertImage", false, e.target.result);
    reader.readAsDataURL(file);
});

/* Inserir vídeo */
function popupVideo(){
    let url = prompt("URL do vídeo:");
    if (!url) return;

    const embed = `<iframe width="400" height="220" src="${url.replace('watch?v=', 'embed/')}" allowfullscreen></iframe>`;
    
    document.getElementById("popupEditor").insertAdjacentHTML("beforeend", embed);
}

/* ===== UPLOAD IMAGEM PERFIL ===== */
function uploadPerfil(){
    document.getElementById("perfilUploader").click();
}

document.getElementById("perfilUploader").addEventListener("change", function(){
    const file = this.files[0];
    const reader = new FileReader();
    reader.onload = e => document.getElementById("imgPerfil").src = e.target.result;
    reader.readAsDataURL(file);
});

/* ===== UPLOAD CAPA ===== */
function uploadCapa(){
    document.getElementById("capaUploader").click();
}

document.getElementById("capaUploader").addEventListener("change", function(){
    const file = this.files[0];
    const reader = new FileReader();
    reader.onload = e => document.getElementById("imgCapa").src = e.target.result;
    reader.readAsDataURL(file);
});
</script>





</body>
</html>