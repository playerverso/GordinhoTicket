
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



<div class="controle-principal">
 

<style>
/* Container principal */
.controle-principal {
  margin-left: 0px; 
  
}


/* Responsivo */
@media (max-width: 768px) {
  .controle-principal {
    margin-left: 0;
    padding: 60px 0px;
    
  }


}

</style>

</head>
<body>

<div class="perfil">
    <h1 class="titulo-perfil">Minha conta</h1>

  <!-- menu de abas -->
  <div class="menuAba">
    <button class="botaoAba" data-alvo="abaDadosConta" data-estado="ativo">Dados da Conta</button>
    <button class="botaoAba" data-alvo="abaComprador" data-estado="inativo">Comprador</button>
    <button class="botaoAba" data-alvo="abaOrganizador" data-estado="inativo">Organizador</button>
    <button class="botaoAba" data-alvo="abaEquipamentos" data-estado="inativo">Gestão de Equipamentos</button>
  </div>

<style>
    /* ----------------- ÁREA DO PERFIL ----------------- */
    .perfil { 
        max-width: 920px; 
        margin: 0 auto; 
    }

    /* título principal */
    .titulo-perfil { 
        font-size: 25px; 
        margin-bottom: 12px; 
        color: #007bff;
    }

    /* MENU DE ABAS */
    .menuAba { 
        display:flex; 
        gap:10px; 
        margin-bottom:18px; 
    }
    .botaoAba {
    padding:10px 14px;
    border-radius:8px;
    border:1px solid #cfcfcf;
    background:#fff;
    cursor:pointer;
    font-size:15px;
    }
    .botaoAba[data-estado="ativo"]{
    background:#007bff;
    color:#fff;
    border-color:#007bff;
    }

    /* CAIXA DE CONTEÚDO (cada aba) */
    .conteudoAba {
    background:#fff;
    padding:22px;
    border-radius:12px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
    margin-bottom:18px;
    display:none; /* mostrado via JS mediante data-estado */
    }
    .conteudoAba[data-estado="ativo"] { 
        display:block; 
    }
@media (max-width: 768px) {

    .perfil {
        max-width: 100%;
        padding: 0 12px;
    }

    .tituloPagina {
        font-size: 18px;
        text-align: center;
    }

    .menuAba {
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
    }

    .botaoAba {
        flex: 1 1 calc(50% - 8px); 
        text-align: center;
        font-size: 14px;
        padding: 10px;
    }

    .conteudoAba {
        padding: 16px;
    }
}

</style>

  <!-- áreas das abas -->
  <div id="abaDadosConta" class="conteudoAba" data-estado="ativo">
    <!-- DADOS DA CONTA -->
    <div class="caixaConta">

      <h2 class="tituloConta">dados pessoais</h2>

      <div class="dadosPessoais">
        <!-- nome/apelido -->
        <div class="dado">
          <label>Nome / apelido</label>
          <div class="linhaInput">
            <input id="campoNome" class="inputTexto" type="text" value="Daniel Souza" disabled>
            <button id="btnEditarNome" class="botaoEditar" type="button">Editar</button>
          </div>
        </div>

        <!-- telefone (sem editar, com validar) -->
        <div class="dado">
          <label>Telefone</label>
          <div class="linhaInput">
            <input id="campoTelefone" class="inputTexto" type="text" value="(11) 90000-0000">
            <button id="btnValidarTel" class="botaoValidar" type="button">Validar telefone</button>
          </div>
        </div>

        <!-- email -->
        <div class="dado">
          <label>E-mail</label>
          <div class="linhaInput">
            <input id="campoEmail" class="inputTexto" type="email" value="exemplo@email.com" disabled>
            <button id="btnEditarEmail" class="botaoEditar" type="button">Editar</button>
          </div>
        </div>

      </div>

      <div class="acoesConta" style="margin-top:14px;">
        <div class="acoesConta" aria-hidden="true"></div>
        <div class="acoesConta" style="display:flex; gap:12px;">
          <button id="btnAlterarSenha" class="botaoAcao" type="button">Alterar senha</button>
          <button id="btnCriarPDV" class="botaoAcao" type="button">Criar dados de acesso PDV</button>
        </div>
      </div>

    </div>
  </div>

