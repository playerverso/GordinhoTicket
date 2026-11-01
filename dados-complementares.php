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
    padding: 50px 0px;
    width: 100%;
  }


}

</style>


<div class="conteudoAba">
    <div class="padrao">   
        <div class="titulo-plus">
    <h1>Dados Complementares</h1>
    <style>

.titulo-plus {
    width: 100%;
    padding: 20px 0;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    border-bottom: 2px solid #e5e5e5;
}

.titulo-plus h1 {
    font-size: 26px;
    font-weight: 700;
    color: #333;
    margin: 0;
}



@media (max-width: 768px) {

    .titulo-plus {
        padding: 16px 0;
        margin-bottom: 16px;
    }

    .titulo-plus h1 {
        font-size: 22px;
        margin: 0 15px ;
    }
}

    </style>
</div>

<style>

/* ============================
   PADRÃO
============================ */
.padrao {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

@media (max-width: 768px) {

    /* PADRÃO */
    .padrao {
        gap: 16px;
    }


}

</style>
<div class="btn-dados-comp">
    <a href="criar-dados-comp.php"><button id="btnDadosComp">Dados complementares</button></a>
</div>
<style>
    .btn-dados-comp button {
    background: #007bff;
    color: #fff;
    padding: 12px 22px;
    border: none;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.2s;
}

.btn-dados-comp button:hover {
    background: #0069d9;
}

</style>
            <!-- Tabela -->
            <div class="status-ingressos">

                <!-- ===== TÍTULOS ===== -->
                <div class="linha-titulos">
                    <div class="nome"><label class="titulo-campo">Ordem</label></div>
                    <div class="lote"><label class="titulo-campo">Título</label></div>
                    <div class="preco"><label class="titulo-campo">Tipo</label></div>
                    <div class="tipo"><label class="titulo-campo">Obrigatorio</label></div>
                    <div class="visivel"><label class="titulo-campo">Visível</label></div>
                </div>

                <!-- ===== VALORES ===== -->
                <div class="item-ingresso">
                    <div class="nome"><span class="valor">1</span></div>
                    <div class="lote"><span class="valor">Data</span></div>
                    <div class="tipo"><span class="valor tipo-cortesia">texto</span></div>                                
                    <div class="repassar"><span class="valor"><i class="bi bi-check-circle-fill icon-aprovar"></i></span></div>
                    <div class="visivel"><span class="valor"><i class="bi bi-check-circle-fill icon-aprovar"></i></span></div>
                    <div class="acoes"><button class="btn-desabilitar" type="button" aria-pressed="false">Desabilitar</button>
                    <!-- outros botões que você já usa -->
                    <a href="dados-complementares-editar.php"><button class="btn-editar" type="button" title="Editar"data-tooltip="Editar"><i class="bi bi-pencil-square"></i></button></a>
                    <button class="btn-excluir" type="button" title="Excluir"><i class="bi bi-trash-fill"></i></button>
                    </div>

                    
                       
                    </div>
                </div>

            </div>

        </div>

</div>

<script>
document.querySelectorAll('.btn-desabilitar').forEach(btn => {
  btn.addEventListener('click', () => {
    const row = btn.closest('.item-ingresso');
    if (!row) return;

    // ícone em .repassar (alvo original)
    const repassarIcon = row.querySelector('.repassar .status-icone i');
    // ícone em .visivel (o que você pediu agora)
    const visivelIcon = row.querySelector('.visivel i');

    // helper: alterna um ícone check <-> x e classes de cor
    const toggleIcon = (el) => {
      if (!el) return;
      if (el.classList.contains('bi-check-circle-fill')) {
        el.classList.remove('bi-check-circle-fill', 'icon-aprovar', 'ativo');
        el.classList.add('bi-x-circle-fill', 'icon-reprovar');
      } else {
        el.classList.remove('bi-x-circle-fill', 'icon-reprovar');
        el.classList.add('bi-check-circle-fill', 'icon-aprovar', 'ativo');
      }
    };

    toggleIcon(repassarIcon);
    toggleIcon(visivelIcon);

    // alternar texto do botão (opcional; remove se quiser sempre "Desabilitar")
    const isNowDisabled = btn.getAttribute('aria-pressed') === 'false' || btn.getAttribute('aria-pressed') === null;
    if (isNowDisabled) {
      btn.textContent = 'Habilitar';
      btn.setAttribute('aria-pressed', 'true');
    } else {
      btn.textContent = 'Desabilitar';
      btn.setAttribute('aria-pressed', 'false');
    }
  });
});
</script>


<style>
    .status-ingressos {
    display: flex;
    flex-direction: column;
    gap: 14px;
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

/* ===== CONTAINER DOS BOTÕES ===== */
.acoes {
    display: flex;
    align-items: center;
    gap: 10px;
}


/* ===== BOTÃO DESABILITAR ===== */
.btn-desabilitar {
    background: #007bff;
    color: #fff;
    padding: 6px 14px;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.2s;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.btn-desabilitar:hover {
    background: #0069d9;
}


/* ===== BOTÃO EDITAR ===== */
.btn-editar {
   
    border: none;
    padding: 6px 10px;
    color: #000;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
    font-size: 14px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.08);
}

.btn-editar:hover {
    background: #ccc;
}


/* ===== BOTÃO EXCLUIR ===== */
.btn-excluir {
 
    border: none;
    padding: 6px 10px;
    color: #dc3545;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.2s;
    font-size: 14px;
  
}

.btn-excluir:hover {
    background: #dc3545;
    color: #fff;
}


/* ===== ÍCONES ===== */
.btn-editar i,
.btn-excluir i {
    font-size: 16px;
}

.icon-aprovar { color: #28a745; }   /* verde */
.icon-reprovar { color: #dc3545; }  /* vermelho */


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

    @media (max-width: 768px) {
    .acoes {
        gap: 6px;
    }

    .btn-desabilitar,
    .btn-editar,
    .btn-excluir {
        padding: 5px 10px;
        font-size: 13px;
    }

    .btn-editar i,
    .btn-excluir i {
        font-size: 15px;
    }
}

}
</style>






</div>

</div>


</div>

</body>
</html>