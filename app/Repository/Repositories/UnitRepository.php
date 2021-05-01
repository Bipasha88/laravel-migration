<?php

namespace App\Repository\Repositories;


use App\Models\Unit;
use App\Repository\Interfaces\IUnitRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class UnitRepository extends BaseRepository implements IUnitRepository {



    public function __construct(Unit $model){
        parent::__construct($model);

    }


}
