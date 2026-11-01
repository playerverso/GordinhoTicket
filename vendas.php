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
        <!-- CONTAINER PRINCIPAL -->
<div class="vendas">

    <h2 class="titulo-vendas">Vendas</h2>

    <div class="vendas-categorias">

        <!-- PERÍODO -->
        <div class="campo">
            <label class="label-campo">Período</label>
            <input list="listaPeriodo" class="input-periodo" placeholder="Selecione o período">
            <datalist id="listaPeriodo">
                <option value="Hoje">
                <option value="Ontem">
                <option value="Esta semana">
                <option value="Semana passada">
                <option value="Últimos 15 dias">
                <option value="Últimos 30 dias">
            </datalist>
        </div>

        <!-- Nº PEDIDO / COMPRADOR -->
        <div class="campo">
            <label class="label-campo">Nº do pedido ou dados do comprador</label>
            <input type="text" class="input-texto" placeholder="Digite para buscar">
        </div>

        <!-- Nº DO INGRESSO -->
        <div class="campo">
            <label class="label-campo">Nº do ingresso</label>
            <input type="text" class="input-texto" placeholder="Digite o número do ingresso">
        </div>

        <!-- GRID 3 COLUNAS -->
        <div class="filtros-grid">


           <!-- ORIGEM -->
            <div class="campo">
                <label class="label-campo">Origem</label>

                <div class="input-busca" id="abrir-origem">Selecione a origem</div>

                <div class="lista-fechada" id="lista-origem">

                    <div class="busca">
                        <span class="icone-lupa"><i class="bi bi-search"></i></span>
                        <input type="text" class="input-busca" placeholder="Pesquisar origem">
                    </div>

                    <div class="opcao"><input type="checkbox"> Portal</div>
                    <div class="opcao"><input type="checkbox"> App do Cliente</div>
                    <div class="opcao"><input type="checkbox"> App do Produtor</div>
                    <div class="opcao"><input type="checkbox"> App do Comissário</div>
                    <div class="opcao"><input type="checkbox"> POS</div>

                </div>
            </div>

            <!-- PONTOS DE VENDA -->
            <div class="campo">
                <label class="label-campo">Pontos de Venda</label>

                <div class="input-busca" id="abrir-pontos">Selecione ponto de venda</div>

                <div class="lista-fechada" id="lista-pontos">

                    <div class="busca">
                        <span class="icone-lupa"><i class="bi bi-search"></i></span>
                        <input type="text" class="input-busca" placeholder="Pesquisar ponto">
                    </div>

                    <div class="opcao"><input type="checkbox"> Gordinho Produções</div>
                </div>
            </div>

            <!-- INGRESSOS -->
            <div class="campo">
                <label class="label-campo">Ingressos</label>

                <div class="input-busca" id="abrir-ingressos">Selecione tipo de ingresso</div>

                <div class="lista-fechada" id="lista-ingressos">

                    <div class="busca">
                        <span class="icone-lupa"><i class="bi bi-search"></i></span>
                        <input type="text" class="input-busca" placeholder="Pesquisar ingresso">
                    </div>

                    <!-- Exemplo — você disse que posso repetir os nomes anteriores -->
                    <div class="opcao"><input type="checkbox"> Pista</div>
                    <div class="opcao"><input type="checkbox"> Frontstage</div>
                    <div class="opcao"><input type="checkbox"> Camarote Open Bar</div>
                    <div class="opcao"><input type="checkbox"> VIP</div>
                    <div class="opcao"><input type="checkbox"> Backstage</div>

                </div>
            </div>

            </div>

        </div> <!-- fim filtros-grid -->
<style>
.vendas {
    background: #fff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-top: 20px;
}

.titulo-vendas {
    font-size: 22px;
    margin-bottom: 20px;
}

