<?php
$sidebar = <<<HTML
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  
<style>
body, html {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
}

/* Sidebar fixa */
.sidebar {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  width: 300px;
  background: linear-gradient(to right, #ffffffff, #f3f3f3ff);
  color: white;
  height: 100vh;
  padding: 20px;
  box-sizing: border-box;
  position: fixed;
  /* border-right: 1px solid #007bff; */
  box-shadow: 4px 0px 6px rgba(0, 0, 0, 0.22);
  left: 0;
  top: 0;
  z-index: 1000;
  transition: transform 0.3s ease;
  overflow-y: auto;
  scrollbar-width: thin;            
  scrollbar-color: transparent;   
}

.sidebar::-webkit-scrollbar {
  width: 6px;
}
.sidebar::-webkit-scrollbar-track {
  background: rgba(0, 0, 0, 0.3);
  border-radius: 10px;
}
.sidebar::-webkit-scrollbar-thumb {
  background: transparent;
  border-radius: 10px;
}
.sidebar::-webkit-scrollbar-thumb:hover {
  background: transparent;
}

.sidebar .logo img {
  width: 180px;
  padding: 0 20px;
  height: auto;
  margin-bottom: 30px;
}

.usuario-logado {
  color: #fff;
  padding: 15px 20px;
  border-radius: 12px;
  font-size: 25px;
  text-align: left;
  max-width: 300px;
  font-weight: bold;
}

.sidebar nav ul,
.sidebar nav li.dropdown > ul {
  list-style: none;
  padding-left: 0;
  margin: 0;
}

.sidebar nav a i {
  
  margin-right: 10px;
  vertical-align: middle; 
  font-size: 18px;
}

.dropdown-menu li a i {
  
  margin-right: 8px;
  font-size: 16px;
}

.sidebar nav a {
  
  font-weight: bold;
  display: block;
  padding: 12px 16px;
  margin: 8px 0;
  color: #0056b3;
  text-decoration: none;
  border-radius: 5px;  
  background: linear-gradient(to right, #ffffffff, #f3f3f3ff);
  transition: background-color 0.4s ease, transform 0.3s ease;
}

.sidebar nav a.active {
  border-left: 4px solid #007bff;
  background: linear-gradient(to right, #e9f2ff, #f3f3f3);
  color: #007bff;
  transform: translateX(3px);
}

@media (hover: hover) and (pointer: fine) {
  .sidebar nav a:hover {
    border-left: 4px solid #0056b3;
    background: linear-gradient(to right, #eeeeeeff, #e6e5e5ff);
    color: #007bff;
    transform: translateX(4px);

    }
  }

.sidebar nav li.dropdown.open > a,
.sidebar nav a:focus {
  transform: translateX(0) !important;
  outline: none;
}

.dropdown-menu {
  display: none;
  position: relative;
  background: linear-gradient(to right, #ffffffff, #f3f3f3ff);
  z-index: 1001;
  border-radius: 5px;
  padding: 0;
  min-width: 180px;
}

.dropdown.open .dropdown-menu {
  display: block;
}

.dropdown-menu li {
  margin: 0;
  padding: 0;
}

.dropdown-menu li a {
  display: block;
  padding: 10px 20px;
  color: #0056b3;
  background-color: #fafafa;
  font-weight: normal;
  text-align: left;
}

.dropdown-menu li a:hover {
  background-color: #c0c0c0ff;
  color: #0056b3;
}

.sidebar nav li.dropdown {
  position: relative;
}

.sidebar nav li.dropdown > a {
  padding-right: 40px;
}

.sidebar nav li.dropdown > a::after {
  content: "▼";
  font-size: 12px;
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  transition: transform 0.3s ease;
}

.sidebar nav li.dropdown.open > a::after {
  transform: translateY(-50%) rotate(180deg);
}

.hamburger { 
  display: none;
  position: fixed; 
  top: 0; 
  left: 0;
  width: 100%;
  height: 50px; 
  background: #007bff; 
  border: none; 
  font-size: 26px; 
  color: white; 
  z-index: 1100; 
  cursor: pointer; 
  text-align: left; 
  padding-left: 15px; 
  transition: background 0.3s ease, color 0.3s ease; 
}

.hamburger.active {
  background: transparent;
  color: #007bff;
}

.desk-sidebar {
  
  color: #6b6b6bff;
  font-size: 15px;
  font-weight: bold;
  margin-top: 20px;
  margin-left: 16px;
}

@media (max-width: 1024px) {

  .sidebar {
    transform: translateX(-100%);
    -webkit-overflow-scrolling: touch;
    overflow-y: auto;
    -ms-overflow-style: none;  
    scrollbar-width: none;     
  }

  .sidebar::-webkit-scrollbar {
    display: none;
  }

  .sidebar.active {
    transform: translateX(0);
  }

  .controle-divs {
    margin-left: 0;
  }

  .sidebar .logo img {
    width: 180px;
    padding: 40px 0 0 0;
    margin-bottom: 0px;
  }

  .sidebar nav a {
    padding: 12px 16px;
    margin: 6px 0;
    font-size: 16px;
  }
  
  .hamburger {
    display: block;
  }

  .logo-hamburger {
    position: absolute;
    left: 50%;
    transform: translateX(-50%); /* centraliza perfeitamente */
    width: 150px;
    height: auto;
  }

}
</style>

<div class="sidebar" id="sidebar">    
  <div class="logo">
    <img src="img/logo-gordinho-afiliados1.png" alt="Logo">
  </div>

  <div class="usuario-logado">
    <!-- Aqui você pode incluir o painel do usuário -->
  </div>

<nav>
  <a href="dashboard.php"><i class="bi bi-graph-up-arrow"></i> Dashboard</a>
  <a href="insights.php"><i class="bi bi-bar-chart-fill"></i> Insights BI</a>

  <ul>
    <li class="dropdown">
      <a href="#"><i class="bi bi-ticket-perforated-fill"></i> Ingressos</a>
      <ul class="dropdown-menu">
        <li class="botao-drop"><a href="ingressos.php"><i class="bi bi-cart-plus"></i> Ingressos</a></li>
        <li class="botao-drop"><a href="descontos.php"><i class="bi bi-tags-fill"></i> Descontos</a></li>
        <li class="botao-drop"><a href="dados-complementares.php"><i class="bi bi-journal-text"></i> Dados Complementares</a></li>
        <li class="botao-drop"><a href="emitir-cortesias.php"><i class="bi bi-ticket-detailed"></i> Emitir Cortesias</a></li>
        <li class="botao-drop"><a href="convite-compras.php"><i class="bi bi-envelope-plus"></i> Gerar Convite de Compra</a></li>
        <li class="botao-drop"><a href="venda-fisica.php"><i class="bi bi-shop"></i> Vendas Físicas</a></li>
        <li class="botao-drop"><a href="combo-ingresso.php"><i class="bi bi-collection"></i> Combo de Ingressos</a></li>
      </ul>
    </li>
  </ul>

  <ul>
    <li class="dropdown">
      <a href="#"><i class="bi bi-share-fill"></i> Marketing</a>
      <ul class="dropdown-menu">
        <li class="botao-drop"><a href="compartilhar.php"><i class="bi bi-share"></i> Compartilhamento</a></li>
        <li class="botao-drop"><a href="rastrear.php"><i class="bi bi-geo-alt"></i> Rastreamento</a></li>
      </ul>
    </li>
  </ul>

  <a href="vendas.php"><i class="bi bi-box-seam-fill"></i> Vendas</a>

  <ul>
    <li class="dropdown">
      <a href="#"><i class="bi bi-ui-checks"></i> Validação</a>
      <ul class="dropdown-menu">
        <li class="botao-drop"><a href="datas.php"><i class="bi bi-calendar-event"></i> Datas de Entrada</a></li>
        <li class="botao-drop"><a href="local-entrada.php"><i class="bi bi-geo-fill"></i> Locais de Entrada</a></li>
        <li class="botao-drop"><a href="relatorio-checkin.php"><i class="bi bi-clipboard-data"></i> Relatório de Check-in</a></li>
      </ul>
    </li>
  </ul>

  <ul>
    <li class="dropdown">
      <a href="#"><i class="bi bi-people-fill"></i> Afiliados</a>
      <ul class="dropdown-menu">
        <li class="botao-drop"><a href="afiliados.php"><i class="bi bi-person-badge"></i> Afiliados</a></li>
        <li class="botao-drop"><a href="afiliados-relatorio-vendas.php"><i class="bi bi-file-bar-graph"></i> Relatório de Vendas</a></li>
      </ul>
    </li>
  </ul>

  <a href="credenciamento.php"><i class="bi bi-person-check-fill"></i> Credenciamento</a>
   <h3 class="desk-sidebar"> Fechamento</h3>
   <ul>
  <li class="dropdown">
    <a href="#"><i class="bi bi-currency-dollar"></i> Financeiro</a>
    <ul class="dropdown-menu">
      <li class="botao-drop">
        <a href="auditoria.php"><i class="bi bi-clipboard-check"></i> Auditoria</a>
      </li>
      <li class="botao-drop">
        <a href="repasses.php"><i class="bi bi-arrow-left-right"></i> Repasses</a>
      </li>
    </ul>
  </li>
</ul>

<ul>
  <li class="dropdown">
    <a href="#"><i class="bi bi-people-fill"></i> Relatórios</a>
    <ul class="dropdown-menu">
      <li class="botao-drop">
        <a href="relatorios-ingressos.php"><i class="bi bi-ticket-detailed"></i> Relatório de ingressos</a>
      </li>
      <li class="botao-drop">
        <a href="relatorios-inteligentes.php"><i class="bi bi-graph-up"></i> Relatórios inteligentes</a>
      </li>
      <li class="botao-drop">
        <a href="relatorios-caixa.php"><i class="bi bi-cash-coin"></i> Relatório de caixas</a>
      </li>
    </ul>
  </li>
</ul>

</nav>

</div>

<div class="controle-divs"> 
  <div class="menu-responsivo">     
    <button id="hamburger" class="hamburger" onclick="toggleSidebar()">☰ 
      <img src="img/logo-gordinho-afiliados2.png" alt="Logo" class="logo-hamburger">
    </button> 
  </div> 
</div>



<script>
document.querySelectorAll("nav ul li.dropdown > a").forEach((btn) => {
  btn.addEventListener("click", function(e) {
    e.preventDefault(); 
    const parent = this.parentElement;
    const isOpen = parent.classList.contains("open");
    document.querySelectorAll("nav ul li.dropdown").forEach(li => li.classList.remove("open"));
    if (!isOpen) {
      parent.classList.add("open");
    }
  });
});

document.addEventListener("click", function(e) {
  if (!e.target.closest("li.dropdown")) {
    document.querySelectorAll("li.dropdown").forEach(li => li.classList.remove("open"));
  }
});

document.addEventListener("DOMContentLoaded", function() {
  const links = document.querySelectorAll(".sidebar nav a");

  links.forEach(link => {
    link.addEventListener("click", function() {
      // Remove a classe 'active' de todos
      links.forEach(l => l.classList.remove("active"));

      // Adiciona a classe apenas no clicado
      this.classList.add("active");
    });
  });
});

function toggleSidebar() {
  const sidebar = document.getElementById('sidebar');
  const hamburger = document.getElementById('hamburger');

  sidebar.classList.toggle('active');
  hamburger.classList.toggle('active');

  if (sidebar.classList.contains('active')) {
    hamburger.innerHTML = `✖`;
  } else {
    hamburger.innerHTML = `☰ <img src="img/logo-gordinho-afiliados2.png" class="logo-hamburger" alt="Logo"> `;
  }
}

// 🩵 Fecha a sidebar ao clicar fora dela (modo responsivo)
document.addEventListener("click", function(e) {
  const sidebar = document.getElementById('sidebar');
  const hamburger = document.getElementById('hamburger');
  const isClickInside = e.target.closest('#sidebar') || e.target.closest('#hamburger');

  if (!isClickInside && window.innerWidth <= 768 && sidebar.classList.contains('active')) {
    sidebar.classList.remove('active');
    hamburger.classList.remove('active');
    hamburger.innerHTML = `☰ <img src="img/logo-gordinho-afiliados2.png" class="logo-hamburger" alt="Logo"> `;
  }
});
</script>

HTML;

//echo $sidebar;
?>
