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
    <title>Insights BI</title>
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
  
}

/* Responsivo */
@media (max-width: 768px) {
  .controle-principal {
    margin-left: 0;
    padding: 60px 0px;
    
  }
  .agenda-servicos {
    font-size: 18px;        /* ajusta tamanho do texto para telas menores */
    margin-bottom: 15px; 
       /* reduz o espaçamento inferior */
  }

}

</style>
<!-- =================== INSIGHTS COMPLETO =================== -->
<div class="insights">
  <h3>Insights BI</h3>
    <div class="linha-graficos">

        <!-- =====================================================
             GRÁFICO POR ESTADOS (ACESSOS + VENDAS)
        ===================================================== -->
        <div class="grafico-estados">
            <h3>Acessos por estado</h3>
            <canvas id="graficoEstados"></canvas>


<!-- =====================================================
             TOP 3 CIDADES COM MAS ACESSO
===================================================== -->

<div class="top-cidades">

    <h3>Top 3 cidades com mais acessos</h3>

    <div class="lista-cidades-top">

        <div class="cidade-top">
            <span class="posicao">1º</span>
            <span class="nome-cidade" id="cidadeTop1">—</span>
            <strong class="valor-cidade" id="cidadeTop1Valor">0</strong>
        </div>

        <div class="cidade-top">
            <span class="posicao">2º</span>
            <span class="nome-cidade" id="cidadeTop2">—</span>
            <strong class="valor-cidade" id="cidadeTop2Valor">0</strong>
        </div>

        <div class="cidade-top">
            <span class="posicao">3º</span>
            <span class="nome-cidade" id="cidadeTop3">—</span>
            <strong class="valor-cidade" id="cidadeTop3Valor">0</strong>
        </div>

    </div>

</div>
<style>
  .top-cidades {
    margin-top: 25px;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.top-cidades h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 18px;
}

.lista-cidades-top {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.cidade-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #f8f8f8;
    padding: 12px 15px;
    border-radius: 10px;
}

.posicao {
    font-size: 16px;
    font-weight: 700;
    color: #007bff;
    width: 40px;
}

.nome-cidade {
    flex: 1;
    font-size: 16px;
    color: #444;
}

.valor-cidade {
    font-size: 18px;
    font-weight: 700;
    color: #333;
}

/* MOBILE */
@media (max-width: 768px) {
    .cidade-top {
        padding: 10px 12px;
    }

    .posicao {
        font-size: 15px;
    }

    .nome-cidade {
        font-size: 15px;
    }

    .valor-cidade {
        font-size: 17px;
    }
}

</style>

<script>
  document.getElementById("cidadeTop1").innerText = "São Paulo";
document.getElementById("cidadeTop1Valor").innerText = 1290;

document.getElementById("cidadeTop2").innerText = "Rio de Janeiro";
document.getElementById("cidadeTop2Valor").innerText = 980;

document.getElementById("cidadeTop3").innerText = "Belo Horizonte";
document.getElementById("cidadeTop3Valor").innerText = 740;

</script>


  <div class="genero-acesso-compras">

    <h3>Acessos e Compras por Gênero</h3>

    <div class="blocos-genero">

        <div class="box-genero">
            <span class="titulo-genero2">Masculino</span>
            <span class="valor-genero2" id="generoMascAcessos">0</span>
            <small>Acessos</small>

            <span class="valor-genero2 compras" id="generoMascCompras">0</span>
            <small>Compras</small>
        </div>

        <div class="box-genero">
            <span class="titulo-genero2">Feminino</span>
            <span class="valor-genero2" id="generoFemAcessos">0</span>
            <small>Acessos</small>

            <span class="valor-genero2 compras" id="generoFemCompras">0</span>
            <small>Compras</small>
        </div>

        <div class="box-genero">
            <span class="titulo-genero2">Outros</span>
            <span class="valor-genero2" id="generoOutAcessos">0</span>
            <small>Acessos</small>

            <span class="valor-genero2 compras" id="generoOutCompras">0</span>
            <small>Compras</small>
        </div>

    </div>

</div>

<style>
  

  .genero-acesso-compras {
    margin-top: 25px;
    background: #fff;
    padding: 20px;
    border-radius: 12px;

}

.genero-acesso-compras h3 {
    font-size: 20px;
    color: #333;
    margin-bottom: 18px;
}

.blocos-genero {
    display: flex;
    gap: 20px;
}

.box-genero {
    flex: 1;
    background: #f8f8f8;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
}

.titulo-genero2 {
    display: block;
    font-size: 16px;
    font-weight: 700;
    color: #444;
    margin-bottom: 10px;
}

.valor-genero2 {
    display: block;
    font-size: 28px;
    font-weight: 800;
    color: #007bff;
    margin-bottom: 4px;
}

.valor-genero2.compras {
    color: #ffc400ff;
}

.box-genero small {
    display: block;
    font-size: 13px;
    color: #666;
    margin-bottom: 12px;
}

/* MOBILE */
@media (max-width: 768px) {
    .blocos-genero {
        flex-direction: column;
        gap: 12px;
    }

    .box-genero {
        width: 100%;
    }

    .valor-genero2 {
        font-size: 24px;
    }
}

