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

   <div class="status-ingressos">
                <div class="titulo-combo">
                    <h2>Local de Entrada</h2>
                </div>
                    <div class="btn-data">
                        <a href="local-entrada-novo.php" class="botao-a">Nova Entrada</a>
                    </div>
                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="lote"><label class="titulo-campo">Nome</label></div>
                    <div class="tipo"><label class="titulo-campo">Ingressos</label></div>
                
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    
                    <div class="nome"><span class="valor">Jubscreibson</span></div>
                    <div class="tipo"><span class="valor tipo-cortesia">Cortesia</span></div>
                 


                    
                       
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

.btn-data {
    width: 100%;
    text-align: left;
    margin-bottom: 5px;
}

.botao-a {
    text-decoration: none;
    padding: 10px 15px;
    background: #007bff;
    border-radius: 8px;
    color: #fff;
    font-weight: bold;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    transition: 0.25s;
}

.botao-a:hover {
    background: #0069d9;
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

    .btn-data {
        text-align: left;
    }

    .botao-a {
        font-size: 15px;
        padding: 9px 14px;
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
