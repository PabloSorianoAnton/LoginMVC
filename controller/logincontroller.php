<?php
include '../model/user.php';
include '../model/conexion.php';

$femail=$_POST['femail'];
$fpassword=$_POST['fpassword'];

// echo "El email es {$femail} y la contraseña es {$fpassword}";
// creo objeto user

$user=new User($femail, $fpassword);

echo $user->getEmail();
echo "<br>";
echo $user->getPassword();

$sql="SELECT * FROM tbl_user WHERE email=? and pass=?";
$smt=$pdo->prepare($sql);
$smt->bindParam(1, $femail);
$smt->bindParam(2, $fpassword);
$smt->execute();
$numUser=$smt->rowCount();
echo $numUser;

if ($numUser==1){
    header("location:../view/home.php");
} else {
    header("location:../view/vista_login.html?error=1");
}

?>