</style>
        </div>

        <!-- =====================================================
             VISITAS POR PERÍODO
        ===================================================== -->
        <div class="visitas">
            <h3>Visitas por período</h3>

            <div class="lista-visitas">
                <div class="item-visita"><span>24 horas</span> <strong>120</strong></div>
                <div class="item-visita"><span>3 dias</span> <strong>430</strong></div>
                <div class="item-visita"><span>7 dias</span> <strong>920</strong></div>
                <div class="item-visita"><span>15 dias</span> <strong>1600</strong></div>
                <div class="item-visita"><span>30 dias</span> <strong>2100</strong></div>
                <div class="item-visita"><span>60 dias</span> <strong>3500</strong></div>
            </div>

            <hr class="linha-divisoria">

            <h3>Compras nos últimos dias</h3>

            <div class="lista-visitas">
                <div class="item-visita"><span>24 horas</span> <strong>12</strong></div>
                <div class="item-visita"><span>3 dias</span> <strong>42</strong></div>
                <div class="item-visita"><span>7 dias</span> <strong>88</strong></div>
                <div class="item-visita"><span>15 dias</span> <strong>150</strong></div>
                <div class="item-visita"><span>30 dias</span> <strong>190</strong></div>
                <div class="item-visita"><span>60 dias</span> <strong>260</strong></div>
            </div>

            <div class="ticket-medio">
              <h3 style="color :#007bff;">Ticket médio</h3>

              <div class="ticket-box">
                  <span class="titulo-ticket">Valor atual</span>
                  <strong class="valor-ticket" id="valorTicketMedio">R$ 0,00</strong>
              </div>
          </div>
<style>
  .ticket-medio {
    margin-top: 25px;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.ticket-medio h3 {
    font-size: 20px;
    color: #007bff;
    margin-bottom: 18px;
}

.ticket-box {
    background: #f8f8f8;
    padding: 16px;
    border-radius: 10px;
    text-align: center;
}

.titulo-ticket {
    display: block;
    font-size: 15px;
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
}

.valor-ticket {
    font-size: 28px;
    font-weight: 700;
    color: #333;
}

/* RESPONSIVO */
@media (max-width: 768px) {
    .ticket-medio {
        padding: 18px;
    }

    .ticket-medio h3 {
        font-size: 18px;
    }

    .valor-ticket {
        font-size: 24px;
    }
}

</style>
            
        </div>

    </div><!-- fim linha-graficos -->
<style>

/* ================== CONTAINER PRINCIPAL ================== */
.insights {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 25px;
    padding: 20px;
    box-sizing: border-box;
}

/* Alinha gráfico e visitas lado a lado */
.linha-graficos {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 25px;
    width: 100%;
    box-sizing: border-box;
}

/* ================== CARDS ================== */
.grafico-estados,
.visitas {
    flex: 1;
    max-width: 50%;
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    box-sizing: border-box;
}

/* ================== GRÁFICO ================== */
.grafico-estados canvas {
    width: 100% !important;
    max-height: 350px !important;
}

/* ================== VISITAS ================== */
.visitas h3 {
    margin-bottom: 12px;
    font-size: 18px;
    color: #333;
}

.lista-visitas {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.item-visita {
    display: flex;
    justify-content: space-between;
    padding: 10px 12px;
    background: #f8f8f8;
    border-radius: 8px;
    font-size: 15px;
}

.item-visita span {
    color: #444;
}

.item-visita strong {
    color: #007bff;
}

.linha-divisoria {
    border: none;
    height: 1px;
    background: #ddd;
    margin: 20px 0;
}

/* ================== RESPONSIVO ================== */
@media (max-width: 768px) {

    .linha-graficos {
        flex-direction: column;
        gap: 20px;
    }

    .grafico-estados,
    .visitas {
        width: 100%;
        max-width: 100%;
    }

    .grafico-estados canvas {
        max-height: 280px !important;
    }

    .insights {
        padding: 15px;
    }

    .grafico-estados h3,
    .visitas h3 {
        font-size: 18px;
    }
}



</style>






</style>

</div><!-- fim insights -->

<!-- =================== CSS COMPLETO =================== -->


<!-- =================== JAVASCRIPT COMPLETO =================== -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Lista dos 27 estados do Brasil
const estados = [
"AC","AL","AP","AM","BA","CE","DF","ES","GO",
"MA","MT","MS","MG","PA","PB","PR","PE","PI",
"RJ","RN","RO","RS","RR","SC","SE","SP","TO"
];

// Dados simulados
const acessos = estados.map(() => Math.floor(Math.random() * 5000) + 500);
const vendas = estados.map(() => Math.floor(Math.random() * 400) + 20);

const ctx = document.getElementById("graficoEstados");

new Chart(ctx, {
    type: "bar",
    data: {
        labels: estados,
        datasets: [
            {
                label: "Acessos",
                data: acessos,
                backgroundColor: "#007bff",
                borderRadius: 6
            },
            {
                label: "Vendas",
                data: vendas,
                backgroundColor: "#ffc400ff",
                borderRadius: 6
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            tooltip: {
                callbacks: {
                    label: function(context) {
                        let label = context.dataset.label + ": " + context.raw;
                        return label;
                    }
                }
            }
        },
        scales: {
            y: { beginAtZero: true }
        }
    }
});

document.getElementById("generoMascAcessos").innerText = 1200;
document.getElementById("generoMascCompras").innerText = 180;

document.getElementById("generoFemAcessos").innerText = 980;
document.getElementById("generoFemCompras").innerText = 140;

document.getElementById("generoOutAcessos").innerText = 150;
document.getElementById("generoOutCompras").innerText = 12;

</script>






<!-- cole o conteudo aqui -->
</div>




</body>
</html>