<style>
/* ----------------- DADOS DA CONTA ----------------- */

    .caixaConta { 
        padding:0; 
    } /* já tem padding no conteudoAba */

    .tituloConta { 
        font-size:18px; 
        color:#007bff; 
        margin-bottom:14px; 
        text-transform:capitalize; 
    }

    /* dados pessoais */
    .dadosPessoais { 
        display:flex; 
        flex-direction:column; 
        gap:14px; 
    }

    .dado {
    display:flex;
    flex-direction:column;
    gap:8px;
    }

    .linhaInput { 
        display:flex; 
        gap:10px; 
        align-items:center; 
    }

    .inputTexto {
    flex:1;
    padding:10px;
    border-radius:8px;
    border:1px solid #d0d0d0;
    font-size:14px;
    background:#fff;
    }

    .botaoEditar {
    padding:10px 12px;
    border-radius:8px;
    border:1px solid #bdbdbd;
    background:#fff;
    cursor:pointer;
    }

    .botaoValidar {
    padding:10px 12px;
    border-radius:8px;
    border:1px solid #bdbdbd;
    background:#fff;
    cursor:pointer;
    }

    /* ações */
    .acoesConta { display:flex; gap:12px; margin-top:14px; }
    .botaoAcao {
    padding:12px 18px;
    border-radius:8px;
    border:none;
    background:#007bff;
    color:#fff;
    cursor:pointer;
    }
    /* ================= RESPONSIVO ================= */
    @media (max-width: 768px) {

        .dadosPessoais {
            gap: 20px;
        }

        .linhaInput {
            flex-direction: column;
            align-items: flex-start;
        }

        .inputTexto {
            width: 100%;
        }

        .botaoEditar,
        .botaoValidar {
            width: 100%;
            margin-top: 6px;
        }

        .acoesConta {
            flex-direction: column;
            gap: 10px;
        }

        .botaoAcao {
            width: 100%;
            text-align: center;
        }
    }

</style>

  <div id="abaComprador" class="conteudoAba" data-estado="inativo">
    <!-- COMPRADOR -->
    <div class="compradorCaixa">
      <h2 class="tituloComprador">dados para a compra</h2>

      <div class="dadosComprador">
        <div id="exNome" class="itemComprador">Nome: João da Silva</div>
        <div id="exCpf" class="itemComprador">CPF: 123.456.789-00</div>
        <div id="exTel" class="itemComprador">Telefone: (11) 98888-7777</div>
        <div id="exNasc" class="itemComprador">Data de nascimento: 12/05/1995</div>
        <div id="exEndereco" class="itemComprador full">Endereço: Rua Exemplo, 100 – Centro</div>
      </div>

      <button id="btnEditarComprador" class="botaoEditarComprador" type="button">Editar</button>
    </div>
  </div>




 
  <!-- ===================== ORGANIZADOR ===================== -->
<div id="abaOrganizador" class="conteudoAba" data-estado="inativo" class="organizador">

    <!-- título + botão editar -->
    <div class="tituloOrganizador">
        <h1>dados do organizador</h1>
        <button class="botaoEditarOrganizador" onclick="abrirPopupOrganizador()">editar</button>
    </div>

    <!-- informações -->
    <div class="organizadorInfo">
        <p><strong>Nome:</strong> João Silva</p>
        <p><strong>Telefone:</strong> (11) 99999-9999</p>
        <p><strong>Nascimento:</strong> 12/05/1988</p>
        <p><strong>Endereço:</strong> Rua das Flores, 123 – Centro – SP</p>
    </div>


    <!-- ===================== FINANCEIRO ===================== -->
    <div class="tituloFinanceiro">
        <h2>dados financeiros</h2>
        <button class="botaoEditarFinanceiro" onclick="abrirPopupFinanceiro()">editar</button>
    </div>

    <div class="dadosFinanceiro">
        <p><strong>Telefone:</strong> (11) 90000-0000</p>
        <p><strong>Email:</strong> financeiro@dominio.com</p>
    </div>

    <p class="textoInformativo">
        Os seletores abaixo definem quais os canais de comunicação serão utilizados para o envio de códigos,
        solicitações e informações sobre repasse para contas de produtor e contas de terceiros.
        Ao menos um dos canal de comunicação precisa estar habilitado.
    </p>

    <!-- SWITCH E-MAIL -->
    <div class="linhaOpcao">
        <span>Receber por e-mail</span>
        <label class="switch">
            <input type="checkbox" id="switchEmail" checked onclick="verificarSwitch('email')">
            <span class="slider"></span>
        </label>
    </div>

    <!-- SWITCH SMS -->
    <div class="linhaOpcao">
        <span>Receber por SMS</span>
        <label class="switch">
            <input type="checkbox" id="switchSms" checked onclick="verificarSwitch('sms')">
            <span class="slider"></span>
        </label>
    </div>

