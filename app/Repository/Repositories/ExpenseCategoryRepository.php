<?php

namespace App\Repository\Repositories;


use App\Models\ExpenseCategory;
use App\Repository\Interfaces\IExpenseCategoryRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ExpenseCategoryRepository extends BaseRepository implements IExpenseCategoryRepository {



    public function __construct(ExpenseCategory $model){
        parent::__construct($model);

    }


}
