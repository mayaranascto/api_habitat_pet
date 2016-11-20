<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Peixes;
use App\Plantas;
use App\Produtos;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peixes   = Peixes::orderBy('id', 'desc')
                    ->take(4)
                    ->get();

        $plantas  = Plantas::orderBy('id', 'desc')
                    ->take(4)
                    ->get();

        $produtos = Produtos::orderBy('id', 'desc')
                    ->take(4)
                    ->get();

        return view('home', array(
          'usersTotal'       => Users::count(),
          'peixesTotal'      => Peixes::count(),
          'plantasTotal'     => Plantas::count(),
          'produtosTotal'    => Produtos::count(),
          'peixesRecentes'   => $peixes,
          'plantasRecentes'  => $plantas,
          'produtosRecentes' => $produtos,
        ));
    }
}
