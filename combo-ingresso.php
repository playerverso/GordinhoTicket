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
    margin-left: 10px;
    padding: 50px 0px;
    width: 95%;
  }


}
</style>



            <!-- Tabela -->
            <div class="status-ingressos">
                <div class="titulo-combo">
                    <h2>Combo de Ingressos</h2>
                </div>

                <div class="barra-pesquisa">
                    <input type="text" class="input-pesquisa" placeholder="Pesquisar...">
                    <button class="btn-pesquisar">
                        <i class="bi bi-search"></i>
                    </button>
                   
                </div>
                <div class="botao-combo">
                   <a href="criar-combo.php"> <button class="btn-combo">Combo de Ingressos</button></a>
                </div>
                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    
                    <div class="nome"><label class="titulo-campo">ID</label></div>
                    <div class="lote"><label class="titulo-campo">Nome</label></div>
                    <div class="preco"><label class="titulo-campo">Tipo</label></div>
                    <div class="tipo"><label class="titulo-campo">Ingressos</label></div>
                    <div class="repassar"><label class="titulo-campo">Preço</label></div>
                    <div class="visivel"><label class="titulo-campo">Ativo</label></div>
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    
                    <div class="nome"><span class="valor">40028922</span></div>
                    <div class="lote"><span class="valor">1°</span></div>
                   
                    
                    <div class="tipo"><span class="valor tipo-cortesia">Cortesia</span></div>
                     <div class="preco"><span class="valor">###</span></div>
                    <div class="repassar">
                        <span class="valor">R$ 120,00</i></span>
                    </div>

                    <div class="visivel">
                        <span class="valor"><i class="bi bi-check-circle-fill icon-aprovar"></i></span>
                    </div>

                    
                       
                    </div>
                </div>

            </div>

            
        </div>

</div>


<style>
    .status-ingressos {
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

/* Container geral que envolve barra de pesquisa + botão */
.area-pesquisa {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-end; /* empurra o botão para a direita */
}

/* Barra de pesquisa */
.barra-pesquisa {
    display: flex;
    align-items: center;
    gap: 8px;
    width: 100%;
    max-width: 400px;
}

/* Input */
.input-pesquisa {
    flex: 1;
    padding: 10px 14px;
    font-size: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    transition: .2s;
}

.input-pesquisa:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0,123,255,0.15);
}

/* Botão de pesquisa */
.btn-pesquisar {
    padding: 10px 14px;
    background: #007bff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    color: #fff;
    font-size: 17px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .2s;
}

.btn-pesquisar:hover {
    background: #0069d9;
}

/* Botão Combo — alinhado à direita */
./* Container que empurra o botão para a direita */
.botao-combo {
    width: 100%;
    display: flex;
    justify-content: flex-end; /* alinha à direita */
    margin-top: 15px;
}

/* Botão */
.btn-combo {
    background: #007bff;
    color: #fff;
    padding: 12px 18px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: .3s;
}

.btn-combo:hover {
    background: #0064cc;
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

    .btn-combo {
        width: 100%;
        text-align: center;
        padding: 14px;
        font-size: 17px;
        margin-top: 12px;
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