<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuario;

class EmailController extends Controller
{
    public function sendEmail(){
        $title = 'title';
        $content = 'content';

        Mail::send('inicio', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('ayrtongarcia@gmail.com', 'Christian Nwamba');

            $message->to('wha.spir.wha@hotmail.com');

        });

        return response()->json(['message' => 'Request completed']);
    }
    public function Enviar($usuario){
        $contenido ="Bienvenido a Justrecipes";
        $mail = new SMTP();
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