<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP-MVC Uygulama</title>
    <link href="../../libs/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../libs/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="Peposta" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Psifre" type="password" value="">
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Giriş yap">
                        </fieldset>

                            <?php
                            if ($_POST) {
                                include '../../init.php';
                                $ugc=new UserController();
                                $ktrl1=$ugc->getPostGiris("Peposta", "Psifre");
                                $kontrol=$ugc->girisKontrol($ktrl1);
                                if ($kontrol==true) {
                                    header ("refresh:0; url=../kullanici/index.php");
                                } else {
                                    echo '<div class="alert alert-danger">
                                            Hatalı e-posta veya şifre girdiniz.
                                          </div>';
                                }
                            }
                            ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>