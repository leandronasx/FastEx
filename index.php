<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastEx - Transporte Urbano</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header row">
        <div class="conteiner">
            <div class="logo">
                <img src="img/logo.jpg" alt="logo FastEx">
            </div>
            <div class="titulo">
                <h1>FASTEX</h1>
            </div>
        </div>
    </header>

    <section class="pitch row">
        <div class="conteiner">
            <p>
                Somos a FastEx, um MarketPlace de transporte urbano de mercadorias com motoboys da própria região para atuar 
                na retira de encomendas em CD's e entregar a domicílio. Vamos atuar em áreas de risco, onde o serviços das transportadoras
                convencionas não chegam. 
            </p>
        </div>
    </section>

    <section class="ola row">
        <div class="conteiner">
            <p>
                ÓLA!
            </p>
        </div>
    </section>

    <section class="telas row">
        <div class="conteiner">
            <article class="telas-col">
                <div class="image">
                    <img src="img/tela1.png" alt="">
                </div>
                <div class="paragrafo">
                    <p>
    
                    </p>
                </div>
            </article>
                
            <article class="telas-col">
                <div class="image">
                    <img src="img/tela2.png" alt="">
                </div>
                <div class="paragrafo">
                    <p>
    
                    </p>
                </div>
            </article>
        </div>
    </section>

    <section class="contato row">
        <div class="conteiner">
            <p id="paragrafo">
                Quer receber em primeira mão as informações do lançamento da FastEx. Deixe seu melhor email, e irá receber quando lançarmos 
                nossos serviços.
            </p>

            <?php
            include __DIR__. "\source\Classes\Email.php";

            if(isset($_POST["name"]) && isset($_POST["email-to"])){
                $nome = $_POST["name"];
                $email = $_POST["email-to"];
                
             
                try {
                    $submitEmail =new Email($nome, $email, "Mensagem do site FastEx");
                    $submitEmail->submit();
                    echo "<p class='trigger accept'>Enviado com sucesso!</p>";
                } catch (\Throwable $th) {
                    echo "<p class='trigger'>Error ao enviar!</p>";
                }
            }else{
                
            ?>
            <form action="index.php" class="form" method="POST">
                <div id="nome">
                    <label for="name">Nome</label>
                    <input type="text" name="name" placeholder="Fulano de fulano">
                </div>

                <div id="email">
                    <label for="email-to">Email</label>
                    <input type="email" name="email-to" placeholder="exemplo@exemplo.com">
                </div>

                <div id="entrar">
                    <input type="submit" value="QUERO RECEBER">
                </div>
            </form>
            <?php
                }
            ?>
        </div>
    </section>

    <footer class="footer row">
    </footer>
</body>
</html>