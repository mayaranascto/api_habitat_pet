<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\ProdutosRepository;
use App\Produtos;

class ProdutosController extends Controller
{
    protected $produtosRep;

    public function __construct(ProdutosRepository $produtosRep)
    {
      $this->produtosRep = $produtosRep;
    }

    public function index()
    {
        return view('produtos/index', array(
          'produtos' => Produtos::paginate(5),
        ));
    }

    public function create()
    {
        return view('produtos/create', array());
    }

    public function store(Request $request)
    {
        $produto_data = $request->all();
        $foto_produto = $request->file('foto_produto');
        $name = $foto_produto->getClientOriginalName();
        $foto_produto->move('/var/www/html/habitatpetWs/serverside/imgs/iProdutos/', $name);
        $produto_data['foto_produto'] = $name;
        $this->produtosRep->store($produto_data);
        return redirect('/produtos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('produtos/edit', array(
          'produto' => $this->produtosRep->getById($id),
        ));
    }

    public function update(Request $request, $id)
    {
        $new_data_produto = $request->all();
        $foto_produto = $request->file('foto_produto');
        $name = $foto_produto->getClientOriginalName();
        $foto_produto->move('/var/www/html/habitatpetWs/serverside/imgs/iProdutos/', $name);
        $produto_data['foto_produto'] = $name;
        $this->produtosRep->update($new_data_produto, $id);
        return redirect('/produtos');
    }

    public function destroy($id)
    {
        $this->produtosRep->destroy($id);
        return redirect('produtos');
    }
}
