<?php

namespace App\Repositories;

use App\Peixes;

class PeixesRepository
{

  protected $peixes;

  function __construct(Peixes $peixes)
  {
    $this->peixes = $peixes;
  }

  public function getAll()
  {
    return $this->peixes->all();
  }

  public function store($data)
  {
    $peixe = $this->peixes->create($data);
    return $peixe;
  }

  public function getById($id)
  {
    $peixe = $this->peixes->find($id);
    return $peixe;
  }

  public function update($data, $id)
  {
    $peixe = $this->peixes->find($id);
    $peixe->update($data);
    $peixe->save();
    return $peixe;
  }

  public function destroy($id)
  {
    return $this->peixes->destroy($id);
  }
}

 ?>
