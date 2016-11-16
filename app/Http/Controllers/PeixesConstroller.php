<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\PeixesRepository;

class PeixesConstroller extends Controller
{
    protected $peixesRep;

    public function __construct(PeixesRepository $peixesRep)
    {
      $this->peixesRep = $peixesRep;
    }

    public function index()
    {
        return view('peixes/index', array(
          'peixes' => $this->peixesRep->getAll(),
        ));
    }

    public function create()
    {
        return view('peixes/create', array());
    }

    public function store(Request $request)
    {
        $peixe_data = $request->all();
        $foto_peixe = $request->file('foto_peixe');
        $foto_peixe->move('/var/www/html/habitatpetWs/serverside/imgs/iPeixes/', $foto_peixe->getClientOriginalName());
        $this->peixesRep->store($peixe_data);
        return redirect('/peixes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('peixes/edit', array(
          'peixe' => $this->peixesRep->getById($id),
        ));
    }

    public function update(Request $request, $id)
    {
        $new_data_peixe = $request->all();
        $this->peixesRep->update($new_data_peixe, $id);
        return redirect('/peixes');
    }

    public function destroy($id)
    {
        $this->peixesRep->destroy($id);
        return redirect('/peixes');
    }
}
