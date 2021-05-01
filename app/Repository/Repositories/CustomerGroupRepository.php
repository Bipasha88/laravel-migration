<?php

namespace App\Repository\Repositories;


use App\Models\CustomerGroup;
use App\Repository\Interfaces\ICustomerGroupRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CustomerGroupRepository extends BaseRepository implements ICustomerGroupRepository {



    public function __construct(CustomerGroup $model){
        parent::__construct($model);

    }


}
