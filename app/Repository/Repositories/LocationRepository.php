<?php

namespace App\Repository\Repositories;


use App\Models\Location;
use App\Repository\Interfaces\ILocationRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class LocationRepository extends BaseRepository implements ILocationRepository {



    public function __construct(Location $model){
        parent::__construct($model);

    }


}
