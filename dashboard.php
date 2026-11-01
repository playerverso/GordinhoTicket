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
    <title>Dashboard</title>
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
  <!-- <div class="Configuracoes"></div> -->

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

<style>
 

.principal {
  display: flex;
  gap: 20px;
  margin-top: 30px;
  margin-left: 100px;
  padding: 20px;
}

.dashboard {
  display: flex;
  justify-content: space-between;
  align-items: stretch;
  padding: 20px 0;
  gap: 20px;
}

.membro {
  flex: 1.5;
  background: linear-gradient(90deg, #007bff, #00c6ff);
  color: white;
  padding: 25px;
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
  text-align: left;
}
@media (max-width: 768px) {
  .barra-pesquisa {
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
  }

  .input-pesquisa {
    width: 80%;
    font-size: 16px;
  }

  .btn-pesquisar {
    width: 80%;
    font-size: 16px;
  }
}
  </style>

  <main class="principal">
    <div class="principal-esquerda">
      <div class="dashboard">
        <!-- Retângulo com informações -->
        <div class="membro">
          <p class="data-hoje"></p>
          <h2>Olá, Jubscreibson 👋🏼</h2>
          <p class="frase-impacto">"Pequenas ações geram grandes resultados"</p>
        </div>

        <!-- Dois quadrados com saldos -->
        <div class="saldo">
          <div class="saldo-item">
            <i class="bi bi-cash-coin"></i>
            <h3>R$ 0,00</h3>
            <p>Todas as Vendas</p>
          </div>

          <div class="saldo-item">
            <i class="bi bi-clock-history"></i>
            <h3>R$ 0,00</h3>
            <p>Em Processamento</p>
          </div>
        </div>
      </div>

    <div class="vendas">
      <div class="topo-origem">
        <h3>Todas as vendas</h3>

        <select class="origem">
          <option value="">Origem</option>
          <option>Todos</option>
          <option>Portal</option>
          <option>App do cliente</option>
          <option>App do produtor</option>
          <option>Balcão</option>
          <option>PDV</option>
        </select>
      </div>


    <!-- Status das Vendas -->
    <div class="status-vendas">
      <div class="linha-cabecalho">
        <span>Ingressos</span>
        <span>Lite</span>
        <span>Quantidade</span>
        <span>Total</span>
      </div>

      <div class="linha-venda">
        <span>Portal</span>
        <span>Convencional</span>
        <span>32</span>
        <span>R$ 1.280,00</span>
      </div>

      <div class="linha-venda">
        <span>App do cliente</span>
        <span>VIP</span>
        <span>14</span>
        <span>R$ 980,00</span>
      </div>

      <div class="linha-venda">
        <span>Balcão</span>
        <span>Premium</span>
        <span>8</span>
        <span>R$ 560,00</span>
      </div>
    </div>
    </div>
<br>

<style>
  /* Título + Origem */
.topo-origem {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Input de origem */
.origem {
  padding: 8px 12px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-size: 14px;
}

/* Tabela de status das vendas */
.status-vendas {
  margin-top: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  font-size: 15px;
}

.linha-cabecalho {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.2fr;
  padding: 12px 10px;
  font-weight: bold;
  color: #fff;
  background: #007bff;
}

.linha-venda {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.2fr;
  padding: 12px 10px;
  border-top: 1px solid #eee;
}


/* Responsivo */
@media (max-width: 768px) {

  .topo-origem h3 {
    font-size: 16px;
  }

  .origem {
    padding: 6px 10px;
    font-size: 13px;
  }

  .linha-cabecalho,
  .linha-venda {
    grid-template-columns: 1.5fr 1fr 1fr 1fr;
    font-size: 13px;
    padding: 10px;
  }
}


</style>


<script>
  // Coletar seletor e linhas existentes
  const seletorOrigem = document.querySelector(".origem");
  const linhasContainer = document.querySelector(".status-vendas");
  const linhaCabecalho = document.querySelector(".linha-cabecalho");

  // Captura todas as linhas de venda (exceto cabeçalho)
  const todasLinhas = [...document.querySelectorAll(".linha-venda")];

  // Ao mudar a origem
  seletorOrigem.addEventListener("change", function () {
    const origemSelecionada = this.value;

    // Limpa as linhas existentes
    document.querySelectorAll(".linha-venda").forEach(l => l.remove());

    // Se "Todos" ou vazio → mostra tudo
    if (origemSelecionada === "" || origemSelecionada === "Todos") {
      todasLinhas.forEach(linha => linhasContainer.appendChild(linha));
      return;
    }

    // Filtra por origem
    const filtradas = todasLinhas.filter(linha => {
      const origem = linha.querySelector("span").textContent.trim();
      return origem === origemSelecionada;
    });

    // Insere as filtradas
    filtradas.forEach(linha => linhasContainer.appendChild(linha));
  });
</script>



      <!-- Gráfico abaixo da seção -->
      <div class="grafico">
        <h3>Movimentação dos últimos 7 dias</h3>
        <canvas id="grafico7dias"></canvas>
      </div>





<style>
  /* Estilo geral da caixa */
  .caixa-ticket {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    margin-top: 20px; /* Espaço entre as divs */
  }

  .ticket-topo {
    color: #0d6efd;
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .ticket-topo i {
    font-size: 28px;
    color: #0d6efd;
  }

  .ticket-topo h1 {
    font-size: 22px;
    margin: 0;
  }

  .ticket-valor {
    font-size: 28px;
    font-weight: bold;
    margin-top: 5px;
  }

  .ticket-descricao {
    font-size: 14px;
    color: #666;
  }

  /* 🔽 Responsivo */
  @media (max-width: 768px) {
    .ticket-topo i {
      font-size: 24px;
    }

    .ticket-topo h1 {
      font-size: 18px;
    }

    .ticket-valor {
      font-size: 22px;
    }
  }
</style>

<div class="caixa-ticket">
    <div class="ticket-topo">
        <i class="bi bi-ticket-perforated"></i>
        <h1>Ticket Médio</h1>
    </div>

    <div class="ticket-valor">R$ 0,00</div>

    <p class="ticket-descricao">
        Indicador de desempenho do valor médio de todo evento
    </p>
</div>

    </div>

<script>
// Atualiza a data automaticamente
function atualizarData() {
  const dataElemento = document.querySelector(".data-hoje");
  const dataAtual = new Date();
  const opcoes = { day: 'numeric', month: 'long', year: 'numeric' };
  const dataFormatada = dataAtual.toLocaleDateString('pt-BR', opcoes);
  dataElemento.textContent = `Hoje é ${dataFormatada}`;
}

atualizarData();
</script>
<style>

.membro h2 {
  margin: 10px 0;
  font-size: 22px;
}

.membro .frase-impacto {
  font-style: italic;
  font-size: 14px;
  opacity: 0.9;
}

.saldo {
  flex: 1;
  display: flex;
  justify-content: space-between;
  gap: 20px;
  
}

.saldo-item {
  background: #f8f9fa;
  flex: 1.5;
  min-width: 150px;
  text-align: center;
  padding: 25px 0;
  border-radius: 15px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.saldo-item:hover {
  transform: translateY(-5px);
}

.saldo-item i {
  font-size: 30px;
  color: #007bff;
  margin-bottom: 10px;
}

.saldo-item h3 {
  font-size: 20px;
  margin: 5px 0;
  color: #333;
}

.saldo-item p {
  font-size: 14px;
  color: #555;
}

/* Estilo do gráfico */
.grafico {
  background: #fff;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.grafico h3 {
  text-align: center;
  color: #007bff;
  margin-bottom: 15px;
}

#grafico7dias {
  width: 100%;
  height: 250px;
}

/* Responsivo */
@media (max-width: 768px) {
  .principal {
    flex-direction: column; /* ← gráfico agora fica abaixo */
    margin-left: 0;
    padding: 15px;
  }

  .dashboard {
    flex-direction: column;
  }

  .saldo {
    flex-direction: row;
  }
}

@media (max-width: 480px) {
  .input-pesquisa {
    width: 90%;
    font-size: 15px;
  }

  .btn-pesquisar {
    width: 90%;
    font-size: 15px;
  }

  .grafico h3 {
    font-size: 16px;
  }
}
</style>



<div class="principal-direita">
      <div class="dashboard">
        <!-- Dois quadrados com saldos -->
        <div class="quantidade">
          <div class="quantidade-item">
            <i class="bi bi-cash-coin"></i>
            <h3>0</h3>
            <p>Ingressos  Confirmados</p>
          </div>

          <div class="quantidade-item">
            <i class="bi bi-clock-history"></i>
            <h3>0</h3>
            <p>Cortesias
            </p>
          </div>
        </div>
      </div>
<style>

.membro h2 {
  margin: 10px 0;
  font-size: 22px;
}

.membro .frase-impacto {
  font-style: italic;
  font-size: 14px;
  opacity: 0.9;
}

.quantidade {
  flex: 1;
  display: flex;
  justify-content: space-between;
  gap: 20px;
  
}

.quantidade-item {
  background: #f8f9fa;
  flex: 1.5;
  min-width: 150px;
  text-align: center;
  padding: 25px 0;
  border-radius: 15px;
  box-shadow: 0 3px 8px rgba(0,0,0,0.1);
  transition: transform 0.3s ease;
}

.quantidade-item:hover {
  transform: translateY(-5px);
}

.quantidade-item i {
  font-size: 30px;
  color: #007bff;
  margin-bottom: 10px;
}

.quantidade-item h3 {
  font-size: 20px;
  margin: 5px 0;
  color: #333;
}

.quantidade-item p {
  font-size: 14px;
  color: #555;
}

/* Estilo do gráfico */
.vendas {
  background: #fff;
  border-radius: 15px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.vendas h3 {
  text-align: center;
  color: #007bff;
  margin-bottom: 15px;
}



/* Responsivo */
@media (max-width: 768px) {
  .principal {
    flex-direction: column; /* ← gráfico agora fica abaixo */
    margin-left: 0;
    padding: 15px;
  }

  .dashboard {
    flex-direction: column;
  }

  .saldo {
    flex-direction: row;
  }
}

@media (max-width: 480px) {
  .input-pesquisa {
    width: 90%;
    font-size: 15px;
  }

  .btn-pesquisar {
    width: 90%;
    font-size: 15px;
  }

  .vendas h3 {
    font-size: 16px;
  }
}
</style>
  <div class="saude-conta">
    <!-- Linhas azuis -->
    <div class="linhas-azuis">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <!-- Ícone e texto -->
<div class="bloco-vendas">
  <div class="cabecalho-vendas">
    <h3>Todas as vendas</h3>

    <select class="selecionar-periodo">
      <option value="">Todos</option>
      <option value="hoje">Hoje</option>
      <option value="ontem">Ontem</option>
      <option value="semana_atual">Esta semana</option>
      <option value="semana_passada">Semana passada</option>
      <option value="15_dias">Últimos 15 dias</option>
      <option value="30_dias">Últimos 30 dias</option>
    </select>
  </div>

  <!-- Status das Vendas -->
  <div class="lista-vendas">
    <div class="cabecalho-lista">
      <span>Canal de Vendas</span>
      <span>Quantidade</span>
      <span>Total</span>
      <span>Data</span>
    </div>

    <!-- VENDAS -->
    <div class="item-venda" data-data="2025-02-01">
      <span>Portal</span>
      <span>32</span>
      <span>R$ 1.280,00</span>
      <span>01/02/2025</span>
    </div>

    <div class="item-venda" data-data="2025-01-31">
      <span>App do cliente</span>
      <span>14</span>
      <span>R$ 980,00</span>
      <span>31/01/2025</span>
    </div>

    <div class="item-venda" data-data="2025-01-28">
      <span>Balcão</span>
      <span>8</span>
      <span>R$ 560,00</span>
      <span>28/01/2025</span>
    </div>
  </div>
</div>




<style>
.bloco-vendas {
  margin-top: 25px;
  width: 100%;
  background: #fff;
  padding: 20px;
  border-radius: 8px;
  border: 1px solid #ddd;
}

.cabecalho-vendas {
  color: #007bff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 18px;
}

.selecionar-periodo {
  padding: 8px 12px;
  border-radius: 8px;
  border: 1px solid #ccc;
  font-size: 15px;
}

.lista-vendas {
  border: 1px solid #ddd;
  border-radius: 8px;
}

.cabecalho-lista {
  display: grid;
  color: #fff;
  grid-template-columns: 2fr 1fr 1fr 1.2fr;
  padding: 12px 10px;
  border-bottom: 1px solid #eee;
}

.item-venda {
  display: grid;
  color: #000;
  grid-template-columns: 2fr 1fr 1fr 1.2fr;
  padding: 12px 10px;
  border-bottom: 1px solid #eee;
}

.cabecalho-lista {
  font-weight: bold;
  color: fff;
  background: #007bff;
}

.item-venda:last-child {
  border-bottom: none;
}

.item-venda:hover {
  background: #f1f1f1;
}

/* Responsivo */
@media (max-width: 768px) {
  .cabecalho-lista,
  .item-venda {
    grid-template-columns: 1fr 1fr;
    grid-template-rows: auto auto;
    gap: 6px;
  }

  .cabecalho-lista span:nth-child(3),
  .cabecalho-lista span:nth-child(4) {
    display: none;
  }

  .item-venda span:nth-child(3),
  .item-venda span:nth-child(4) {
    display: none;
  }
}

</style>


<script>
document.querySelector('.selecionar-periodo').addEventListener('change', function () {
  const periodo = this.value;
  const vendas = document.querySelectorAll('.item-venda');
  const hoje = new Date();

  vendas.forEach(venda => {
    const dataVenda = new Date(venda.getAttribute('data-data'));
    let mostrar = true;

    switch (periodo) {

      case "hoje":
        mostrar = dataVenda.toDateString() === hoje.toDateString();
        break;

      case "ontem":
        const ontem = new Date();
        ontem.setDate(hoje.getDate() - 1);
        mostrar = dataVenda.toDateString() === ontem.toDateString();
        break;

      case "semana_atual":
        const inicioSemana = new Date(hoje);
        inicioSemana.setDate(hoje.getDate() - hoje.getDay());
        mostrar = dataVenda >= inicioSemana && dataVenda <= hoje;
        break;

      case "semana_passada":
        const inicioSP = new Date(hoje);
        inicioSP.setDate(hoje.getDate() - hoje.getDay() - 7);

        const fimSP = new Date(inicioSP);
        fimSP.setDate(inicioSP.getDate() + 6);

        mostrar = dataVenda >= inicioSP && dataVenda <= fimSP;
        break;

      case "15_dias":
        const dias15 = new Date(hoje);
        dias15.setDate(hoje.getDate() - 15);
        mostrar = dataVenda >= dias15 && dataVenda <= hoje;
        break;

      case "30_dias":
        const dias30 = new Date(hoje);
        dias30.setDate(hoje.getDate() - 30);
        mostrar = dataVenda >= dias30 && dataVenda <= hoje;
        break;

      default:
        mostrar = true;
    }

    venda.style.display = mostrar ? "grid" : "none";
  });
});

</script>



<style>
.saude-conta {
  margin-top: 20px;
  background: #fff;
  border-radius: 15px;
  padding: 33px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  display: flex;
  flex-direction: column;
  gap: 20px;
  text-align: center;
}

.linhas-azuis {
  display: flex;
  justify-content: space-between;
  gap: 10px;
}

.linhas-azuis span {
  flex: 1;
  height: 4px;
  background-color: #007bff;
  border-radius: 2px;
}

.icone-texto {
  border: 3px dashed rgba(168, 168, 168, 0.3);
  border-radius: 8px;
  padding: 10px;
  display: flex;
  align-items: center;
  gap: 10px;
  justify-content: center;
}

.icone-texto i {
  font-size: 30px;
  color: #007bff;
}

.icone-texto p {
 
  font-size: 14px;
  color: #555;
  margin: 0;
} 

/* Responsivo */
@media (max-width: 768px) {
  .saude-conta {
    margin-top: 20px;
  }

  .linhas-azuis span {
    height: 3px;
  }

  .icone-texto i {
    font-size: 25px;
  }

  .icone-texto p {
    font-size: 13px;
  }
}
</style>







<h1 id="titulo-acessos">Mais acessado por...</h1>

<div class="grafico-acessos-container">
  <canvas id="graficoAcessos"></canvas>
</div>

<div class="acessos-legendas">
  <div class="acessos-item">
    <span class="cor-web"></span>
    <p>Web: <span id="pct-web">0%</span></p>
  </div>

  <div class="acessos-item">
    <span class="cor-mobile"></span>
    <p>Mobile: <span id="pct-mobile">0%</span></p>
  </div>
</div>


<!-- CDN Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<style>
 /* Gráfico redondo */
#graficoAcessos {
  max-width: 260px;
  margin: auto;
}

.grafico-acessos-container {
  width: 100%;
  display: flex;
  justify-content: center;
  margin-bottom: 15px;
}

.acessos-legendas {
  display: flex;
  justify-content: center;
  gap: 30px;
  margin-top: 15px;
}

.acessos-item {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 15px;
}

.cor-web {
  width: 15px;
  height: 15px;
  background: #007bff;
  border-radius: 50%;
}

.cor-mobile {
  width: 15px;
  height: 15px;
  background: #28a745;
  border-radius: 50%;
}

#titulo-acessos {
  text-align: center;
  font-size: 20px;
  margin-bottom: 20px;
}

</style>

<script>
// Valores fictícios (mude como quiser)
const acessos_web_total = 62;     
const acessos_mobile_total = 38;

// Atualiza título dinamicamente
const tituloAcessos = document.getElementById("titulo-acessos");

if (acessos_web_total > acessos_mobile_total) {
  tituloAcessos.textContent = "Mais acessado por Web";
} else {
  tituloAcessos.textContent = "Mais acessado por Mobile";
}

// Exibe porcentagens abaixo
document.getElementById("pct-web").textContent = acessos_web_total + "%";
document.getElementById("pct-mobile").textContent = acessos_mobile_total + "%";

// Inicia o gráfico
const contextoAcessos = document
  .getElementById("graficoAcessos")
  .getContext("2d");

new Chart(contextoAcessos, {
  type: "doughnut",
  data: {
    labels: ["Web", "Mobile"],
    datasets: [
      {
        data: [acessos_web_total, acessos_mobile_total],
        backgroundColor: ["#007bff", "#ffd900ff"],
        borderWidth: 0
      }
    ]
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    cutout: "60%"
  }
});

</script>


</div>
</main>





</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('grafico7dias').getContext('2d');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Qua', 'Qui', 'Sex', 'Sáb', 'Dom', 'Seg', 'Ter'],
    datasets: [{
      label: 'Ganhos (R$)',
      data: [120, 200, 150, 300, 250, 400, 350],
      borderColor: '#007bff',
      backgroundColor: 'rgba(0,123,255,0.2)',
      borderWidth: 2,
      fill: true,
      tension: 0.3
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: { beginAtZero: true }
    },
    plugins: {
      legend: { display: false }
    }
  }
});
</script>



</div>
</body>
</html>