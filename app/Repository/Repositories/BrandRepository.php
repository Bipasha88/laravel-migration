<?php

namespace App\Repository\Repositories;


use App\Models\Brand;
use App\Repository\Interfaces\IBrandRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BrandRepository extends BaseRepository implements IBrandRepository {



    public function __construct(Brand $model){
        parent::__construct($model);

    }


}
