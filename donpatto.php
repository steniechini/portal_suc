<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/donpatto.css">
    <!-- BBootstrap Icons via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Vila Don Patto</title>
</head>

<body class="villadonpatto">
    <?php include("header.php") ?>
    <main class="conteudo">
        <section class="conteudo-principal">
            <div class="conteudo-principal-escrito">
                <h1 class="conteudo-principal-titulo">Vila Don Patto</h1>
                <h2 class="conteudo-principal-subtitulo">Conheça um dos restaurentes mais famosos do Roteiro do Vinho!</h2>
                <h3 class="conteudo-principal-texto">A Vila don Patto é o maior complexo gastronômico de São Roque. Uma área verde com uma espetacular vista para as montanhas, a menos de uma hora de São Paulo. A Vila possui diversos ambientes. </h3>
                <button class="conteudo-principal-botao" onclick="window.location.href='#conteudo-secundario'">Saber mais</button>
            </div>
            <img class="conteudo-principal-imagem" src="img/donpatto/plate-vegetable-stew-served-with-white-wine-bread-_1_.webp" alt="imagem de comida">
        </section>

        <section class="conteudo-secundario" id="conteudo-secundario">
            <h1 class="conteudo-secundario-titulo">Conheça as culinárias</h1>
            <img class="conteudo-secundario-imagem-portuguesa" src="img/donpatto/portuguesa.png" alt="prato de comida portuguesa">
            <h1 class="conteudo-secundario-subtitulo">Culinária Portuguesa</h1>
            <p class="conteudo-secundario-texto">A culinária portuguesa é uma fusão de sabores e influências, refletindo a rica história do país e sua proximidade com o mar. Com uma forte ênfase nos frutos do mar frescos, a comida portuguesa é conhecida por seus pratos deliciosos e reconfortantes. Desde os famosos pratos de bacalhau, como o bacalhau à Brás e o bacalhau à Gomes de Sá, até as saborosas sopas, como a caldeirada e a sopa de peixe, a culinária portuguesa é uma celebração da abundância do mar e da terra. Os sabores intensos dos azeites, dos temperos e das ervas dão vida aos pratos, criando uma experiência gastronômica única e inesquecível.</p>
            <img class="conteudo-secundario-imagem-italiana" src="img/donpatto/comidas-tipicas-da-italia.jpg" alt="prato de comida portuguesa">
            <h1 class="conteudo-secundario-subtitulo">Culinária Italiana</h1>
            <p class="conteudo-secundario-texto">A culinária italiana é uma das mais influentes e amadas em todo o mundo, conhecida por sua simplicidade, ingredientes frescos e sabores robustos. Com uma rica variedade de pratos regionais, a comida italiana é uma celebração da diversidade de suas regiões. Desde as tradicionais massas como o espaguete e a lasanha, até os deliciosos risotos e pizzas, cada prato é uma verdadeira obra-prima que reflete a paixão e a tradição culinária do país. Os ingredientes frescos, como o azeite de oliva, o tomate, as ervas aromáticas e os queijos, são a base da cozinha italiana, resultando em refeições que são simplesmente irresistíveis.</p>
        </section>

        <section class="galeria-de-fotos">
            <h1 class="conteudo-secundario-titulo">Conheça nosso espaço</h1>
            <div class="galeria-container">
                <div class="imagem"><img src="img/donpatto/adega.webp" alt="Foto 1"></div>
                <div class="imagem"><img src="img/donpatto/guarda-chuvas.jpg" alt="Foto 2"></div>
                <div class="imagem"><img src="img/donpatto/rede.jpg" alt="Foto 3"></div>
                <div class="imagem"><img src="img/donpatto/restaurante1.jpg" alt="Foto 4"></div>
                <div class="imagem"><img src="img/donpatto/restaurante2.jpg" alt="Foto 5"></div>
                <div class="imagem"><img src="img/donpatto/casinha.jpg" alt="Foto 6"></div>
                <div class="imagem"><img src="img/donpatto/paisagem.jpg" alt="Foto 7"></div>
                <div class="imagem"><img src="img/donpatto/lounge.jpg" alt="Foto 8"></div>
                <div class="imagem"><img src="img/donpatto/lago.jpg" alt="Foto 9"></div>
            </div>

        </section>
    </main>
    <?php include("footer.php") ?>
</body>

</html>