<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Student;
use App\Products;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class checkoutController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function checkout(Request $req){
        $req->all();
        $items=$req->session()->get('cart');
        print_r('$items');
    }   
}
