<?php

namespace App\Repository\Repositories;


use App\Models\Quotation;
use App\Repository\Interfaces\IQuotationRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class QuotationRepository extends BaseRepository implements IQuotationRepository {



    public function __construct(Quotation $model){
        parent::__construct($model);

    }


}
