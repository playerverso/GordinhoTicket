<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "menu.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gordinho-Eventos Meus Eventos</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
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

    <?=$menu?>

<div class="sub-menu">
    <h1>Eventos</h1>

    <div class="btn-eventos">
        <a href="meus-eventos.php"><button class="ativo">Meus Eventos</button></a>
        <a href="eventos-afiliados.php"><button>Sou afiliado</button></a>
    </div>
</div>


<style>
    .sub-menu {
    width: 100%;
    padding: 20px;
    box-shadow: 0 4px 6px -2px rgba(0, 0, 0, 0.15); /* sombra apenas embaixo */
}

.sub-menu h1 {
    margin: 0;
    font-size: 23px;
    font-weight: bold;
}

.btn-eventos {
    margin-top: 15px;
    display: flex;
    gap: 10px;
}

.btn-eventos button {
    padding: 10px 18px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    border-radius: 6px;
    background-color: #f1f1f1;
}

.btn-eventos button.ativo {
    background-color: #007BFF;
    color: white;
    
}

@media (max-width: 600px) {

    .sub-menu {
        padding: 15px;
    }

    .sub-menu h1 {
        font-size: 20px;
        text-align: center;
    }

    .sub-buttons {
        flex-direction: column; /* botões em coluna */
        gap: 8px;
        width: 100%;
    }

    .sub-buttons button {
        width: 100%;          
        padding: 12px;        
        font-size: 15px;
    }

    .sub-buttons button.ativo {
        font-size: 15px;
    }
}
</style>



<main class="principal">

    <div class="meus-eventos">
        <h1>Meus Eventos</h1>

        <div class="eventos">
            <div class="barra-pesquisa">
                <input type="text" class="pesquisa" placeholder="Pesquisar eventos...">

                <button class="btn-search">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            <!-- Dropdown -->
            <select class="filtro-status">
                <option>Todos os eventos</option>
                <option>Eventos não publicados</option>
                <option>Eventos publicados</option>
                <option>Eventos em rascunhos</option>
                <option>Eventos finalizados</option>
                <option>Eventos cancelado</option>
            </select>

          
        </div>

<style>
.principal {
    padding: 20px 0px;
    width: 90%;
    margin: 0 auto;
    margin-top: 30px;
}

