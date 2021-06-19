<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\assets\css\style-login.css">
    <script src="https://kit.fontawesome.com/acfd17d0b6.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-element">
                <h2 class="title">criar conta</h2>
                <div class="social-media">
                    <ul class="social-media-list">
                        <a href="#">
                            <li class="logo-social-media">
                                <i class="fab fa-facebook">
                                </i>
                            </li>
                            
                        </a>
                        <a href="#">
                            <li class="logo-social-media">
                                <i class="fab fa-google-plus-g">
                                </i>
                            </li>
                        </a>
                        <a href="#">
                            <li class="logo-social-media">
                                <i class="fab fa-linkedin">
                                </i>
                            </li>
                        </a>
                    </ul>
                </div>
                <p class="description">ou utilize seu email para o registro</p>
                <form action="register.php" class="form">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="password" name="password" id="password" placeholder="Password">
                <button class="btn btn-register">inscrever-se</button>
                </form>

            </div>
            <div class="second-element">
                <p class="description-primary">Já possui conta?</p>
                <button id="signin" class="btn btn-login">Entrar</button>
            </div>
            
        </div> <!-- primeira tela -->
        <div class="content second-content">
            <div class="first-element">
                <h2 class="title">entre com sua conta</h2>
                <div class="social-media">
                    <ul class="social-media-list">
                        <a href="#">
                            <li class="logo-social-media">
                                <i class="fab fa-facebook">
                                </i>
                            </li>
                            
                        </a>
                        <a href="#">
                            <li class="logo-social-media">
                                <i class="fab fa-google-plus-g">
                                </i>
                            </li>
                        </a>
                        <a href="#">
                            <li class="logo-social-media">
                                <i class="fab fa-linkedin">
                                </i>
                            </li>
                        </a>
                    </ul>
                </div>
                <p class="description">ou utilize sua conta de email</p>
                <form action="login.php" class="form">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <a href="#" class="forget-password">esqueceu sua senha?</a>
                    <button class="btn btn-signin">Entrar</button>
                </form>
            </div>
            <div class="second-element">
                <p class="description-primary">Não possui conta?</p>
                <button id="register" class="btn btn-cadastrar">Cadastrar</button>
            </div>
        </div> <!-- segunda tela -->
    </div>
    <script src=".\assets\js\app.js"></script>
</body>
</html>