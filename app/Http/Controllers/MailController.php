<?php

namespace App\Http\Controllers;


use app\Http\Mail\classphpmailer;
use app\Http\Mail\classsmtp;
use app\Http\Mail\Mail;
use app\Http\Mail\PHPMailerAutoload;
use Illuminate\Http\Request;
use App\Usuario;

class MailController extends Controller
{
    public function Enviar($usuario){
        $contenido ="Bienvenido a Justrecipes";
        $mail = new PHPMailer();
        $mail->isSMTP();
        $usuarioEmail = new Usuario();

        $mail->SMTPAuth=true;
        $mail->SMTPSecure="ssl";
        $mail->Host="smtp.gmail.com";
        $mail->Port=465;
        $mail->Username= env('MAIL_USERNAME');
        $mail->Password=env('MAIL_PASSWORD');
        $mail->CharSet="UTF8";
        $mail->FromName="JustRecipes";
        $mail->Subject='Bienvenido a justRecipes';
        $mail->msgHTML($contenido->getCorreo());
        $mail->addAddress($usuarioEmail->correo,$usuarioEmail->nombre);
        $mail->isHTML(true);
        if(!$mail->send())
        {
            echo $mail->ErrorInfo;
        }
    }
}
