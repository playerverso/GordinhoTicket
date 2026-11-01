


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
    margin-left: 20px;
    padding: 50px 0px;
    width: 90%;
  }

}
</style>

<div class="checkin">

  <h2 class="titulo-checkin">Relatório de Check-in</h2>

  <!-- ============================
        RELATÓRIO (INPUTS)
  ================================ -->
  <div class="relatorio">

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

    <!-- ======= CÓDIGO DO PEDIDO ======= -->
    <div class="campo">
      <label>Código do pedido</label>
      <div class="status" data-list="eventos">
        <input type="text" placeholder="Digite o código do pedido..." class="status-input">
      </div>
    </div>

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

  <!-- ======= AFILIADOS ======= -->
    <div class="campo">
      <label>Afiliados</label>
      <div class="input-list" data-list="categoria">
        <input type="text" placeholder="Buscar categoria" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check"><input type="checkbox"> Joana</label>
          <label class="item-check"><input type="checkbox"> Gordão da xj</label>
          <label class="item-check"><input type="checkbox"> Ariane</label>
        </div>
      </div>
    </div>

    <!-- ======= CÓDIGO DO AFILIADO ======= -->
    <div class="campo">
      <label>Código do afiliado</label>
      <div class="status" data-list="eventos">
        <input type="text" placeholder="Digite o código do afiliado..." class="status-input">
      </div>
    </div>

    <!-- ======= INGRESSO POR LOTES ======= -->
    <div class="campo">
      <label>Ingresso por Lotes</label>
      <div class="input-list" data-list="setores">
        <input type="text" placeholder="Buscar setor" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check"><input type="checkbox"> 1°</label>
          <label class="item-check"><input type="checkbox"> 2°</label>
          <label class="item-check"><input type="checkbox"> 3°</label>
        </div>
      </div>
    </div>



  

    <!-- ======= TIPOS DE INGRESSOS ======= -->
    <div class="campo">
      <label>Tipos de ingressos</label>
      <div class="input-list" data-list="lotes">
        <input type="text" placeholder="Buscar lote" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check"><input type="checkbox"> Cortesia</label>
          <label class="item-check"><input type="checkbox"> Padrão</label>
        </div>
      </div>
    </div>

    <!-- ======= TIPOS DE PAGAMENTO ======= -->
    <div class="campo">
      <label>Tipós de pagamento</label>
      <div class="input-list" data-list="status-ing">
        <input type="text" placeholder="Buscar status" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check"><input type="checkbox"> Dinheiro</label>
          <label class="item-check"><input type="checkbox"> Conta Bancária</label>
          <label class="item-check"><input type="checkbox"> Boleto</label>
          <label class="item-check"><input type="checkbox"> Transferencia</label>
          <label class="item-check"><input type="checkbox"> Auto Atendimento</label>
        </div>
      </div>
    </div>

    <!-- ======= ORIGEM DAS VENDAS ======= -->
    <div class="campo">
      <label>Origem das vendas</label>
      <div class="input-list" data-list="lotes">
        <input type="text" placeholder="Buscar lote" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check"><input type="checkbox"> Portal</label>
          <label class="item-check"><input type="checkbox"> App do Cliente</label>
          <label class="item-check"><input type="checkbox"> App do produtor</label>
          <label class="item-check"><input type="checkbox"> App do afiliado</label>
          <label class="item-check"><input type="checkbox"> POS</label>
        </div>
      </div>
    </div>

    <!-- ======= STATUS DA COMPRA ======= -->
    <div class="campo">
      <label>Status da compra</label>
      <div class="input-list" data-list="lotes">
        <input type="text" placeholder="Buscar lote" readonly>

        <div class="lista-opcoes">
          <label class="item-check">Aprovado</label>
          <label class="item-check">Em processo</label>
          <label class="item-check">Cancelado</label>
        </div>
      </div>
    </div>

    <!-- ======= PONTOS DE VENDA ======= -->
    <div class="campo">
      <label>Pontos de Vendas</label>
      <div class="input-list" data-list="lotes">
        <input type="text" placeholder="Buscar lote" readonly>

        <div class="lista-opcoes">
          <div class="barra-pesquisa">
            <i class="bi bi-search"></i>
            <input type="text" class="pesquisar" placeholder="Pesquisar...">
          </div>

          <label class="item-check"><input type="checkbox"> Abadá e camisetas</label>
          <label class="item-check"><input type="checkbox"> Banca de Humberto</label>
          <label class="item-check"><input type="checkbox"> Portal do produtor</label>
          <label class="item-check"><input type="checkbox"> App principal</label>
        </div>
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
  grid-template-columns: repeat(3, 1fr);
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