.meus-eventos h1 {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Área dos filtros */
.eventos {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}

/* Campo de pesquisa */
.barra-pesquisa {
    position: relative;
    width: 300px; /* pode ajustar */
}

.pesquisa {
    width: 100%;
    padding: 10px 40px 10px 12px; /* espaço para o botão */
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
    outline: none;
}

.pesquisa:focus {
    border-color: #0044ff;
}

.btn-search {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    font-size: 18px;
    color: #444;
    cursor: pointer;
    padding: 0;
}

.btn-search:hover {
    color: #0044ff;
}


/* Dropdown */
.filtro-status {
    padding: 10px 12px;
    font-size: 14px;
    border-radius: 6px;
    border: 1px solid #ccc;
}

/* Botão */
.btn-filtrar {
    padding: 10px 18px;
    font-size: 14px;
    border-radius: 6px;
    border: none;
    background-color: #007BFF;
    color: white;
    cursor: pointer;
}

</style>

<!-- Títulos da tabela -->
<div class="status">
    <span>Nome</span>
    <span>Início</span>
    <span>Fim</span>
    <span>Local</span>
    <span>Status</span>
</div>

<!-- Lista de eventos -->
<div class="lista-eventos">

    <!-- 1 - Todos os eventos -->
<div class="evento" data-status="todos">
    <span>Festival Verão 2025</span>
    <span>10/01/2025</span>
    <span>12/01/2025</span>
    <span>Rio de Janeiro</span>
    <span>Todos os eventos</span>

    <div class="acoes">
       <a href="dashboard.php"><button class="btn-gerenciar">Gerenciar</button></a>
        <a href="editar-evento.php"> <button class="icon-btn" data-tooltip="Editar"><i class="bi bi-pencil-square"></i></button></a>
        <a href="evento.php"><button class="icon-btn" data-tooltip="Ir para o evento">
            <i class="bi bi-box-arrow-up-right"></i></a>
        </button>
    </div>
</div>



    <!-- 2 - Não publicado -->
    <div class="evento" data-status="nao-publicado">
        <span>Show Tributo ao Queen</span>
        <span>22/02/2025</span>
        <span>22/02/2025</span>
        <span>São Paulo</span>
        <span>Eventos não publicados</span>
    <div class="acoes">
        <button class="btn-gerenciar">Gerenciar</button>
        <button class="icon-btn" data-tooltip="Editar">
            <i class="bi bi-pencil-square"></i>
        </button>
       <a href="evento.php"> <button class="icon-btn" data-tooltip="Ir para o evento">
            <i class="bi bi-box-arrow-up-right"></i>
        </button></a>
    </div>
    </div>

    <!-- 3 - Publicado -->
    <div class="evento" data-status="publicado">
        <span>Feira Gastronômica de Rua</span>
        <span>05/03/2025</span>
        <span>06/03/2025</span>
        <span>Curitiba</span>
        <span>Eventos publicados</span>
    <div class="acoes">
        <button class="btn-gerenciar">Gerenciar</button>
        <button class="icon-btn" data-tooltip="Editar">
            <i class="bi bi-pencil-square"></i>
        </button>
        <button class="icon-btn" data-tooltip="Ir para o evento">
            <i class="bi bi-box-arrow-up-right"></i>
        </button>
    </div>
    </div>

    <!-- 4 - Rascunho -->
    <div class="evento" data-status="rascunho">
        <span>Workshop de Fotografia</span>
        <span>18/03/2025</span>
        <span>18/03/2025</span>
        <span>Florianópolis</span>
        <span>Eventos em rascunhos</span>
    <div class="acoes">
        <button class="btn-gerenciar">Gerenciar</button>
        <button class="icon-btn" data-tooltip="Editar">
            <i class="bi bi-pencil-square"></i>
        </button>
        <button class="icon-btn" data-tooltip="Ir para o evento">
            <i class="bi bi-box-arrow-up-right"></i>
        </button>
    </div>
    </div>

    <!-- 5 - Finalizado -->
    <div class="evento" data-status="finalizado">
        <span>Maratona Solidária 2024</span>
        <span>12/11/2024</span>
        <span>12/11/2024</span>
        <span>Belo Horizonte</span>
        <span>Eventos finalizados</span>
    <div class="acoes">
        <button class="btn-gerenciar">Gerenciar</button>
        <button class="icon-btn" data-tooltip="Editar">
            <i class="bi bi-pencil-square"></i>
        </button>
        <button class="icon-btn" data-tooltip="Ir para o evento">
            <i class="bi bi-box-arrow-up-right"></i>
        </button>
    </div>
    </div>

    <!-- 6 - Cancelado -->
    <div class="evento" data-status="cancelado">
        <span>Mostra de Cinema Independente</span>
        <span>30/04/2025</span>
        <span>02/05/2025</span>
        <span>Porto Alegre</span>
        <span>Eventos cancelado</span>
    <div class="acoes">
        <button class="btn-gerenciar">Gerenciar</button>
        <button class="icon-btn" data-tooltip="Editar">
            <i class="bi bi-pencil-square"></i>
        </button>
        <a href="evento.php"><button class="icon-btn" data-tooltip="Ir para o evento">
            <i class="bi bi-box-arrow-up-right"></i>
        </button></a>
    </div>
    </div>

</div>
<style>
/* ======= CABEÇALHO DAS COLUNAS ======= */
.status {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1.5fr 1.5fr 1fr; 
    /* Última coluna reservada para ações */
    padding: 12px 10px;
    border-bottom: 1px solid #ddd;
    gap: 10px;
}

.status span {
    font-size: 14px;
    font-weight: 600;
    color: #444;
}

/* ======= LISTA DE EVENTOS ======= */
.lista-eventos {
    margin-top: 25px;
    display: flex;
    flex-direction: column;
    gap: 12px;
}

/* ======= CARD DO EVENTO ======= */
.evento {
    padding: 18px;
    border: 1px solid #e1e1e1;
    border-radius: 10px;
    background: #ffffff;

    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1.5fr 1.5fr 1fr; 
    /* Igual ao .status */
    align-items: center;
    gap: 10px;

    transition: .25s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
}

/* Hover bonito */
.evento:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.12);
    border-color: #ccc;
}

