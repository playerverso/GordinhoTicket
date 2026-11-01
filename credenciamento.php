
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
  padding: 30px 0px;
}

/* Responsivo */
@media (max-width: 768px) {
  .controle-principal {
    margin-left: 0;
    padding: 30px 10px;
    width: 100%;
  }

}
</style>
            <!-- Tabela -->
            <div class="status-ingressos">
                <div class="titulo-combo">
                    <h2>Credenciamento</h2>
                </div>
                <div class="nova-categoria">
                    <a href="credenciamento-nova-categoria.php"><button class="btn-nova-categoria">Nova categoria</button></a>
                </div>

                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">Nome da Categoria</label></div>
                    <div class="lote"><label class="titulo-campo">Quantidade de Convidados</label></div>
                    <div class="preco"><label class="titulo-campo">Quantidade de pessoas</label></div>
                    <div class="tipo"><label class="titulo-campo">Data da ultima importação</label></div>

                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    
                    <div class="nome"><span class="valor">Gordinho Eventos</span></div>
                    <div class="lote"><span class="valor">50 </span></div>
                   
                    
                    <div class="tipo"><span class="valor tipo-cortesia">48 </span></div>
                     <div class="preco"><span class="valor">25/02/2025</span></div>
                                           
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
.nova-categoria {
    width: 100%;
    display: flex;
    justify-content: flex-start; /* botão alinhado à esquerda */
    margin: 20px 0;
}

.btn-nova-categoria {
    padding: 12px 25px;
    background: #007bff;
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 15px;
    font-weight: 600;
}

.btn-nova-categoria:hover {
    background: #0069d9;
}


.titulo-combo {
    width: 100%;
    text-align: left; /* Alinha tudo à esquerda */
    
}

.titulo-combo h2 {
    font-size: 22px;
    font-weight: 700;
    color: #333;
}

/* TITULOS */
.linha-titulos {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr  ;
    padding: 16px;
    background: #f3f3f3;
    border-radius: 12px;
    font-weight: bold;
}

/* LINHA VALORES */
.item-ingresso {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr 0.8fr 0.7fr;
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
    .nova-categoria {
        justify-content: center; /* centraliza o botão no mobile */
        margin: 15px 0;
    }

    .btn-nova-categoria {
        width: 350px;            /* ocupa toda a largura */
        padding: 14px;
        font-size: 16px;
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