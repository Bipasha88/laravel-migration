<?php

namespace App\Repository\Repositories;


use App\Models\SaleReturn;
use App\Repository\Interfaces\ISaleReturnRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class SaleReturnRepository extends BaseRepository implements ISaleReturnRepository {



    public function __construct(SaleReturn $model){
        parent::__construct($model);

    }


}
