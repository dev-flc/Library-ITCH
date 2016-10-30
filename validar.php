
<?php 
require("conexion.php");
error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST['registrar_name'])){
header('Location: nuevousuario.php');
}
else{
if (isset($_POST["pass"]) && isset($_POST["usuario"])) {

    $query="SELECT * FROM usuario WHERE USU_usuario='".$_POST["usuario"]."' and USU_password='". $_POST["pass"] ."'";
    $resultado=$mysqli->query($query);
        if($row=$resultado->fetch_assoc())
        {
            session_start();
            $_SESSION['usuario']=$_POST["usuario"];
            ?>
            <script type="text/javascript">
            window.location="menuadmin.php";
            </script>
            <?php
            echo $_SESSION['usuario'];   
        }
        else
        {   
            ?>
            <script type="text/javascript">
            window.location="admin.php?error=si";
            </script>
            <?php 
        }
    }
    
}
 
