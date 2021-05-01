<?php

namespace App\Repository\Repositories;

use App\Models\Supplier;
use App\Repository\Interfaces\ISupplierRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class SupplierRepository extends BaseRepository implements ISupplierRepository {



    public function __construct(Supplier $model){
        parent::__construct($model);

    }


}
