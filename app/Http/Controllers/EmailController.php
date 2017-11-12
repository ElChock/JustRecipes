<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
