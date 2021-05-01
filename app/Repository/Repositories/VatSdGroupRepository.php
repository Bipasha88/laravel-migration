<?php

namespace App\Repository\Repositories;


use App\Models\VatSdGroup;
use App\Repository\Interfaces\IVatSdGroupRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class VatSdGroupRepository extends BaseRepository implements IVatSdGroupRepository {



    public function __construct(VatSdGroup $model){
        parent::__construct($model);

    }


}