<!-- ===================== CSS ===================== -->
<style>

.organizador {
    background:#fff;
    padding:22px;
    border-radius:12px;
    box-shadow:0 6px 18px rgba(0,0,0,0.06);
    margin-bottom:20px;
}

/* TITULOS */
.tituloOrganizador,
.tituloFinanceiro {
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:14px;
}

.botaoEditarOrganizador,
.botaoEditarFinanceiro {
    padding:8px 14px;
    border-radius:8px;
    border:1px solid #ccc;
    background:#fff;
    cursor:pointer;
}

.organizadorInfo,
.dadosFinanceiro { 
    display:flex; 
    flex-direction:column;
    gap:6px;
    margin-bottom:20px;
}

.textoInformativo {
    font-size:14px;
    color:#555;
    margin-bottom:16px;
}

/* SWITCH */
.linhaOpcao {
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:12px;
}

.switch {
    position:relative;
    width:48px;
    height:24px;
    display:inline-block;
}

.switch input { display:none; }

.slider {
    position:absolute;
    cursor:pointer;
    top:0; left:0; right:0; bottom:0;
    background:#ccc;
    border-radius:34px;
    transition:.3s;
}

.slider:before {
    content:"";
    position:absolute;
    height:18px;
    width:18px;
    left:3px;
    bottom:3px;
    background:white;
    border-radius:50%;
    transition:.3s;
}

input:checked + .slider {
    background:#007bff;
}
input:checked + .slider:before {
    transform:translateX(24px);
}



</style>

<!-- ===================== POPUP ORGANIZADOR ===================== -->
<div class="popupFundo" id="popupOrganizador">
    <div class="popupJanela">
        <h2>editar dados do organizador</h2>

        <label>Nome</label>
        <input type="text" class="popupInput">

        <label>Telefone</label>
        <input type="text" class="popupInput">

        <label>Data de nascimento</label>
        <input type="date" class="popupInput">

        <label>Endereço</label>
        <input type="text" class="popupInput">

        <div class="popupBotoes">
            <button class="popupCancelar" onclick="fecharPopupOrganizador()">cancelar</button>
            <button class="popupSalvar">salvar</button>
        </div>
    </div>
</div>


<!-- ===================== POPUP FINANCEIRO ===================== -->
<div class="popupFundo" id="popupFinanceiro">
    <div class="popupJanela">
        <h2>editar dados financeiros</h2>

        <label>Telefone</label>
        <input type="text" class="popupInput">

        <label>Email</label>
        <input type="email" class="popupInput">

        <div class="popupBotoes">
            <button class="popupCancelar" onclick="fecharPopupFinanceiro()">cancelar</button>
            <button class="popupSalvar">salvar</button>
        </div>
    </div>
</div>

<!-- ===================== POPUP CONFIRMAÇÃO SWITCH ===================== -->
<div class="popupFundo" id="popupConfirmar">
    <div class="popupJanela">
        <h3>confirmar desativação</h3>
        <p>Deseja realmente desativar este canal de comunicação?</p>

        <div class="popupBotoes">
            <button class="popupCancelar" onclick="cancelarDesativacao()">cancelar</button>
            <button class="popupSalvar" onclick="confirmarDesativacao()">confirmar</button>
        </div>
    </div>
</div>
<style>
    /* POPUP */

.popupFundo {
    display:none;
    position:fixed;
    top:0; left:0;
    width:100%; 
    height:100%;
    background:rgba(0,0,0,0.4);
    justify-content:center;
    align-items:center;
    z-index:1000;
}

.popupJanela {
    background:#fff;
    padding:22px;
    width:520px;
    border-radius:12px;
    display:flex;
    flex-direction:column;
    gap:12px;
}

.popupInput {
    width:100%;
    padding:10px;
    border-radius:8px;
    border:1px solid #ccc;
}

.popupBotoes {
    display:flex;
    justify-content:space-between;
    margin-top:12px;

}

.popupCancelar {
    background:#e5e5e5;
    color:#333;
    border:none;
    padding:10px 18px;
    border-radius:8px;
    cursor:pointer;
    transition:0.2s;
}

.popupCancelar:hover {
    background:#d4d4d4;
}