.vendas-categorias {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.campo {
    display: flex;
    flex-direction: column;
}

.label-campo {
    font-weight: bold;
    margin-bottom: 6px;
}

.input-texto,
.input-busca,
.input-periodo {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
}

/* Estilo da barra de busca */
.busca {
    display: flex;
    align-items: center;
    background: #f5f5f5;
    padding: 8px;
    border-radius: 6px;
    margin-bottom: 10px;
}

.icone-lupa {
    margin-right: 8px;
}

/* Lista de opções */
.lista-fechada {
    max-height: 0;
    overflow: hidden;
    transition: max-height .35s ease;
    border: 1px solid transparent;
}

.lista-aberta {
    max-height: 500px;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 8px;
    background: #fff;
}

/* Cada opção */
.opcao {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 6px 0;
}

/* GRID PARA OS 3 ÚLTIMOS FILTROS */
.filtros-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

@media (max-width: 768px) {

    /* Container principal */
    .vendas {
        padding: 15px;
    }

    .titulo-vendas {
        font-size: 20px;
        text-align: center;
    }

    .vendas-categorias {
        gap: 18px;
    }

    /* Ajuste dos campos */
    .campo {
        width: 100%;
    }

    /* Inputs */
    .input-texto,
    .input-periodo,
    .input-busca {
        font-size: 16px;
        padding: 12px;
    }

    /* LABELS */
    .label-campo {
        font-size: 15px;
        margin-bottom: 8px;
    }

    /* Barra de pesquisa */
    .busca {
        padding: 10px;
    }

    .busca input {
        font-size: 15px;
    }

    .icone-lupa {
        font-size: 18px;
    }

    /* Listas */
    .lista-fechada,
    .lista-aberta {
        width: 100%;
    }

    .lista-aberta {
        max-height: 450px; 
        overflow-y: auto; /* permite scroll */
    }

    .opcao {
        padding: 10px;
        font-size: 15px;
    }

    /* 🎯 Ajuste dos 3 últimos inputs (origem, pontos e ingressos) */
.filtros-grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 20px;
}

    .grupo-filtros .campo {
        width: 100%;
    }

    /* Botão que abre a lista */
    .input-busca {
        font-size: 15px;
        padding: 12px;
        height: auto;
    }


}



</style>
<script>
// Função para abrir/fechar as listas
function toggleLista(botaoId, listaId) {
    document.getElementById(botaoId).addEventListener("click", function () {
        const lista = document.getElementById(listaId);

        if (lista.classList.contains("lista-aberta")) {
            lista.classList.remove("lista-aberta");
            lista.classList.add("lista-fechada");
        } else {
            lista.classList.remove("lista-fechada");
            lista.classList.add("lista-aberta");
        }
    });
}

toggleLista("abrir-origem", "lista-origem");
toggleLista("abrir-pontos", "lista-pontos");
toggleLista("abrir-ingressos", "lista-ingressos");



//  Função de busca para filtrar as opções
function ativarBusca(listaId) {
    const lista = document.getElementById(listaId);
    const inputBusca = lista.querySelector(".busca input");

    inputBusca.addEventListener("input", function () {
        const texto = inputBusca.value.toLowerCase().trim();
        const opcoes = lista.querySelectorAll(".opcao");

        opcoes.forEach(opcao => {
            const nome = opcao.textContent.toLowerCase();

            if (nome.includes(texto)) {
                opcao.style.display = "flex";
            } else {
                opcao.style.display = "none";
            }
        });
    });
}

// Ativar busca nas três listas
ativarBusca("lista-origem");
ativarBusca("lista-pontos");
ativarBusca("lista-ingressos");


</script>



    <!-- status compra -->
    <div class="status-compra">

    <label class="label-status">Status da compra</label>

    <div class="status-container">

        <div class="input-status-box">
            <input type="text" id="statusInput" class="input-status" placeholder="Selecione..." readonly>
            <span id="btnClearStatus" class="btn-clear-status">×</span>
        </div>

<label class="checkbox-comissario">
    <input type="checkbox" id="chkComissario">
    <span class="checkmark"></span> Vendas de comissários
