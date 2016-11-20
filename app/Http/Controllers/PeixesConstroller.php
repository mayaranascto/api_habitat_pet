<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\PeixesRepository;
use App\Peixes;

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
          'peixes' => Peixes::paginate(5),
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
        $name = $foto_peixe->getClientOriginalName();
        $foto_peixe->move('/var/www/html/habitatpetWs/serverside/imgs/iPeixes/', $name);
        $peixe_data['foto_peixe'] = $name;
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
        $foto_peixe = $request->file('foto_peixe');
        $name = $foto_peixe->getClientOriginalName();
        $foto_peixe->move('/var/www/html/habitatpetWs/serverside/imgs/iPeixes/', $name);
        $peixe_data['foto_peixe'] = $name;
        $this->peixesRep->update($new_data_peixe, $id);
        return redirect('/peixes');
    }

    public function destroy($id)
    {
        $this->peixesRep->destroy($id);
        return redirect('/peixes');
    }
}
