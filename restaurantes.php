<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <!-- BBootstrap Icons via CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Restaurantes</title>
</head>
<body >
<?php include("header.php") ?>
<main class="restaurantes">
    <div class="container">
        <div class="row">
                 <div class="col-12">
                    <h1>Restaurantes</h1>
                </div>
        </div>  




        <div class="row">
                 <div class="col-sm-7 col-m-7 col-12">
                   <section class="sectionrestaurantes">
                        <h2>Cantina Tia Lina</h2>
                        <p> A cantina é referência em gastronomia italiana na região. Com efeito, o prato principal é o Rondelli quatro queijos com alcachofra (existe opção sem a flor), acompanhado de frango desossado e recheado. Para harmonizar, a adega local possui diversos vinhos nacionais e importados. <a href='tialina.php'>Saiba mais...</a>
                    </p>
                    </section>
                </div>
                <div class="col-sm-4 col-m-4 col-12">
                <img class="img-fluid" src="img/restaurantes1.jpg">
                </div>
       </div>
    
    
       <div class="row">
                        <div class="col-sm-4 col-m-4 col-12">
                            <img class="img-fluid" src="img/restaurantes4.jpg">
                        </div>
                    <div class="col-sm-7 col-m-7 col-12">
                 <section class="sectionrestaurantes">
                        <h2>Vale do Vinho</h2>
                        <p>  O Restaurante Vale do Vinho fica na Estrada do Vinho e é o restaurante da Vinícola Góes. Possui um cardápio bem variado, em sua maioria com pratos italianos e brasileiros, além de um rodízio de pizzas.<a href='valedovinho.php'>Saiba mais...</a>

                        </p>
                    </section>
                </div>
                
      </div>


      <div class="row">
                    <div class="col-sm-6 col-m-6 col-12">
                 <section class="sectionrestaurantes">
                        <h2> Vila don Patto</h2>
                        <p>  A Vila don Patto é o maior complexo gastronômico de São Roque. Uma área verde com uma espetacular vista para as montanhas, a menos de uma hora de São Paulo. A Vila possui diversos ambientes <a href='donpatto.php'>Saiba mais...</a>

                        </p>
                    </section>
                </div>
                <div class="col-sm-6 col-m-6 col-12">
                <img class="img-fluid" src="img/restaurantes2.jpg">
                </div>
                
      </div>

      <div class="row">

                        <div class="col-sm-4 col-m-4 col-12">
                            <img class="img-fluid" src="img/restaurantes3.jpg">
                        </div>

                    <div class="col-sm-7 col-m-7 col-12">
                        <section class="sectionrestaurantes">
                        <h2>Quinta do Olivardo</h2>
                        <p>Nasceu como um misto de restaurante e adega em São Roque, cidade próxima à capital conhecida pela produção de vinhos. No menu de linha clássica podem ser apreciados pratos tradicionais portugueses.
                        <a href='olivardo.php'>Saiba mais...</a>
                        </p>
                        </section>
                </div>
                
                
      </div>


    </div>
    
    
    
    

</main>
<?php include("footer.php") ?>
</body>
</html>