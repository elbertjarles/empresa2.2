<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaBasicaController extends Controller
{
    //Retornar a pagina sobre
    public function sobre()
    {

        $dado = "Empresa@gmail.com";
        $telefone = '38 3223-8997';

        //Chamando a view e passando um dado
        //with('nome variavel', valor)
        return view('sobre')->with('email', $dado)
        ->with('telefone', $telefone);

        //Outra forma passar dado pra uma view
        //return view('sobre')->withEmail($dado);
    }

    //Retornar a pagina contato
    public function contato()
    {
        $dado = "Empresa@gmail.com";
        $telefone = '38 3223-8997';

        //Chamando a view e passando um dado
        //with('nome variavel', valor)
        return view('contato')->with('email', $dado)
        ->with('telefone', $telefone);

        //return view('contato');
    }
}
