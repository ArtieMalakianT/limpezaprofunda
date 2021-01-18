<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\User;

class WelcomeController extends Controller
{
    public function sendcontato(Request $request)
    {
        $user = new User();

        $user->name = $request->nome;
        $user->email = $request->email;
        $user->tel = $request->tel;
        $message = $request->message;
        $cidade = $request->cidade;

        Mail::send('mail.contact', ['msg' => $message,'email' => $user->email, 'name' => $user->name,'tel' => $user->tel, 'cidade' => $cidade], function ($m) use ($user){
            $m->from ('info@likeschool.com.br','Info Limpeza Profunda');

            $m->to('contato@likeschool.com.br', 'Contato Limpeza Profunda')->subject('Mensagem do site');
        });
        return back()->with('status','Sua mensagem foi enviada com sucesso!');
    }
}
