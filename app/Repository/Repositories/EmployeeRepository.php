<?php

namespace App\Repository\Repositories;


use App\Models\Employee;
use App\Repository\Interfaces\IEmployeeRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class EmployeeRepository extends BaseRepository implements IEmployeeRepository {



    public function __construct(Employee $model){
        parent::__construct($model);

    }


}
