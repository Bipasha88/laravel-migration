<?php

namespace App\Repository\Repositories;


use App\Models\Payment;
use App\Repository\Interfaces\IPaymentRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class PaymentRepository extends BaseRepository implements IPaymentRepository {



    public function __construct(Payment $model){
        parent::__construct($model);

    }


}
