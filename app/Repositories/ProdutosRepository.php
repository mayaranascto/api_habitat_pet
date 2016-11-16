<?php

namespace App\Repositories;

use App\Produtos;

class ProdutosRepository
{
  protected $produtos;

  function __construct(Produtos $produtos)
  {
    $this->produtos = $produtos;
  }

  public function getAll()
  {
    return $this->produtos->all();
  }

  public function store($data)
  {
    $produto = $this->produtos->create($data);
    return $produto;
  }

  public function getById($id)
  {
    $produto = $this->produtos->find($id);
    return $produto;
  }

  public function update($data, $id)
  {
    $produto = $this->produtos->find($id);
    $produto->update($data);
    $produto->save();
    return $produto;
  }

  public function destroy($id)
  {
    return $this->produtos->destroy($id);
  }
}

 ?>
