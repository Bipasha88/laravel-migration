<?php

namespace App\Repository\Repositories;


use App\Models\Business;
use App\Repository\Interfaces\IBusinessRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class BusinessRepository extends BaseRepository implements IBusinessRepository {



    public function __construct(Business $model){
        parent::__construct($model);

    }


}
