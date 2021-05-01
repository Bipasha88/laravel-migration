<?php

namespace App\Repository\Repositories;


use App\Models\Customer;
use App\Repository\Interfaces\ICustomerRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CustomerRepository extends BaseRepository implements ICustomerRepository {



    public function __construct(Customer $model){
        parent::__construct($model);

    }


}
