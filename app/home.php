<?php
class home{
    function index(){
        ?>
        <!DOCTYPE HTML>
        <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./css/home.css">
                <link rel="icon" href="./img/logo.png">
                <base href="http://192.168.19.19/corretora/">
                <title>Corretora</title>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            </head>
            <body>
                <div class="container">
                    <nav>
                        <img src="./img/logo.png" class="logo">
                        <ul>
                            <li><a href="#">Mercado</a></li>
                            <li><a href="#">Serviços</a></li>
                            <li><a href="#">Certificados</a></li>
                            <li><a href="#">Sobre</a></li>
                        </ul>
                        <a href="#" class="btn">PT</a>
                    </nav>
                    <div class="content">
                        <h1>COMPRE E <br>VENDA <span>CRIPTO</span></h1>
                        <p>Uma corretora de criptomoeda disponivel na web e mobile no mundo todo.</p>
                        <a href="#" class="btn">EXPLORE MAIS</a>
                    </div>
                    <div class="coin-list">

                    
                    <div class="coin">
                        <img src="./img/bitcoin.png" alt="">
                         <div>
                            <h3>$ <span id="bitcoin"></span></h3>
                            <p>Bitcoin</p>
                         </div>
                    </div>
                    <div class="coin">
                        <img src="./img/ethereum.png" alt="">
                         <div>
                            <h3>$ <span id="ethereum"></span></h3>
                            <p>Ethereum</p>
                         </div>
                    </div>
                    <div class="coin">
                        <img src="./img/dogecoin.png" alt="">
                         <div>
                            <h3>$ <span id="dogecoin"></span></h3>
                            <p>Dogecoin</p>
                         </div>
                    </div>
                    </div>
                </div>
                <script src="./js/script.js"></script>
            </body>
     
        <?php
    }
}
?>