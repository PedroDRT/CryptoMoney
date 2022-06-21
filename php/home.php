<?php
session_start();
include('verifica_login.php');
include('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="shortcut icon" href="../assets/icons/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Money | Home</title>
</head>

<body>
    <header>
        <div style="background-color: #3e1f47" class="navigation-wrap start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">

                            <a class="nav-link"><img src="../assets/images/bitcoin.png" alt="">Crypto Money</a>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Início</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#funciona">Como funciona</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#moeda">Moedas</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link"><i class="fas fa-user-circle" style="padding-right: 5px;"></i></i><?php echo ucwords($_SESSION['usuario']); ?></a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="principal">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../assets/images/main2.png" alt="" class="w-100" />
                    </div>
                    <div class="col-md-6">

                        <div class="row align-items-center h-100">
                            <div class="principal">
                                <h1 class="titulo-principal">Sua plataforma para comprar <b class="orage">Bitcoin e outras criptomoedas</b> pelo melhor preço!</h1>
                                <p class="lead">Compre e venda <b class="orage">Bitcoin, Ethereum e outras criptomoedas</b> sempre pelo melhor valor através do nosso marketplace de exchanges.</p>
                                <a><button class="button-menu">Comprar</button></a>
                            </div>
                        </div>

                    </div>

                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6 order-md-6">

                        <img src="../assets/images/woman-holding-physical-ethereum-coin-cryptocurrency-her-hand.png" alt="" class="w-100" />
                    </div>
                    <div class="col-md-6 order-md-1">

                        <div class="row align-items-center h-100">
                            <div class="principal">
                                <h1 class="titulo-principal">Compre e venda <b class="orage">criptomoedas</b> em minutos</h1>
                                <p class="lead">Depósitos via PIX ficam disponíveis em até 10 minutos em sua conta e podem ser realizados a qualquer dia e horário, inclusive finais de semana.</p>
                                <a><button class="button-menu">Comprar</button></a>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

        <hr class="hr-1" id="moeda">

        <section class="principal">
            <div class="container">
            <h1 class="titulo-principal">Compre e Venda <b class="orage">Criptomoedas </b>em minutos</h1>
                <p class="lead">Junte-se à maior corretora de criptomoedas do Brasil</p>
                <a><button class="button-menu">Comprar</button></a>
                <br>
                <br>
                <br>
                <div class="tradingview-widget-container">
                    <div id="tradingview_7132f"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-BTCUSDT/" rel="noopener" target="_blank"></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget({
                            "width": 980,
                            "height": 610,
                            "symbol": "BINANCE:BTCUSDT",
                            "interval": "D",
                            "timezone": "Etc/UTC",
                            "theme": "Light",
                            "style": "1",
                            "locale": "en",
                            "toolbar_bg": "#f1f3f6",
                            "enable_publishing": false,
                            "withdateranges": true,
                            "hide_side_toolbar": false,
                            "allow_symbol_change": true,
                            "details": true,
                            "hotlist": true,
                            "calendar": true,
                            "news": [
                                "headlines"
                            ],
                            "studies": [
                                "Volume@tv-basicstudies"
                            ],
                            "no_referral_id": true,
                            "container_id": "tradingview_7132f"
                        });
                    </script>
                </div>
            </div>
        </section>


        <section class="principal">
            <div class="containerr">
                <div class="right">
                    <div class="crypto btc">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="bitcoin" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto eth">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="ethereum" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto ltc">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="litecoin" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto xrp">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="xrp" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                </div>
                <div class="center">
                    <link rel="stylesheet" href="main.css">
                    <div class="crypto ada">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="cardano" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto eth">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="ethereum" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto ltc">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="litecoin" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto xrp">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="xrp" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                </div>
                <div class="center">
                    <link rel="stylesheet" href="main.css">
                    <div class="crypto ada">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="cardano" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto eth">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="ethereum" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto ltc">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="litecoin" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                    <div class="crypto xrp">
                        <crypto-converter-widget live shadow symbol fiat="united-states-dollar" crypto="xrp" amount="1" border-radius="0.60rem" background-color="#383a59" decimal-places="2"><a href="https://cr.today/" rel="noopener">Converter Widget</a></crypto-converter-widget>
                        <script src="https://cdn.jsdelivr.net/gh/dejurin/crypto-converter-widget/dist/latest.min.js" async></script>
                    </div>
                </div>
            </div>
        </section>
        <hr class="hr-1">

        <section>
            <div class="container">
                <div class="principal">
                    <h1 class="titulo-principal">Comece já sua jornada na <b class="orage">maior corretora do Brasil</b></h1>

                    <ul class="produtos">
                        <li>
                            <img src="../assets/images/user.png" alt="Cadastro" style="height:120px">
                            <h5 class="produto-preco">Abra sua conta em instantes</h5>
                            <p class="produto-descricao">Insira seu email, crie uma senha forte e adicione proteção à sua conta. Pronto!Em minutos você tem uma conta na CryptoMoney.</p>
                            <br>
                        </li>
                        <li>
                            <img src="../assets/images/banco.png" alt="Deposito" style="height:80% !important">
                            <h5 class="produto-preco">Desopiste reais ou suas criptomoedas</h5>
                            <p class="produto-descricao">Faça um depósito direto via transferÇencia bancária e outros meios de pagamento, ou já comece transferindo suas criptomoedas.</p>
                            <br>
                        </li>
                        <li>
                            <img src="../assets/images/trade.png" alt="Trade" style="height:120px">
                            <h5 class="produto-preco">Comece a fazer trades com as menores taxas</h5>
                            <p class="produto-descricao">A CryptoMoney tem entrea as melhores taxas do mercado. Faça ainda seus trades com 25% de desconto usando BNB!</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <hr class="hr-1">
        <section class="mapa">
            <div class="container">
                <div class="principal">
                    <h1 class="titulo-principal">Nosso  <b class="orage">estabelecimento</b></h1>
                    <p class="lead">Nosso estabelecimento está localizado no <b class="orage">coração</b> da cidade!<p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.6914877522686!2d-46.88516518502924!3d-23.181457484872766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf26f327da8701%3A0x14d9db18c6f7fd60!2sFATEC%20-%20Jundiai!5e0!3m2!1spt-BR!2sbr!4v1635394907434!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

    </main>
    <footer class="container-fluid sec-footer">
    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511942148319" target="_blank"><img src="../assets/icons/icons8-whatsapp-64.png" style="height: 65px; position:fixed; bottom: 25px; right: 25px; z-index:99999;" data-selector="img"></a>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card desc-box">
                        <div class="card-body">
                            <div class="card-title">Sobre</div>
                            <div class="card-text">
                                <span>A ideia era simples: criar uma plataforma amigável, onde os usuários com apenas um clique pudessem conectar e negociar em várias exchanges, brasileiras ou internacionais, poupando o trabalho de se cadastrar, validar documento e realizar o depósito em diferentes plataformas</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card desc-box">
                        <div class="card-body">
                            <div class="card-title">Contatos</div>
                            <div class="card-text">
                                <div class="row">
                                    <div class="col">
                                        <i class="fas fa-phone ml-3"></i>
                                        <span> 9.9525-0771 (11)</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fas fa-map-marker ml-3"></i>
                                        <span>Jundiaí - SP</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <i class="fas fa-envelope-open ml-3"></i>
                                        <span>cryptomoney@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col text-center">
                    <img src="../assets/images/bitcoin_footer.png" alt="logotipo" class="mb-3">
                    <br class="clearfix">
                    <a href="https://www.instagram.com" target="_blank" class="snip1472"><i class="fab fa-instagram"></i></a>
                    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5511942148319" class="snip1472"><i class="fab fa-whatsapp"></i></a>
                    <a href="https://www.facebook.com" target="_blank" class="snip1472"><i class="fab fa-facebook-f"></i></a>
                    <div class="footer-copyright text-center py-3"><a>Pedro Dutra & Guilherme Lopes &copy;</a></div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>