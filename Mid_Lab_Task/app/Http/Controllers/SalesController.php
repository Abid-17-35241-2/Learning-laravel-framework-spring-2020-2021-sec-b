<?php

namespace App\Http\Controllers;

use App\Physical_store_channel;
use App\Social_Media_Channel;
use App\Ecommerce_Channel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function index(){

        return view('Sales.sales');
    }
    public function physicalstore(){

        // $tday=today();
        $tday=Carbon::now()->format('Y-m-d');
        $svday=now()->subDays(7)->format('Y-m-d');
        $today = Physical_store_channel::where('date_sold', $tday)->sum('quantity');
        $last7days = Physical_store_channel::where('date_sold', $svday)->sum('quantity');

        return view('Sales.physicalstore', ['today' => $today, 'svdays' => $last7days]);
    }
    public function socialmedia(){

        $tday=Carbon::now()->format('Y-m-d');
        $svday=now()->subDays(7)->format('Y-m-d');
        $today = Social_Media_Channel::where('date_sold', $tday)->sum('quantity');
        $last7days = Social_Media_Channel::where('date_sold', $svday)->sum('quantity');
        return view('Sales.socialmedia', ['today' => $today, 'svdays' => $last7days]);
    }
    public function ecommerce(){



        $tday=Carbon::now()->format('Y-m-d');
        $svday=now()->subDays(7)->format('Y-m-d');
        $today = Ecommerce_Channel::where('date_sold', $tday)->sum('quantity');
        $last7days = Ecommerce_Channel::where('date_sold', $svday)->sum('quantity');

        return view('Sales.ecommerce', ['today' => $today, 'svdays' => $last7days]);
    }
}
