<?php

namespace App\Repository\Repositories;


use App\Models\AssetCategory;
use App\Repository\Interfaces\IAssetCategoryRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class AssetCategoryRepository extends BaseRepository implements IAssetCategoryRepository {



    public function __construct(AssetCategory $model){
        parent::__construct($model);

    }


}