</label>

        <div class="lista-status" id="listaStatus">
            <div class="item-status">Aprovado</div>
            <div class="item-status">Em processo</div>
            <div class="item-status">Cancelado</div>
        </div>

    </div>

</div>
<style>
    .status-compra {
    margin-top: 25px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.label-status {
    font-weight: bold;
    margin-bottom: 4px;
}

.status-container {
    position: relative;
    display: flex;
    align-items: center;
    gap: 15px;
}

.input-status-box {
    position: relative;
    width: 230px;
}

.input-status {
    width: 100%;
    padding: 10px 35px 10px 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    cursor: pointer;
    background: #fff;
}

.btn-clear-status {
    position: absolute;
    right: 10px;
    top: 7px;
    font-size: 20px;
    color: #888;
    cursor: pointer;
    display: none;
}

.btn-clear-status:hover {
    color: #000;
}

.checkbox-comissario {
    display: flex;
    align-items: center;
    gap: 6px;
    cursor: pointer;
    user-select: none;
}

.checkbox-comissario input {
    display: none;
}

.checkbox-comissario .checkmark {
    width: 18px;
    height: 18px;
    border-radius: 4px;
    border: 2px solid #777;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 13px;
    color: transparent;
    transition: .2s;
}

.checkbox-comissario input:checked + .checkmark {
    background: #007bff;
    border-color: #007bff;
    color: #fff;
}

.checkbox-comissario input:checked + .checkmark::after {
    content: "✓";
}

/* Lista */
.lista-status {
    position: absolute;
    top: 45px;
    width: 230px;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
    display: none;
    z-index: 50;
}

.item-status {
    padding: 10px;
    cursor: pointer;
}

.item-status:hover {
    background: #f2f2f2;
}

</style>
<script>
    const statusInput = document.getElementById("statusInput");
const listaStatus = document.getElementById("listaStatus");
const btnClearStatus = document.getElementById("btnClearStatus");
const itensLista = document.querySelectorAll(".item-status");

// Abre a lista ao clicar no input
statusInput.addEventListener("click", () => {
    listaStatus.style.display = "block";
});

// Seleciona o item
itensLista.forEach(item => {
    item.addEventListener("click", () => {
        statusInput.value = item.textContent;
        listaStatus.style.display = "none";
        btnClearStatus.style.display = "block";
    });
});

// Limpa o input
btnClearStatus.addEventListener("click", () => {
    statusInput.value = "";
    btnClearStatus.style.display = "none";
});

// Clique fora fecha a lista
document.addEventListener("click", (e) => {
    if (!statusInput.contains(e.target) && !listaStatus.contains(e.target)) {
        listaStatus.style.display = "none";
    }
});

</script>



            <!-- Tabela -->
            <div class="status-ingressos">

                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">N° do pedido</label></div>
                    <div class="lote"><label class="titulo-campo">Data</label></div>
                    <div class="preco"><label class="titulo-campo">Comprador</label></div>
                    <div class="tipo"><label class="titulo-campo">status</label></div>
                    <div class="repassar"><label class="titulo-campo">valor a receber</label></div>
                    
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    
                    <div class="nome"><span class="valor">40028922</span></div>
                    <div class="lote"><span class="valor">22/11/2025</span></div>
                   
                    
                   
                     <div class="preco"><span class="valor">###</span></div>
                      <div class="tipo"><span class="valor tipo-cortesia">Aprovado</span></div>
                    <div class="repassar">
                        <span class="valor">R$ 120,00</i></span>
                    </div>



                    
                       
                    </div>
                </div>

            </div>

            
        </div>

</div>


<style>

.status-ingressos {
    padding: 20px;
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
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr 1fr 0.7fr 0.8fr;
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
    background: #27ae60;
    
    border-radius: 15px;
    color: #fff;
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
    .status-ingressos {
        padding: 0px;
    }
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
    </div>


</div>



</div>

</body>
</html>
