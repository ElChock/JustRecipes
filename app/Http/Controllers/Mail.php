<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../Model/Usuario.php';
include_once '../Mail/class.phpmailer.php';
include_once '../Mail/class.smtp.php';
include_once '../Mail/Mail.php';
include_once '../Mail/PHPMailerAutoload.php';

class RecetaController extends Controller{
    public function EnviarMail(){
        
    }
}

if($_SERVER["REQUEST_METHOD"]=="POST" )
{
    
    if(!empty($_POST["Registro"]))
    {
     
        if(!empty($_POST["nombre"]))
        { 
            $usuario->setNombre($_POST["nombre"]);
        }
        else
        {
            
            
        }
        
        if(!empty($_POST["correo"]))
        {
            $usuario->setCorreo($_POST["correo"]);
        }
        else
        {
            
            
        }
        
        if(!empty($_POST["password"]))
        {
            $usuario->setContraseña(sha1($_POST["password"]));
        }
        else
        {
            
        }
        
        if(!empty($usuario))
        {
            $usuarioLogin= new Usuario();
            if($usuarioLogin=$daoUsuario->altaUsuario($usuario))
            {
                $contenido = new Mail();
                $mail = new PHPMailer();
                $mail->isSMTP();
                
                $mail->SMTPAuth=true;
                $mail->SMTPSecure="ssl";
                $mail->Host="smtp.gmail.com";
                $mail->Port=465;
                $mail->Username="ayrtongarcialopez@gmail.com";
                $mail->Password="border21!lands";
                $mail->CharSet="UTF8";
                $mail->FromName="JustRecipes";
                $mail->Subject='Bienvenido a justRecipes';
                $mail->msgHTML($contenido->getCorreo());
                $mail->addAddress($usuario->getCorreo(),$usuario->getNombre());
                $mail->isHTML(true);
                if(!$mail->send())
                {
                    echo $mail->ErrorInfo;
                }
                else 
                {   
                    
                }
                $S=  serialize($usuarioLogin);                
                $_SESSION["usuario"] = $s;
                header("Location: ../Inicio.php");
               
            }
            else
            {
                echo "no hizo el spa_usuario";
            }
        }

        
    }
    else
    {
        echo "no entro al registro";
    }
}
else
{
    echo "no entro";
}