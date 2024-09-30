
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Amec - AutoAjuda Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="amec">AMECX</h2>

            <div class="text-sci">
                <h2>Bem-vindo(a) <br> <span>aqui você pode falar tudo o que sente</span></h2>
            </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login ">
                <form action="#">
                    <h2>Entrar</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Senha</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">lembre-me</label>
                        <a href="#">Esqueceu sua senha?</a>
                    </div>

                    <button type="submit" class="btn">Entrar</button>

                    <div class="login-register">
                        <p>Não tem uma conta?
                            <a href="#" class="register-link">crie uma</a>
                        </p>
                    </div>
                </form>
            </div>

            <div class="form-box register ">
                <form action="#">
                    <h2>Criar</h2>


                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label>Nome</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>


                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Senha</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Concordo com os termos e condições</label>
                    </div>

                    <button type="submit" class="btn">Criar conta</button>

                    <div class="login-register">
                        <p>já tem uma conta?
                            <a href="#" class="login-link">Entre</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>

</html>