.popupSalvar {
    background:#007bff;
    color:#fff;
    border:none;
    padding:10px 18px;
    border-radius:8px;
    cursor:pointer;
}

/* ==================== RESPONSIVO 768px ==================== */
@media (max-width: 768px) {

    .popupJanela {
        width: 90%;          /* reduz largura para caber em telas menores */
        padding: 18px;       /* ajuste do espaçamento interno */
        border-radius: 10px;
    }

    .popupBotoes {
        flex-direction: column;  /* empilha os botões */
        gap: 10px;
    }

    .popupCancelar,
    .popupSalvar {
        width: 100%;            /* botões ocupam largura total */
        padding: 12px;
        font-size: 15px;
    }
}

</style>




<!-- ===================== JAVASCRIPT ===================== -->
<script>

function abrirPopupOrganizador(){
    document.getElementById("popupOrganizador").style.display = "flex";
}
function fecharPopupOrganizador(){
    document.getElementById("popupOrganizador").style.display = "none";
}

function abrirPopupFinanceiro(){
    document.getElementById("popupFinanceiro").style.display = "flex";
}
function fecharPopupFinanceiro(){
    document.getElementById("popupFinanceiro").style.display = "none";
}

/* SWITCH CONFIRMAÇÃO */
let ultimoSwitch = "";

function verificarSwitch(tipo){
    ultimoSwitch = tipo;

    const campo = tipo === "email" ? "switchEmail" : "switchSms";
    const ativo = document.getElementById(campo).checked;

    if(!ativo){
        document.getElementById("popupConfirmar").style.display = "flex";
    }
}

function cancelarDesativacao(){
    if(ultimoSwitch === "email"){
        document.getElementById("switchEmail").checked = true;
    } else {
        document.getElementById("switchSms").checked = true;
    }

    document.getElementById("popupConfirmar").style.display = "none";
}

function confirmarDesativacao(){
    document.getElementById("popupConfirmar").style.display = "none";
}

</script>

</div>

<style>
    
    /* ----------------- COMPRADOR ----------------- */
    .compradorCaixa { 
        display:flex; 
        flex-direction:column; 
        gap:12px; 
    }

    .tituloComprador { 
        font-size:18px; 
        color:#007bff; 
        margin-bottom:6px; 
    }

    .dadosComprador {
    display:grid;
    grid-template-columns: repeat(2,1fr);
    gap:12px;
    }

    .itemComprador {
    background:#fafafa;
    border-radius:8px;
    padding:12px;
    border:1px solid #eee;
    font-size:14px;
    }

    .itemComprador.full { grid-column:1 / -1; }
    .botaoEditarComprador {
    padding:10px 14px;
    border-radius:8px;
    border:none;
    background:#007bff;
    color:#fff;
    cursor:pointer;
    width:200px;
    }
</style>

<!-- POPUP EDITAR COMPRADOR -->
<div id="fundoPopup" class="fundoPopup" data-estado="fechado">
  <div class="caixaPopup" role="dialog" aria-modal="true">

    <h2>Editar dados do comprador</h2>

    <label for="inpNome">Nome</label>
    <input id="inpNome" type="text" value="João da Silva">

    <label for="inpCpf">CPF</label>
    <input id="inpCpf" type="text" value="123.456.789-00">

    <label for="inpTel">Telefone</label>
    <input id="inpTel" type="text" value="(11) 98888-7777">

    <label for="inpNasc">Data de nascimento</label>
    <input id="inpNasc" type="date">

    <label for="inpEnd">Endereço</label>
    <input id="inpEnd" type="text" value="Rua Exemplo, 100 – Centro">

    <div class="botoesPopup">
      <button id="salvarComprador" class="botaoSalvar" type="button">Salvar</button>
      <button id="cancelarComprador" class="botaoCancelar" type="button">Cancelar</button>
    </div>

  </div>
</div>

<style>
/* ----------------- POPUP EDITAR COMPRADOR ----------------- */

/* fundo do popup */
.fundoPopup {
  position:fixed;
  inset:0;
  background: rgba(0,0,0,0.55);
  display:none;
  justify-content:center;
  align-items:center;
  z-index:9999;
  padding:18px;
}
/* aberto via data-estado */
.fundoPopup[data-estado="aberto"] { 
    display:flex; 
}

/* caixa do popup */
.caixaPopup {
  width:100%;
  max-width:520px;
  background:#fff;
  border-radius:12px;
  padding:20px;
  box-shadow: 0 8px 26px rgba(0,0,0,0.12);
  max-height:90vh;
  overflow:auto;
}
.caixaPopup h2 { color:#007bff; 
    margin-bottom:14px; 
    font-size:18px; 
}

