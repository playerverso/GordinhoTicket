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
        <!-- ===================== COMPARTILHAMENTO ===================== -->
<div class="compartilhar">

    <h3>Compartilhamento</h3>

    <div class="box-compartilhar">
        <p>Compartilhe a URL do seu evento</p>

        <div class="url-area">
            <input type="text" id="urlEvento" value="https://gordinho-eventos.com" readonly>
            <button id="btnCopiar" class="btn-copiar">
                <i class="bi bi-clipboard"></i> Copiar
            </button>
        </div>
    </div>

    <div class="redes-sociais">
        <p>Compartilhe nas redes sociais</p>

        <div class="rede-lista">

            <!-- Facebook -->
            <a class="rede" target="_blank"
               href="https://www.facebook.com/sharer/sharer.php?u=https://gordinho-eventos.com">
                <div class="icon"><i class="bi bi-facebook"></i></div>
                <span>Facebook</span>
            </a>

            <!-- X (Twitter) -->
            <a class="rede" target="_blank"
               href="https://twitter.com/intent/tweet?url=https://gordinho-eventos.com">
                <div class="icon"><i class="bi bi-twitter-x"></i></div>
                <span>X</span>
            </a>

            <!-- LinkedIn -->
            <a class="rede" target="_blank"
               href="https://www.linkedin.com/shareArticle?mini=true&url=https://gordinho-eventos.com">
                <div class="icon"><i class="bi bi-linkedin"></i></div>
                <span>LinkedIn</span>
            </a>

            <!-- WhatsApp -->
            <a class="rede" target="_blank"
               href="https://api.whatsapp.com/send?text=https://gordinho-eventos.com">
                <div class="icon"><i class="bi bi-whatsapp"></i></div>
                <span>WhatsApp</span>
            </a>

            <!-- Telegram -->
            <a class="rede" target="_blank"
               href="https://t.me/share/url?url=https://gordinho-eventos.com">
                <div class="icon"><i class="bi bi-telegram"></i></div>
                <span>Telegram</span>
            </a>

            <!-- Email -->
            <a class="rede"
               href="mailto:?subject=Confira meu evento&body=https://gordinho-eventos.com">
                <div class="icon"><i class="bi bi-envelope"></i></div>
                <span>Email</span>
            </a>

        </div>
    </div>

</div>
<style>
    .compartilhar {
    margin-top: 35px;
    padding: 20px;
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 2px 8px rgba(0,0,0,.08);
}

.compartilhar h3 {
    margin-bottom: 15px;
    font-size: 20px;
    font-weight: 600;
}

.box-compartilhar p,
.redes-sociais p {
    padding: 20px;
    font-weight: 500;
    margin-bottom: 8px;
}

/* URL e botão copiar */
.url-area {
    display: flex;
    gap: 10px;
}

#urlEvento {
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: 1px solid #ccc;
}

.btn-copiar {
    padding: 10px 14px;
    background: #007bff;
    border: none;
    border-radius: 8px;
    color: #fff;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 6px;
}

.btn-copiar:hover {
    background: #006be0;
}

/* Redes Sociais */
.rede-lista {
    margin-top: 15px;
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 18px;
    text-align: center;
}

.rede {
    text-decoration: none;
    color: #007bff;
}

.rede .icon {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    background: #f2f2f2ff;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    font-size: 24px;
    transition: 0.2s;
}

.rede:hover .icon {
    background: #e4e4e4;
    transform: scale(1.05);
}

.rede span {
    margin-top: 6px;
    display: block;
    font-size: 14px;
    font-weight: 500;
}

@media (max-width: 768px) {

    .compartilhar {
        padding: 18px;
    }

    .rede-lista {
        grid-template-columns: repeat(3, 1fr); /* Mantém 3 colunas */
        gap: 16px;
    }

    #urlEvento {
        font-size: 15px;
    }

    .btn-copiar {
        padding: 9px 12px;
        font-size: 14px;
    }
}

</style>

<script>
document.getElementById("btnCopiar").addEventListener("click", () => {
    const input = document.getElementById("urlEvento");
    input.select();
    input.setSelectionRange(0, 99999);

    navigator.clipboard.writeText(input.value);

    alert("URL copiada!");
});
</script>

    </div>

</body>
</html>
