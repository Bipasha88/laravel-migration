<?php

namespace App\Repository\Repositories;


use App\Models\Expense;
use App\Repository\Interfaces\IExpenseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ExpenseRepository extends BaseRepository implements IExpenseRepository {



    public function __construct(Expense $model){
        parent::__construct($model);

    }


}
