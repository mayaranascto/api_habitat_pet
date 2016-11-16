<?php

namespace App\Repositories;

use App\Plantas;


class PlantasRepository
{

  protected $plantas;

  function __construct(Plantas $plantas)
  {
    $this->plantas = $plantas;
  }

  public function getAll()
  {
    return $this->plantas->all();
  }

  public function store($planta_data)
  {
    $planta = $this->plantas->create($planta_data);
    return $planta;
  }

  public function getById($id)
  {
    $planta = $this->plantas->find($id);
    return $planta;
  }

  public function update($data, $id)
  {
    $planta = $this->plantas->find($id);
    $planta->update($data);
    $planta->save();
    return $planta;
  }

  public function destroy($id)
  {
    return $this->plantas->destroy($id);
  }
}

 ?>
