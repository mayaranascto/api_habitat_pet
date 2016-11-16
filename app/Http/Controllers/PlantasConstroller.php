<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\PlantasRepository;

class PlantasConstroller extends Controller
{

    protected $plantasRep;

    public function __construct(PlantasRepository $plantasRep)
    {
      $this->plantasRep = $plantasRep;
    }

    public function index()
    {
        return view('plantas/index', array(
          'plantas' => $this->plantasRep->getAll(),
        ));
    }

    public function create()
    {
        return view('plantas/create', array());
    }

    public function store(Request $request)
    {
        $planta_data = $request->all();
        $foto_planta = $request->file('foto_planta');
        $foto_planta->move('/var/www/html/habitatpetWs/serverside/imgs/iPlantas/', $foto_planta->getClientOriginalName());
        $this->plantasRep->store($planta_data);
        return redirect('/plantas');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('plantas/edit', array(
          'planta' => $this->plantasRep->getById($id),
        ));
    }

    public function update(Request $request, $id)
    {
        $new_data_planta = $request->all();
        $this->plantasRep->update($new_data_planta, $id);
        return redirect('/plantas');
    }

    public function destroy($id)
    {
        $this->plantasRep->destroy($id);
        return redirect('/plantas');
    }
}
