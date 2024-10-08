<?php

namespace Modules\Sales\Repository;

use Illuminate\Support\Facades\DB;

class SalesRepository
{
    public function between($startDate,$endDate){
        return DB::table('sales')->whereBetween('created_at', [$startDate,$endDate])->sum('price');
    }
}
