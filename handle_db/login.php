<?php

if ($_SERVER["REQUEST_METHOD"]=== 'POST'){
    //GUARDAR LOS DATSO DEL FORMULARIO ENVIADO EN VARIABLES 
     $username =$_POST["Email"];
     $password =$_POST["Password"];
    
    
     require_once $_SERVER["DOCUMENT_ROOT"] . "/models/cliente.php";
     
     $res = $mysqli->query("select * from mock_data where username = '$username'");
    
     if($res->num_rows === 1){
    
        $user_data =$res->fetch_assoc();
        
     session_start();
     $_SESSION["user"] = $user_data; 
     header("location: /nivel3/PFN3/views/admin/admin_dashboard.php");}
    
     } else {
        
      
        echo "  <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
            <link rel='stylesheet' href='./styles/style.css'>
            <title>Document</title>
        </head>
        <body>
        <h1>no existe el usuario</>
        </body>
        </html>";
    
    } 
    