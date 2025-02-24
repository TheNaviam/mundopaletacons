<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>⭐️ Fisioteràpia · Osteopatia BARCELONA ▷ Sant Andreu</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">

    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="collapse navbar-collapse center colornombres">
                    <ul class="nav navbar-nav">
                        <li class="active colornombres"><a href="index.html#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="index.html#service">Serveis</a></li>
                        <li><a href="index.html#portfolio">Coneixens</a></li>
                        <li><a href="index.html#pricing">Packs</a></li>
                        <li><a href="index.html#contact">Contacte</a></li>
                    </ul>
                    <a href="https://connect.timp.pro/centers/4879-bodhivita" class="btn btn-primary btn-lg center" style="margin-top: 15px;">Reserva la teva sessió</a>
                </div>
            </div>
        </div>
    </header><!--/#header-->

    <section id="contact" style="margin-top: 50PX;">
        <div class="container">
            <div class="box last">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Tornar al formulari</h1>
                        <div class="status alert alert-success" style="display: none"></div>
                        <a href="form.html" class="btn btn-primary btn-lg center" style="margin-top: 15px; color: white;">Formulari</a>
                        </div><!--/.col-sm-6-->
                    </div><!--/.row-->
                </div><!--/.box-->
            </div><!--/.container-->
        </section><!--/#contact-->

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                     <p>© 2021 Bodhivita: Bodhivita Barcelona no puede asumir ninguna responsabilidad derivada del uso incorrecto, inapropiado o ilícito de la información aparecida en las páginas de Internet de www.Bodhivita.com. Las páginas de Internet de www.Bodhivita.com pueden contener enlaces (links) a otras páginas de terceras partes que www.Bodhivita.com no puede controlar. Por lo tanto, www.Bodhivita.com no puede asumir responsabilidades por el contenido que pueda aparecer en páginas de terceros.</p>
                 </div>
             </div>
         </div>
     </footer><!--/#footer-->

 </body>
 </html>

<?php

//include ("con_db.php");
/*
header('Content-type: application/json');
    $status = array(
        'type'=>'success',
        'message'=>'Consulta enviada con exito'
    );

    $nom = @trim(stripslashes($_POST['nom'])); 
    $cognom = @trim(stripslashes($_POST['cognom'])); 
    $email = @trim(stripslashes($_POST['mail'])); 
    $telefon = @trim(stripslashes($_POST['telefon'])); 
    $sexo = @trim(stripslashes($_POST['sexo']));
    $actividades = @trim(stripslashes($_POST['actividades'])); 
    $message = @trim(stripslashes($_POST['message'])); 
    $imagen = @trim(stripslashes($_POST['imagen']));  

    $email_from = $mail;
    $email_to = 'email@gmail.com';

    $success = @mail($email_to, $telefon, $body, 'From: <'.$email_from.'>');

    echo json_encode($status); 
*/

    $mysqli=new mysqli("localhost","root","","webproyecto"); 

    if($mysqli->connect_error){
        echo "Error al enviar la consulta: ".$mysqli->connect_errno ." ".
        $mysqli->connect_error;
    }else{

        $nom = $_POST["nom"];
        $cognom = $_POST["cognom"];
        $mail = $_POST["mail"];
        $telefon = $_POST["telefon"];
        $sexo = $_POST["sexo"];
        $actividades = $_POST["actividades"];
        $message = $_POST["message"];
        $query = "insert into form(nom,cognom,mail,telefon,sexo,actividades,message) values ('$nom','$cognom','$mail','$telefon','$sexo','$actividades','$message')";
        
        if ($mysqli->query($query) === TRUE) {

      } else {
          echo "Error: " . $query . "<br>" . $mysqli->error;
      }

        $mysqli->close();
    }

/*
$nom = trim($_POST['nom']);
$cognom = trim($_POST['cognom']);
$mail = trim($_POST['mail']);
$telefon = trim($_POST['telefon']);
$sexo = trim($_POST['sexo']);
$actividades = trim($_POST['actividades']);
$message = trim($_POST['message']);
$imagen = trim($_POST['imagen']);

$conex = new mysqli("localhost","root","","webproyecto");
$consulta =  "INSERT INTO form(nom, cognom, mail, telefon, sexo, actividades, message, imagen) VALUES ($_REQUEST[nom], $_REQUEST[cognom], $_REQUEST[mail], $_REQUEST[telefon], $_REQUEST[sexo], $_REQUEST[actividades], $_REQUEST[message], $_REQUEST[imagen])";
if ($conex->query($consulta) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $consulta . "<br>" . $conex->error;
}

*/


/*
$consulta =  $conex->prepare("INSERT INTO form(nom, cognom, mail, telefon, sexo, actividades, message, imagen) VALUES (?,?,?,?,?,?,?,?)");

$consulta->bind_param('as','pepe','ivan@ivan.com',654321,'home','altres','asdfasdfadsfadsfadfa', NULL);

$consulta->execute();

       // $resultado = $conex->prepare($consulta)->execute();
echo "hola";*/

?>