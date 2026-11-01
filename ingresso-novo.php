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
    padding: 50px 15px;
    width: 100%;
  }

}
</style>
<div class="novo-ingresso">

    <h2>Novo Ingresso</h2>

    <div class="novo">

        <!-- LINHA 1 -->
        <div class="linha-2">
            <div class="campo">
                <label>Nome</label>
                <input type="text" placeholder="Digite o nome">
            </div>

            <div class="campo">
                <label>Lote (Visualização no portal)</label>
                <input type="text" placeholder="Digite o lote">
            </div>
        </div>

        <!-- DESCRIÇÃO -->
        <div class="campo">
            <label>Descrição</label>
            <textarea placeholder="Digite a descrição"></textarea>
        </div>

        <!-- LINHA 3 -->
        <div class="linha-3">
            <div class="campo">
                <label>Gênero</label>
                <select>
                    <option>Todos</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                    <option>Outros</option>
                </select>
            </div>

            <div class="campo">
                <label>Qtde. mínima por compra</label>
                <input type="number">
            </div>

            <div class="campo">
                <label>Qtde. máxima por compra</label>
                <input type="number">
            </div>
        </div>

        <!-- CHECK -->
        <div class="linha-check">
            <label>
                <input type="checkbox">
                Venda de ingresso coletivo
            </label>
        </div>

        <!-- STATUS -->
        <h3>Status do ingresso</h3>

        <div class="botoes-status">
            <button class="btn-status active">Automático</button>
            <button class="btn-status">Publicado</button>
            <button class="btn-status">Não publicado</button>
        </div>

        <!-- DATAS E HORÁRIOS -->
        <div class="linha-2">
            <div class="campo">
                <label>Data e horário inicial</label>
                <input type="datetime-local">
            </div>

            <div class="campo">
                <label>Data e horário final</label>
                <input type="datetime-local">
            </div>
        </div>

        <!-- VISIBILIDADE -->
        <div class="campo">
            <label>Visibilidade do ingresso</label>

            <div class="linha-visivel">
                <div class="slide-toggle" id="slideVisivel">
                    <div class="slide-bola"></div>
                </div>
                <span id="textoVisivel">Oculto</span>
            </div>
        </div>

        <!-- CHECK DATA -->
        <div class="linha-check">
            <label>
                <input type="checkbox">
                31/02/2025 - 30/01/2026
            </label>
        </div>

        <!-- BOTÃO -->
        <div class="acoes-final">
            <button class="btn-salvar">Salvar</button>
        </div>

    </div>
</div>


<style>
.novo-ingresso {
    padding: 20px;
}

.novo-ingresso h2 {
    font-size: 22px;
    margin-bottom: 20px;
}

.novo {
    background: #f7f7f7;
    padding: 20px;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* CAMPOS */
.campo {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.campo label {
    font-size: 13px;
    color: #555;
}

.campo input,
.campo textarea,
.campo select {
    padding: 8px 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 14px;
}

.campo textarea {
    resize: vertical;
    min-height: 80px;
}

/* LINHAS */
.linha-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.linha-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
}

/* CHECK */
.linha-check label {
    font-size: 14px;
    display: flex;
    gap: 8px;
    align-items: center;
}

/* STATUS */
.editar h3 {
    font-size: 16px;
}

.botoes-status {
    display: flex;
    gap: 10px;
}

.btn-status {
    padding: 8px 16px;
    border-radius: 6px;
    border: 1px solid #ccc;
    background: #fff;
    cursor: pointer;
}

.btn-status.active {
    background: #007bff;
    color: #fff;
    border-color: #007bff;
}

/* SLIDE VISIBILIDADE */
.linha-visivel {
    display: flex;
    align-items: center;
    gap: 12px;
}

.slide-toggle {
    width: 46px;
    height: 24px;
    background: #ccc;
    border-radius: 20px;
    position: relative;
    cursor: pointer;
}

.slide-bola {
    width: 18px;
    height: 18px;
    background: #fff;
    border-radius: 50%;
    position: absolute;
    top: 3px;
    left: 3px;
    transition: 0.3s;
}

.slide-toggle.ativo {
    background: #007bff;
}

.slide-toggle.ativo .slide-bola {
    left: 25px;
}

/* BOTÃO FINAL */
.acoes-final {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.btn-salvar {
    padding: 10px 30px;
    background: #007bff;
    border: none;
    border-radius: 8px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}
@media (max-width: 768px) {

    /* CONTAINER */
    .novo-ingresso {
        padding: 15px;
    }

    .novo-ingresso h2 {
        font-size: 20px;
        text-align: center;
    }

    /* CARD */
    .novo {
        padding: 15px;
        gap: 15px;
    }

    /* LINHA 2 → COLUNA */
    .linha-2 {
        grid-template-columns: 1fr;
    }

    /* LINHA 3 → COLUNA */
    .linha-3 {
        grid-template-columns: 1fr;
        gap: 12px;
    }

    /* STATUS */
    .botoes-status {
        flex-direction: column;
        gap: 8px;
    }

    .btn-status {
        width: 100%;
        text-align: center;
    }

    /* VISIBILIDADE */
    .linha-visivel {
        justify-content: space-between;
    }

    /* CHECK */
    .linha-check label {
        font-size: 13px;
    }

    /* BOTÃO FINAL */
    .acoes-final {
        margin-top: 15px;
    }

    .btn-salvar {
        width: 100%;
        max-width: 320px;
        padding: 12px;
        font-size: 15px;
    }
}

</style>

<script>
/* STATUS */
document.querySelectorAll(".btn-status").forEach(btn => {
    btn.addEventListener("click", () => {
        document.querySelectorAll(".btn-status").forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
    });
});

/* SLIDE VISIBILIDADE */
const slide = document.getElementById("slideVisivel");
const texto = document.getElementById("textoVisivel");

slide.addEventListener("click", () => {
    slide.classList.toggle("ativo");
    texto.textContent = slide.classList.contains("ativo") ? "Visível" : "Oculto";
});
</script>

</div>


</body>
</html>
