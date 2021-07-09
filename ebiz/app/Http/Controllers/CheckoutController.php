<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Student;
use App\Products;
use App\Orders;
use App\Order_products;
use Illuminate\Support\Facades\Auth;
use App\User;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class checkoutController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   
    public function checkout(Request $req){ 
        $a=$req->all();     
        $total_amount=0;
        $items=$req->session()->get('cart');   
        
        DB::beginTransaction();
        try{        
            $orders=new Orders();
            $order_products=new Order_products();             
            $orders->customer_id=Auth::user()->id;
            $orders->email =Auth::user()->email;
            $orders->address=$a['address'];
            $orders->created_by=Auth::user()->id;
            $orders->save();  

            foreach($items as $item){                         
                $products = Products::where('id','=',$item)->where('status','=','active')->first();
                $order_products->id = $orders->id;
                $order_products->product_id  = $products->id;

                $order_products->created_by = Auth::user()->id;
                $order_products->save();
                $total_amount=$total_amount+$products->price;             
            }            
            $orders->total_amount=$total_amount;
            $orders->update(); 
        }
        catch(Exception $ex){
            DB::rollBack();
            return $ex;
        }
        DB::commit();        
    }   
}
