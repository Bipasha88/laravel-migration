<?php

namespace App\Repository\Repositories;


use App\Models\Product;
use App\Repository\Interfaces\IProductRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ProductRepository extends BaseRepository implements IProductRepository {



    public function __construct(Product $model){
        parent::__construct($model);

    }


}
