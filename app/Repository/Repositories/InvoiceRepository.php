<?php

namespace App\Repository\Repositories;


use App\Models\Invoice;
use App\Repository\Interfaces\IInvoiceRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class InvoiceRepository extends BaseRepository implements IInvoiceRepository {



    public function __construct(Invoice $model){
        parent::__construct($model);

    }


}