/* Texto dentro dos eventos */
.evento span {
    font-size: 15px;
    color: #333;
    font-weight: 500;
}

/* ======= COLUNA DOS BOTÕES ======= */
.acoes {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    gap: 10px;
}

/* Botão "Gerenciar" */
.btn-gerenciar {
    padding: 6px 12px;
    background-color: #0044ff;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-weight: bold;
    font-size: 13px;
}

.btn-gerenciar:hover {
    background-color: #0033cc;
}

/* Botões com ícones */
.icon-btn {
    position: relative;
    background: #f1f1f1;
    border: none;
    padding: 8px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
}

.icon-btn:hover {
    background: #e0e0e0;
}

/* Tooltip do hover */
.icon-btn::after {
    content: attr(data-tooltip);
    position: absolute;
    bottom: 130%;
    left: 50%;
    transform: translateX(-50%);
    background: #333;
    color: #fff;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 11px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: 0.2s ease;
}

.icon-btn:hover::after {
    opacity: 1;
}

@media (max-width: 768px) {

    /* Oculta o cabeçalho das colunas */
    .status {
        display: none;
    }

    /* Cada evento vira um card em coluna */
    .evento {
        grid-template-columns: 1fr;
        text-align: left;
        padding: 15px;
        gap: 6px;
    }

    /* Ajuste do texto */
    .evento span {
        font-size: 14px;
        padding: 2px 0;
    }

    /* Agrupamento das informações em bloco */
    .evento span:nth-child(1)::before { content: "Evento: "; font-weight: 600; }
    .evento span:nth-child(2)::before { content: "Início: "; font-weight: 600; }
    .evento span:nth-child(3)::before { content: "Fim: "; font-weight: 600; }
    .evento span:nth-child(4)::before { content: "Local: "; font-weight: 600; }
    .evento span:nth-child(5)::before { content: "Status: "; font-weight: 600; }

    /* Botões descem para o final */
    .acoes {
        margin-top: 10px;
        justify-content: flex-start;
        flex-wrap: wrap;
        gap: 10px;
    }

    /* Botão gerenciar um pouco maior */
    .btn-gerenciar {
        padding: 8px 14px;
        font-size: 14px;
    }

    /* Ícones maiores para toque */
    .icon-btn {
        padding: 10px;
        font-size: 18px;
    }

    /* Tooltip mais afastado */
    .icon-btn::after {
        bottom: 140%;
        font-size: 12px;
    }
}


</style>

<script>
document.querySelector('.filtro-status').addEventListener('change', function () {
    const filtro = this.value.toLowerCase().trim();
    const eventos = document.querySelectorAll('.evento');

    eventos.forEach(evento => {
        const status = evento.getAttribute('data-status');

        if (filtro === "todos os eventos") {
            evento.style.display = "grid";
        } else {
            // Normaliza texto
            const equivalencias = {
                "eventos não publicados": "nao-publicado",
                "eventos publicados": "publicado",
                "eventos em rascunhos": "rascunho",
                "eventos finalizados": "finalizado",
                "eventos cancelado": "cancelado"
            };

            if (equivalencias[filtro] === status) {
                evento.style.display = "grid";
            } else {
                evento.style.display = "none";
            }
        }
    });
});
</script>

<script>
    // Seleciona o campo de busca
const searchInput = document.querySelector(".pesquisa");

// Toda vez que digitar, filtra
searchInput.addEventListener("input", function () {
    const filtro = searchInput.value.toLowerCase();
    const eventos = document.querySelectorAll(".evento");

    eventos.forEach(evento => {
        // Pega todos os <span> do evento
        const spans = evento.querySelectorAll("span");

        const nome = spans[0].textContent.toLowerCase();
        const dataInicio = spans[1].textContent.toLowerCase();
        const dataFim = spans[2].textContent.toLowerCase();
        const local = spans[3].textContent.toLowerCase();
        const status = spans[4].textContent.toLowerCase();

        // Se algum campo contém o texto da pesquisa, mantém o evento visível
        const corresponde =
            nome.includes(filtro) ||
            dataInicio.includes(filtro) ||
            dataFim.includes(filtro) ||
            local.includes(filtro) ||
            status.includes(filtro);

        evento.style.display = corresponde ? "grid" : "none";
    });
});
</script>


</div>





</style>

</main>



</body>
</html>