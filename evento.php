<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
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
  <div class="Configuracoes">aqui vai uma imagem centralizada</div>

<style>
/* Container principal */
.controle-principal {

  
}
.Configuracoes {
  text-align: center;       
  font-size: 20px;          
  font-weight: bold;        
  margin-bottom: 20px;      
  color: #007bff; 
  box-shadow: 0 4px 6px -2px rgba(0,0,0,0.2);
  border-bottom: 1px solid #007bff;
  padding: 10px 0;          
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


<!-- CONTAINER PRINCIPAL DO EVENTO -->
<div class="evento">

    <!-- CAPA -->
    <div class="capa">
        <img src="img/banner.avif">
    </div>

    <!-- INFORMAÇÕES DO EVENTO -->
    <div class="info-evento">

        <!-- TÍTULO / TEXTO DO EVENTO -->
        <div class="texto-evento">
            <h1>Nome do Evento</h1>
            <p>Subtítulo ou pequeno resumo do evento.</p>
        </div>

        <!-- DATAS -->
        <div class="datas-evento">
            <p><strong>Início:</strong> 10/12/2025 às 20:00</p>
            <p><strong>Término:</strong> 12/12/2025 às 05:00</p>
        </div>

        <!-- LOCALIZAÇÃO -->
        <div class="local-evento">
            <h2>Localização</h2>

            <p><strong>Espaço:</strong> Espaço Master Hall</p>
            <p><strong>Endereço:</strong> Rua das Flores, 1200 - Bairro Centro</p>
            <p><strong>Referência:</strong> Em frente ao Shopping Central</p>
            <p><strong>Cidade:</strong> Curitiba - PR</p>
            <p><strong>CEP:</strong> 80000-000</p>
        </div>

        <!-- DESCRIÇÃO COMPLETA -->
        <div class="descricao">
            <h2>Descrição do Evento</h2>

            <p>
                Aqui será exibida toda a descrição criada pelo produtor,
                contendo formatação, imagens, vídeos e detalhes completos.
            </p>
        </div>

    </div>
</div>

<!-- AVISO IMPORTANTE -->
<div class="atencao">
    <h1>Atenção</h1>
    <p>
        O produtor é o único responsável pela devolução de valores referentes ao(s) ingresso(s).
        Em caso de arrependimento da compra, o reembolso do valor do ingresso somente será efetuado
        caso a solicitação seja feita no prazo de até 7 dias a contar da data da compra e desde que
        realizado o pedido de devolução com no máximo 48h de antecedência do horário de início do evento.
        Situações fora do descrito estarão condicionadas à decisão dos produtores do evento.
    </p>
</div>


<style>
    .evento {
    width: 100%;
    max-width: 900px;
    margin: 40px auto;
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 14px rgba(0,0,0,0.08);
    font-family: Arial, sans-serif;
}

/* CAPA */
.capa img {
    width: 100%;
    border-radius: 12px;
    object-fit: cover;
}

/* INFORMAÇÕES */
.info-evento {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.texto-evento h1 {
    font-size: 28px;
    margin-bottom: 5px;
}

/* DATAS */
.datas-evento p {
    margin: 3px 0;
}

/* LOCAL */
.local-evento h2,
.descricao h2 {
    margin-bottom: 5px;
    font-size: 20px;
    color: #007bff;
}

.local-evento p {
    margin: 4px 0;
}

/* DESCRIÇÃO */
.descricao p {
    line-height: 1.6;
}

/* AVISO */
.atencao {
    max-width: 900px;
    margin: 30px auto;
    background: #fff8e1;
    padding: 20px;
    border-left: 5px solid #ffa000;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.atencao h1 {
    color: #d17b00;
    margin-bottom: 10px;
}

</style>
</div>




</body>
</html>