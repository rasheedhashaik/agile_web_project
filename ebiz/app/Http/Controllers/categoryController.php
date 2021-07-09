<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Products;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProductController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function cat(Request $req){
        $items=$req->all();
        $x=$ite
        return view("table2",array("values"=>$product));
      
}
