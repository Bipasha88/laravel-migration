<?php

namespace App\Repository\Repositories;


use App\Models\Stock;
use App\Repository\Interfaces\IStockRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class StockRepository extends BaseRepository implements IStockRepository {



    public function __construct(Stock $model){
        parent::__construct($model);

    }


}
