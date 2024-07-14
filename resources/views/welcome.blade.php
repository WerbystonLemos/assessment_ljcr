<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Problema lógico</title>

    <link rel="stylesheet" href={{ asset('./css/welcome.css') }}>
    <script src={{ asset('./js/welcome.js') }}></script>
</head>
<body>
    <div id="cotainer">
        <div id="main">

            <div id="contianerTop">
                <p>
                    Existem X casas à venda. Juntas essas casas valem I reais. Você tem um orçamento de B reais para gastar. Qual o maior número de casas que você pode comprar com o orçamento?
                </p>
            </div>

            <div id="contianerBottom">

                <div id="form_calculo">
                    <div class="form-group">
                        <label for="nr_casas">Nº de casas</label><br/>
                        <input id="nr_casas" type="number" min="0" placeholder="Qual a quantidade de casas disponíveis para comprar?">
                    </div>
                    <div class="form-group">
                        <label for="vlr_total_casas">Valor das casa</label><br/>
                        <input id="vlr_total_casas" type="number" min="0" placeholder="Qual o valor total da soma de todas as casas?">
                    </div>
                    <div class="form-group">
                        <label for="vlr_orcamento">Vlr disponível</label><br/>
                        <input id="vlr_orcamento" type="number" min="0" placeholder="Quanto tens disponível para comprar?">
                    </div>
                    <div class="form-group">
                        <input id="btn_calcular" type="button" value="Calcular" onclick="calulaQuantidadeAComprar()">
                    </div>
                </div>

                <div id="form_resultado">
                    <div class="form-group">
                        <label for="nr_casas_possiveis">Nº de casas possíveis</label><br/>
                        <input id="nr_casas_possiveis" type="number" disabled>
                    </div>
                    <div class="form-group">
                        <input id="btn_calcular" type="button" value="Reiniciar" onclick="reiniciar()">
                    </div>
                    <div class="form-group">
                        <p id="nota_resultado">*É importante notar que o valor correto é <span id="valor_real"></span> mas, foi arredondado para baixo.</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</body>
</html>