<div class="quantidade">

  <div class="grupo-boxes">

    <div class="quantidade-total">
      <h3>Quantidade Total</h3>
      <span class="valor-numero">100</span>
    </div>

    <div class="valor-organizador">
      <h3>Valor do Organizador</h3>
      <span class="valor-numero">R$ 12.500,00</span>
    </div>

  </div>

  <div class="botao-xls">
    <button class="btn-xls">Exportar XLS</button>
  </div>

</div>

<style>

/* CONTAINER PRINCIPAL */
.quantidade {
  width: 100%;
  margin-top: 25px;
  display: flex;
  flex-direction: column; /* agora o botão vai para baixo */
  justify-content: center;
  align-items: center;
  gap: 25px;
  padding: 20px;
  background: #f9f9f9;
  border-radius: 12px;
}

/* GRUPO DOS DOIS QUADRADOS */
.grupo-boxes {
  display: flex;
  gap: 25px;
}

/* BOXES INTERNAS */
.quantidade-total,
.valor-organizador {
  padding: 20px;
  border-radius: 12px;
  width: 260px;
  text-align: center;
  box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.quantidade-total h3,
.valor-organizador h3 {
  font-size: 16px;
  color: #444;
  margin-bottom: 10px;
  font-weight: 600;
}

.valor-numero {
  font-size: 28px;
  font-weight: 700;
  color: #007bff;
  display: block;
}

/* BOTÃO */
.btn-xls {
  background: #007bff;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  font-size: 15px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.2s ease;
}

.btn-xls:hover {
  background: #005fcc;
}

/* RESPONSIVO 768PX */
@media (max-width: 768px) {

  .grupo-boxes {
    flex-direction: column; /* quadrados um abaixo do outro */
    width: 100%;
    align-items: center;
  }

  .quantidade-total,
  .valor-organizador {
    width: 90%;
  }

  .btn-xls {
    width: 100%;
  }
}
</style>


            <!-- Tabela -->
            <div class="status-ingressos">

                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">Data da compra</label></div>
                    <div class="lote"><label class="titulo-campo">Codigo do pedido</label></div>
                    <div class="preco"><label class="titulo-campo">Ingresso</label></div>
                    <div class="tipo"><label class="titulo-campo">Tipo de ingresso</label></div>
                    <div class="repassar"><label class="titulo-campo">Forma de pagamento</label></div>
                    <div class="repassar"><label class="titulo-campo">Origem do pedido</label></div>
                    <div class="repassar"><label class="titulo-campo">Quantidade</label></div>
                    <div class="repassar"><label class="titulo-campo">Valor do ingresso</label></div>
                    <div class="repassar"><label class="titulo-campo">Status da compra</label></div>
                    <div class="repassar"><label class="titulo-campo">Valor do organizador</label></div>
                   
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    <div class="nome"><span class="valor">16/12/2022</span></div>
                    <div class="nome"><span class="valor">40028922</span></div>
                    <div class="lote"><span class="valor">Casadinha</span></div>
                    <div class="tipo"><span class="valor tipo-cortesia">Cortesia</span></div>
                    <div class="preco"><span class="valor">Cartão</span></div>                   
                    <div class="nome"><span class="valor">App do produtor</span></div>
                    <div class="repassar"><span class="valor">100</i></span></div>
                    <div class="nome"><span class="valor">120,00</span></div>
                    <div class="nome"><span class="valor">Aprovada</span></div>
                    <div class="nome"><span class="valor">50,00</span></div>
                                         
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
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr 0.8fr 0.8fr 0.8fr;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr 0.8fr 0.8fr 0.8fr;
    gap: 12px;
    padding: 16px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 3px 16px rgba(0,0,0,0.06);
}

.titulo-campo {
    font-size: 12px;
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




</body>
</html>