<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
class CryptoController extends Controller
{

    public function convert($convertFrom,$convertFromValue,$convertTo)
    {
        $dbCryptoTable = 'crypto';
        $convertFromRate = DB::table($dbCryptoTable)->where('symbol', $convertFrom)->value('rate');
        $convertToRate = DB::table($dbCryptoTable)->where('symbol', $convertTo)->value('rate');
        if ($convertFromRate && $convertToRate) {
            $converted = ($convertFromRate * $convertFromValue) / $convertToRate;
            return $converted;           
        } else {
            return NULL;
        }
    }


}