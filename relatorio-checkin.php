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
<!-- ============================
      CHECKIN – TELA COMPLETA
=============================== -->
<div class="checkin">

  <h2 class="titulo-checkin">Relatório de Check-in</h2>

  <!-- ============================
        RELATÓRIO (INPUTS)
  ================================ -->
  <div class="relatorio">

    <!-- ======= INPUT 1 — LISTA DE DATAS ======= -->
    <div class="campo">
      <label>Data do evento</label>
      <div class="input-list" data-list="datas">
        <input type="text" placeholder="Selecionar data" readonly>
        <div class="lista-opcoes">
          <div class="item-opcao">22/11/2022</div>
          <div class="item-opcao">05/12/2022</div>
          <div class="item-opcao">15/01/2023</div>
        </div>
      </div>
    </div>

    <!-- ======= INPUT 2 — COM PESQUISA + CHECKBOX ======= -->
    <div class="campo">
      <label>Ingressos</label>
      <div class="input-list" data-list="ingressos">
        <input type="text" placeholder="Buscar ingressos" readonly>
        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check">
            <input type="checkbox"> Ingresso Pista – 1º lote
          </label>

          <label class="item-check">
            <input type="checkbox"> Ingresso Open-Bar – 1º lote
          </label>

          <label class="item-check">
            <input type="checkbox"> Ingresso Camarote – 2º lote
          </label>
        </div>
      </div>
    </div>

    <!-- ======= INPUT 3 ======= -->
    <div class="campo">
      <label>Ingresso por Lotes</label>
      <div class="input-list" data-list="setores">
        <input type="text" placeholder="Buscar setor" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check">
            <input type="checkbox"> Setor VIP
          </label>

          <label class="item-check">
            <input type="checkbox"> Setor Premium
          </label>

          <label class="item-check">
            <input type="checkbox"> Setor Arena
          </label>
        </div>
      </div>
    </div>

    <!-- ======= INPUT 4 ======= -->
    <div class="campo">
      <label>Postos de checkin</label>
      <div class="input-list" data-list="categoria">
        <input type="text" placeholder="Buscar categoria" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check">
            <input type="checkbox"> Inteira
          </label>
          <label class="item-check">
            <input type="checkbox"> Meia-entrada
          </label>
          <label class="item-check">
            <input type="checkbox"> Cortesia
          </label>
        </div>
      </div>
    </div>

    <!-- ======= INPUT 5 ======= -->
    <div class="campo">
      <label>Ocasiões</label>
      <div class="input-list" data-list="lotes">
        <input type="text" placeholder="Buscar lote" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check">
            <input type="checkbox"> 1º lote
          </label>
          <label class="item-check">
            <input type="checkbox"> 2º lote
          </label>
          <label class="item-check">
            <input type="checkbox"> 3º lote
          </label>
        </div>
      </div>
    </div>

    <!-- ======= INPUT 6 ======= -->
    <div class="campo">
      <label>Dispositivos</label>
      <div class="input-list" data-list="status-ing">
        <input type="text" placeholder="Buscar status" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check">
            <input type="checkbox"> Aprovado
          </label>
          <label class="item-check">
            <input type="checkbox"> Em espera
          </label>
          <label class="item-check">
            <input type="checkbox"> Cancelado
          </label>
        </div>
      </div>
    </div>

  </div>

  <!-- ============================
        STATUS DO CHECK-IN
  ================================ -->
  <div class="status">

    <label>Código da compra ou número do ingresso</label>
    <input type="text" placeholder="Digite algo..." class="status-input">

    <div class="box-status">
      <h3>Check-ins realizados</h3>
      <span class="quantidade" id="qtdCheckins">0</span>
    </div>
  </div>

</div>

<!-- ============================
      CSS COMPLETO
=============================== -->
<style>
.checkin {
  display: flex;
  flex-direction: column;
  gap: 25px;
  width: 100%;
}

.titulo-checkin {
  font-size: 22px;
  font-weight: 700;
  color: #333;
}

/* GRID 2 COLUNAS */
.relatorio {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 18px;
}

.campo label {
  font-size: 14px;
  margin-bottom: 6px;
  color: #444;
  display: block;
}

.input-list {
  position: relative;
}

.input-list input[type="text"] {
  width: 100%;
  padding: 12px;
  background: #fff;
  border-radius: 8px;
  border: 1px solid #ccc;
  cursor: pointer;
}

/* LISTA ABERTA */
.lista-opcoes {
  display: none;
  position: absolute;
  top: 110%;
  left: 0;
  width: 100%;
  background: #fff;
  border-radius: 8px;
  border: 1px solid #ccc;
  padding: 12px;
  box-shadow: 0 3px 12px rgba(0,0,0,.15);
  z-index: 50;
}

/* INPUT 2+ — PESQUISA */
.barra-pesquisa {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 8px 0 12px;
}

