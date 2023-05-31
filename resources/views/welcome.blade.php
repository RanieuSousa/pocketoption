<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trade</title>

<style>
    body {
        background-color: rgb(31, 31, 31) ;
    }

    .card {
        border-radius: 5px;
        padding: 7px 11px;
    }
</style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    </head>
    <body style="background-color: black">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h1 style="text-align:center"><b>ESTRATEGIA POCKETOPTION</b></h1>
            <div class="form-floating">
                <div class="row">
                    @foreach($ativos as $ativo)
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$ativo->nome}}" id="checkbox{{$ativo->id}}">
                                <label class="form-check-label" for="checkbox{{$ativo->id}}">
                                    {{$ativo->nome}}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            @foreach($ativos as $ativo)
                <div class="col-lg-2 col-md-3 col-6 ativo-card" data-ativo="{{$ativo->nome}}" style="margin-bottom:10px;">
                    <div class="card card-default">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright">
                                <a href="https://br.tradingview.com/" rel="noopener nofollow" target="_blank">
                                    <span class="blue-text">Track all markets on TradingView</span>
                                </a>
                            </div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                                {
                                    "interval": "15m",
                                    "width": "280",
                                    "isTransparent": false,
                                    "height": "440",
                                    "symbol": "{{$ativo->tipo}}:{{$ativo->nome}}",
                                    "showIntervalTabs": true,
                                    "locale": "in",
                                    "colorTheme": "light"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h5 style="text-align:center">Developer Ranieu Sousa</h5>
        </div>
    </nav>
    <script>
        // Função para filtrar os cards com base nos checkboxes selecionados
        function filtrarCards() {
            // Obter todos os checkboxes selecionados
            const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');

            // Obter todos os cards de ativos
            const cards = document.querySelectorAll('.ativo-card');

            // Exibir ou ocultar os cards com base nos checkboxes selecionados
            cards.forEach(card => {
                const ativo = card.getAttribute('data-ativo');
                const ativoSelecionado = Array.from(checkboxes).some(checkbox => checkbox.value === ativo);

                if (ativoSelecionado) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Adicionar evento de clique aos checkboxes
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('click', filtrarCards);
        });
    </script>



    </body>


</html>
