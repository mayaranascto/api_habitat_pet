<?php

namespace App\Repositories;

use App\Users;

class UsersRepository
{

  protected $users;

  function __construct(Users $users)
  {
    $this->users = $users;
  }

  public function store($data)
  {
    $users = $this->users->create($data);
    return $users;
  }

  public function getAll()
  {
    return $this->users->all();
  }

  public function getUser($id)
  {
    $user = $this->users->find($id);
    return $user['attributes'];
  }

  public function update($data, $id)
  {
    $user = $this->users->find($id);
    $user->update($data);
    return $user;
  }

  public function delete($id)
  {
    $user = $this->users->find($id);
    $user->delete();
    return true;
  }

}
