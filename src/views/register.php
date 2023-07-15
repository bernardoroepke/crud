<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MVC</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <?php include(TEMPLATE_PATH . '/messages.php');?>
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Crie sua conta!</h1>
                    </div>
                    <form class="user" method="POST" action="#">
                        <input type="hidden" id="is_admin" name="is_admin" value="0">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Usuário" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Senha" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user" id="repeatpassword" name="repeatpassword" placeholder="Repita sua senha" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar">
                        <hr>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="loginController.php">Já tem uma conta? Faça o login clicando aqui!</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>