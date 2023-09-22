<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Imperium Vastare - Entre em uma conta</title>
    </head>

<body>
    <div class="container">

        <div class="forms-container">
            <div class="signin-signup">
                <form action="config/auth.php" class="sign-in-form" method="POST">
                    <h2 class="title">Entrar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="user" placeholder="Usuário" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="senha" placeholder="Senha" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                </form>


                <form action="config/criarUser.php" class="sign-up-form" method="POST">
                    <h2 class="title">Crie Sua Nova Conta</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Usuário" name="user" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome" name="nome" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha" />
                    </div>


                    <input type="submit" class="btn" value="Criar Nova Conta" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo usuário?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Crie uma Conta
                    </button>
                </div>
                <img src="img/invest.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Já faz parte do nosso time?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Entrar
                    </button>
                </div>
                <img src="img/cofre.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>