.caixaPopup label { 
    display:block; 
    font-size:13px; 
    margin:8px 0 6px; 
}

.caixaPopup input, .caixaPopup textarea {
  width:100%;
  padding:10px;
  border-radius:8px;
  border:1px solid #d6d6d6;
  font-size:14px;
}
.caixaPopup textarea { 
    min-height:80px; 
    resize:vertical; 
}

/* botoes popup */
.botoesPopup { 
    display:flex; gap:10px; 
    justify-content:flex-end; 
    margin-top:12px; 
}

.botaoSalvar {
  padding:10px 16px; 
  border-radius:8px; 
  background:#28a745; 
  color:#fff; 
  border:none; 
  cursor:pointer;
}

.botaoCancelar {
  padding:10px 16px; 
  border-radius:8px; 
  background:#dc3545; 
  color:#fff; 
  border:none; 
  cursor:pointer;
}

/* ----------------- RESPONSIVO ----------------- */
@media (max-width:700px){
  .dadosComprador { 
    grid-template-columns: 1fr; 
    }

  .botaoEditarComprador { 
    width:100%; 
    }
}
</style>


<div id="abaConta" class="conteudoAba" data-estado="ativo">...</div>
<div id="abaComprador" class="conteudoAba" data-estado="inativo">...</div>
<div id="abaOrganizador" class="conteudoAba" data-estado="inativo">...</div>

<!-- AQUI -->
<div id="abaEquipamentos" class="conteudoAba" data-estado="inativo">
    <div class="equipamentos">
        <div class="titulo-equipamentos">
            <h1>Vendas físicas</h1>
        </div>
    </div>
</div>

<script>
/* Controle de abas — versão que cria a área se estiver faltando */
(function () {
  const botoesAba = document.querySelectorAll('.botaoAba');
  const perfilRoot = document.querySelector('.perfil');

  // Mapeamento de conteúdo padrão para criar caso a area não exista
  const conteudosPadrao = {
    'abaEquipamentos': `
      <div class="equipamentos">
        <div class="titulo-equipamentos"><h1>Vendas físicas</h1></div>
      </div>
    `,
    // Você pode adicionar mais templates padrão aqui caso precise:
    // 'abaComprador': '<div>...</div>'
  };

  function desativarTudo() {
    botoesAba.forEach(b => b.setAttribute('data-estado', 'inativo'));
    document.querySelectorAll('.conteudoAba').forEach(a => a.setAttribute('data-estado', 'inativo'));
  }

  function obterOuCriarArea(idAlvo) {
    let area = document.getElementById(idAlvo);
    if (!area) {
      // cria a div com a classe única usada no projeto
      area = document.createElement('div');
      area.id = idAlvo;
      area.className = 'conteudoAba';
      area.setAttribute('data-estado', 'inativo');

      // se tiver um template padrão, injeta; senão deixa vazia
      if (conteudosPadrao[idAlvo]) {
        area.innerHTML = conteudosPadrao[idAlvo];
      }
      // adiciona a nova área ao final da .perfil (pode ajustar o local se preferir)
      if (perfilRoot) perfilRoot.appendChild(area);
    }
    return area;
  }

  botoesAba.forEach(botao => {
    botao.addEventListener('click', () => {
      // desativa tudo
      desativarTudo();

      // ativa botão clicado
      botao.setAttribute('data-estado', 'ativo');

      // ativa área correspondente (cria se necessário)
      const alvo = botao.getAttribute('data-alvo');
      if (!alvo) return;
      const area = obterOuCriarArea(alvo);
      area.setAttribute('data-estado', 'ativo');
    });
  });

  // Inicialização: garante que exista ao menos a área ativa inicial (primeiro botão ativo)
  (function inicializarAbaAtiva() {
    const botaoInicial = document.querySelector('.botaoAba[data-estado="ativo"]') || botoesAba[0];
    if (!botaoInicial) return;
    // marca todos inativos e ativa o inicial
    desativarTudo();
    botaoInicial.setAttribute('data-estado', 'ativo');
    const alvo = botaoInicial.getAttribute('data-alvo');
    if (alvo) {
      const area = obterOuCriarArea(alvo);
      area.setAttribute('data-estado', 'ativo');
    }
  })();
})();

</script>




</body>
</html>


</div>




</body>
</html>