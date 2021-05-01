<?php

namespace App\Repository\Repositories;


use App\Models\InvoiceItem;
use App\Repository\Interfaces\IInvoiceItemRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class InvoiceItemRepository extends BaseRepository implements IInvoiceItemRepository {



    public function __construct(InvoiceItem $model){
        parent::__construct($model);

    }


}
