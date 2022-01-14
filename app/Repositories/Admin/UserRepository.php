<?php

namespace App\Repositories\Admin;

use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }

    public function getUserActive()
    {
        return $this->model->active()->get();
    }
}
