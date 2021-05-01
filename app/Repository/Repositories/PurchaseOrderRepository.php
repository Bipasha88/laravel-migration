<?php

namespace App\Repository\Repositories;


use App\Models\PurchaseOrder;
use App\Repository\Interfaces\IPurchaseOrderRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PurchaseOrderRepository extends BaseRepository implements IPurchaseOrderRepository {



    public function __construct(PurchaseOrder $model){
        parent::__construct($model);

    }


}
