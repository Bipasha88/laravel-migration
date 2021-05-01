<?php

namespace App\Repository\Repositories;

use App\Models\Asset;
use App\Repository\Interfaces\IAssetRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class AssetRepository extends BaseRepository implements IAssetRepository {



    public function __construct(Asset $model){
       parent::__construct($model);

    }


}
