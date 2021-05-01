<?php

namespace App\Repository\Repositories;


use App\Models\Role;
use App\Repository\Interfaces\IRoleRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class RoleRepository extends BaseRepository implements IRoleRepository {



    public function __construct(Role $model){
        parent::__construct($model);

    }


}
