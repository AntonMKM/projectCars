<!DOCTYPE html>
<html lang="efr
    <meta charset=" UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php echo $title ?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../public/css/style.css" type="text/css">
</head>

<body class="container">
    <div id="banner">

    </div>
    <div class="topnav" id="myTopnav">
        <a href="index.php?action=home" class="active">Accueil</a>
        <a href="index.php?action=signup">S'inscrire</a>
        <a href="index.php?action=signin">Se connecter</a>
        <a href="index.php?action=account">Mon compte</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <?php echo $content ?>
    <script src="../public/js/script.js" type="text/javascript"> </script>
</body>

</html>