.barra-pesquisa i {
  font-size: 18px;
}

.barra-pesquisa input {
  width: 100%;
  padding: 8px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

/* CHECKBOXES */
.item-check {
  display: flex;
  gap: 8px;
  align-items: center;
  margin: 6px 0;
}

/* STATUS */
.status {
  margin-top: 15px;
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.status-input {
  padding: 12px;
  border-radius: 8px;
  border: 1px solid #ccc;
}

.box-status {
  padding: 20px;
  background: #f3f3f3;
  border-radius: 12px;
  text-align: center;
}

.box-status h3 {
  margin-bottom: 8px;
  color: #333;
}

.quantidade {
  font-size: 28px;
  font-weight: bold;
  color: #007bff;
}

/* RESPONSIVO 768px */
@media (max-width: 768px) {
  .relatorio {
    grid-template-columns: 1fr;
  }
}
</style>

<!-- ============================
      JAVASCRIPT COMPLETO
=============================== -->
<script>
// abre lista
document.querySelectorAll(".input-list input").forEach(input => {
  input.addEventListener("click", () => {
    const lista = input.parentElement.querySelector(".lista-opcoes");
    lista.style.display = lista.style.display === "block" ? "none" : "block";
  });
});

// fecha ao clicar fora
document.addEventListener("click", e => {
  if (!e.target.closest(".input-list")) {
    document.querySelectorAll(".lista-opcoes").forEach(l => l.style.display = "none");
  }
});

// pesquisa
document.querySelectorAll(".pesquisar").forEach(campo => {
  campo.addEventListener("input", () => {
    const termo = campo.value.toLowerCase();
    const itens = campo.parentElement.parentElement.querySelectorAll(".item-check");

    itens.forEach(item => {
      item.style.display = item.textContent.toLowerCase().includes(termo) ? "flex" : "none";
    });
  });
});
</script>


   <div class="status-ingressos">

                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">Participante</label></div>
                    <div class="lote"><label class="titulo-campo">Data do checkin</label></div>
                    <div class="preco"><label class="titulo-campo">Posto de checkin</label></div>
                    <div class="tipo"><label class="titulo-campo">Ocasião</label></div>
                    <div class="repassar"><label class="titulo-campo">Dispositivo</label></div>
                    <div class="visivel"><label class="titulo-campo">Ingresso</label></div>
                    <div class="visivel"><label class="titulo-campo">Nº do ingresso</label></div>
                    <div class="visivel"><label class="titulo-campo">Código do pedido</label></div>
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">                                      
                    <div class="tipo"><span class="valor tipo-cortesia">João Carvalho</span></div>
                    <div class="preco"><span class="valor">20/22/2025</span></div>
                    <div class="tipo"><span class="valor">Gordinho Eventos</i></span></div>
                    <div class="tipo"><span class="valor">ok</i></span></div>                      
                    <div class="tipo"><span class="valor tipo-cortesia"><i class="bi bi-phone-flip"></i> Mobile</span></div>
                    <div class="tipo"><span class="valor">Camartote Open Bar</span></div>
                    <div class="tipo"><span class="valor">#453559</i></span></div>
                    <div class="tipo"><span class="valor"> AN523055FS</span></div>   
                    </div>
                </div>

            </div>

            
        </div>

</div>


<style>
.status-ingressos {
    padding: 20px 0;
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

/* TITULOS */
.linha-titulos {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr 0.8fr;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr 0.8fr;
    gap: 12px;
    padding: 16px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.06);
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




@media (max-width: 768px) {

    /* Remove grid original e empilha como cartões */
    .linha-titulos {
        display: none; /* títulos somem no mobile (substituídos por labels dentro dos itens) */
    }

    .item-ingresso {
        display: flex;
        flex-direction: column;
        gap: 14px;
        padding: 18px;
        min-width: 100%;
        border-radius: 12px;
    }

    /* Criamos 2 colunas dentro de cada item */
    .item-ingresso {
        display: grid;
        grid-template-columns: 1fr 1fr;
        column-gap: 20px;
        row-gap: 14px;
    }

    /* Campos (coluna esquerda e direita) */
    .item-ingresso > div {
        display: flex;
        flex-direction: column;
    }

    /* Ajuste dos textos */
    .valor {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .titulo-campo {
        font-size: 12px;
        font-weight: 500;
        color: #666;
        margin-bottom: 3px;
    }

    .tipo-cortesia {
        width: fit-content;
        font-size: 12px;
        padding: 4px 8px;
    }

    /* Ajusta o interior das colunas */
    .item-ingresso > div span {
        line-height: 1.2;
    }

    /* Botões, se houver */
    .icon-btn,
    .btn-acoes {
        width: 100%;
        justify-content: center;
    }
}

</style>
    </div>

</body>
</html>
