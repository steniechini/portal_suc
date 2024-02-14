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
    <title>Contato</title>
</head>

<body class="contato">
    <?php include("header.php") ?>
    <div class="half-background">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                    <h1 class="h1_contato">Contato</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-7 col-m-7 col-12">
                        <section class="section_contato">
                         <form action="https://api.web3forms.com/submit" method="POST" class="form">
                                <div class="form-group">
                                <input type="hidden" name="access_key" value="86c70bd8-2e9c-4957-b018-5152d86abfb8">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        placeholder="Digite seu nome">
                                </div>

                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Digite seu e-mail">
                                </div>

                                <div class="form-group">
                                    <label for="mensagem">Mensagem:</label>
                                    <textarea class="form-control" id="mensagem" name="mensagem" rows="4"
                                        placeholder="Digite sua mensagem"></textarea>
                                </div>

					   <div class="form-check">
                                     <input type="checkbox" class="form-check-input" id="concordo" required>
                                         <label class="form-check" for="concordo">Eu concordo com os Termos de Uso</label>
                                         <a class="link-termos" href="termosdeuso.php">Termos de Uso</a>
                                        </div>

                                <button type="submit" class="btn btn-enviar">Enviar</button>
                            </form>
                        </section>
                    </div>
                    <div class="col-sm-4 col-m-4 col-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.5710163715644!2d-47.12638532541573!3d-23.547926878809044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0d7fe17dd38b%3A0x83739b8d9bc97461!2sRoteiro%20do%20Vinho%20-%20S%C3%A3o%20Roque!5e0!3m2!1spt-BR!2sbr!4v1704404837842!5m2!1spt-BR!2sbr"
                            width="100%" height="300" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include("footer.php") ?>
</body>

</html>