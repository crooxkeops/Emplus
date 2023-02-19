<?php
include('config.php');



function verification_namechanel($namechanel)
{
    $valout='off';
    $sql="SELECT * FROM user WHERE namechanel like '$namechanel' ";
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
        $valout='true';
    }
    else 
    {
        $valout='false';
    }
    return $valout;
}
function verification_fullnameuser($fullnameuser)
{
    $valout='off';
    $sql="SELECT * FROM user WHERE fullnameuser like '$fullnameuser' ";
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
        $valout='true';
    }
    else 
    {
        $valout='false';
    }
    return $valout;

}


function registrarusuario()
{
    echo 'Registrando datos de usuario..<br>';
    $namechanel=$_POST['namechanel']; echo 'namechanel:'.$namechanel.'<br>';
    $fullnameuser=$_POST['fullnameuser']; echo 'fullnameuser:'.$fullnameuser.'<br>';
    $pass=$_POST['pass']; echo 'pass:'.$pass.'<br>';
    $email=$_POST['email']; echo 'email:'.$email.'<br>';
    $token=$_POST['token']; echo 'token:'.$token.'<br>';
    $phone=$_POST['phone']; echo 'phone:'.$phone.'<br>';
}

if(isset($_POST['dll']))
{
  $funt=$_POST['dll'];
  //echo $funt.'.dll<br>';
  if($funt=='registrarusuario')
  {
    registrarusuario();

    $sql="SELECT * FROM user WHERE phone like '$usr' OR psw like '$psw'";

    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1)
    {
        echo '<div class="alert alert-danger"><b>Error!</b> Existen Un usuario Con estos Datos</div>';
    }
      else
      {
        $sql1="INSERT INTO usr_user (id, usr, psw, correo, profesion) VALUES (null,'$usr','$psw','$correo','$profesion')";
        $result = $db->query($sql1);

        echo '<div class="alert alert-success"><b>Ok!</b> El usuario Fuer Registrado Perfectamente.</div>';
      }
  }
  if($funt=='verification_namechanel')
  {
      $namechanel=$_POST['namechanel'];
      $valout=verification_namechanel($namechanel);
      echo $valout;
  }
}x
?>
