
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
<div class="checkin">

  <h2 class="titulo-checkin">Relatório de Check-in</h2>

  

  <!-- ============================
        RELATÓRIO (INPUTS)
  ================================ -->
  <div class="relatorio">
        <!-- ======= INGRESSOS ======= -->
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

    <!-- ======= CÓDIGO DO PEDIDO ======= -->
    <div class="campo">
      <label>Período</label>
      <div class="input-list" data-list="lotes">
        <input type="text" placeholder="Buscar lote" readonly>

        <div class="lista-opcoes">
          <label class="item-check">Hoje</label>
          <label class="item-check">Ontem</label>
          <label class="item-check">Esta semana</label>
          <label class="item-check">Semana passada</label>
          <label class="item-check">Ultimos 15 dias</label>
          <label class="item-check">Ultimos 30 dias</label>
        </div>
      </div>
    </div>

    <!-- ======= DATA INÍCIO ======= -->
    <div class="campo">
      <label>Data de início</label>
      <div class="input-list">
        <input type="date" class="input-data">
      </div>
    </div>

    <!-- ======= DATA FIM ======= -->
    <div class="campo">
      <label>Data de término</label>
      <div class="input-list">
        <input type="date" class="input-data">
      </div>
    </div>







  </div>
</div>

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

/* GRID 3 COLUNAS */
.relatorio {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 18px;
}

.campo label {
  font-size: 14px;
  margin-bottom: 6px;
  color: #444;
  display: block;
}

.input-data {
  width: 100%;
  padding: 12px;
  background: #fff;
  border-radius: 8px;
  border: 1px solid #ccc;
  cursor: pointer;
  font-size: 14px;
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
  font-size: 14px;
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

/* PESQUISA DENTRO DA LISTA */
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

/* STATUS — AJUSTE PARA FICAR IGUAL A OUTROS CAMPOS */
.status {
  display: block;
  width: 100%;
}

.status-input {
  width: 100%;
  padding: 12px;
  background: #fff;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 14px;
  color: #444;
}

.status-input::placeholder {
  color: #888;
  font-size: 14px;
}

/* RESPONSIVO */
@media (max-width: 768px) {
  .relatorio {
    grid-template-columns: 1fr;
  }
}
</style>


<script>
// =========================
// ABRE / FECHA LISTA
// =========================
document.querySelectorAll(".input-list input[type='text']").forEach(input => {
  input.addEventListener("click", () => {
    const lista = input.parentElement.querySelector(".lista-opcoes");
    lista.style.display = lista.style.display === "block" ? "none" : "block";
  });
});

// =========================
// FECHAR AO CLICAR FORA
// =========================
document.addEventListener("click", e => {
  if (!e.target.closest(".input-list")) {
    document.querySelectorAll(".lista-opcoes").forEach(l => l.style.display = "none");
  }
});

// =========================
// SELECIONAR UMA OPÇÃO (SIMPLES)
// =========================
document.querySelectorAll(".lista-opcoes .item-check").forEach(item => {
  item.addEventListener("click", function () {

    // encontra o input pai
    const wrapper = this.closest(".input-list");
    const input = wrapper.querySelector("input[type='text']");

    // se for checkbox (lista múltipla)
    if (this.querySelector("input[type='checkbox']")) {

      // pega todas marcadas
      const selecionados = [...wrapper.querySelectorAll("input[type='checkbox']:checked")]
        .map(chk => chk.parentElement.textContent.trim());

      // coloca no input
      input.value = selecionados.length > 0 ? selecionados.join(", ") : "";

      return; // não fecha lista para checkbox
    }

    // SE FOR OPÇÃO SIMPLES (sem checkbox)
    input.value = this.textContent.trim();

    // fecha lista
    wrapper.querySelector(".lista-opcoes").style.display = "none";
  });
});

// =========================
// PESQUISA FILTRO
// =========================
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


            <!-- Tabela -->
            <div class="status-ingressos">
<!-- BOTÕES DE EXPORTAÇÃO -->
<div class="btn-exportar">
  <button class="btn-export btn-pdf" aria-label="Exportar PDF">Exportar PDF</button>
  <button class="btn-export btn-csv" aria-label="Exportar CSV">Exportar CSV</button>
  <button class="btn-export btn-xls" aria-label="Exportar XLS">Exportar XLS</button>
</div>

<style>
/* container */
.btn-exportar {
  display: flex;
  gap: 12px;
  align-items: center;
  justify-content: flex-start; /* altere para center ou flex-end se preferir */
  margin-top: 16px;
}

/* botão base */
.btn-export {
  background: #007bff;
  color: #fff;
  padding: 10px 16px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  font-size: 14px;
  cursor: pointer;
  transition: transform .12s ease, box-shadow .12s ease, background .12s ease;
  box-shadow: 0 2px 6px rgba(0,0,0,0.08);
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

/* hover / focus */
.btn-export:hover,
.btn-export:focus {
  transform: translateY(-2px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.12);
  background: #005fcc;
  outline: none;
}

/* variantes (mantive a mesma cor, caso queira ícones diferentes futuramente) */
.btn-pdf {}
.btn-csv {}
.btn-xls {}

/* RESPONSIVO: mobile empilha e ocupa largura */
@media (max-width: 768px) {
  .btn-exportar {
    flex-direction: column;
    gap: 10px;
    align-items: stretch;
  }

  .btn-export {
    width: 100%;
    justify-content: center;
  }
}
</style>

                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">Ingresso</label></div>
                    <div class="lote"><label class="titulo-campo">Lote</label></div>
                    <div class="preco"><label class="titulo-campo">Quantidade</label></div>
                    <div class="tipo"><label class="titulo-campo">Total</label></div>
                  
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    
                    <div class="nome"><span class="valor tipo-cortesia">Ingresso pista</span></div>
                    <div class="lote"><span class="valor">1°</span></div>                   
                    <div class="tipo"><span class="valor">2</span></div>
                    <div class="preco"><span class="valor">R$ 240,00</span></div>
                                                         
                    </div>
                </div>
            </div>            
        </div>
</div>


<style>
.status-ingressos {
    padding: 15px 0;
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
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr ;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr ;
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




</body>
</html>