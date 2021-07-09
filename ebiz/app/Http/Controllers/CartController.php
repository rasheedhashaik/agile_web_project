<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Student;
use App\Products;
use App\Orders;
use App\Order_products;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CartController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function addToCart(Request $req){
        $items=$req->all();
        $products = Products::where('id','=',$items['id'])->where('status','=','active')->get();
        foreach($products as $product)
        {
            if($product->stock > 0){        
                if($req->session()->has('cart')){
                    $req->session()->push('cart',$items['id']);
                }
                else{
                    $req->session()->put('cart',array());
                    $req->session()->push('cart',$items['id']);
                }
                // echo"<script type='text/javascript'>
                // alert('Iteam added to Cart');                                    
                // </script>";
                return redirect('shope2');

            }
            else{

                // echo"<script>
                // alert('Product not available');                                    
                // </script>";                
                return redirect('shope2');
            }
        }
    }

    public function removeFromCart(Request $req){
        $items=$req->all();  
        $cartitemsids = session()->get('cart');  
       // echo $items['id'];
        $key=array_search($items['id'], $cartitemsids);
        unset($cartitemsids[$key]);   
        $req->session()->put('cart', $cartitemsids);        
        return redirect('viewcart');
    }

    public function viewCart(Request $req){
        $cartitemsids= session()->get('cart');
        if(!empty($cartitemsids))
            {
            return view('table');
            }   
        else
            {
            echo"<script>
            alert('cart is empty');                                    
            </script>";
            return view('shope2');
            }
    }


    public function payFromCart(Request $req){
         $a=$req->all();     
         $total_amount=0;
         $items=$req->session()->get('cart');   
         
         DB::beginTransaction();
         try{        
             $orders=new Orders();
                          
             $orders->customer_id=Auth::user()->id;
             $orders->email =Auth::user()->email;
             $orders->address=$a['address'];
             $orders->created_by=Auth::user()->id;
             $orders->save();  
 
             foreach($items as $x=>$item){                         
                 $products = Products::where('id','=',$item)->where('status','=','active')->get();
                foreach($products as $product){                
                    $product->stock = $product->stock-1;
                    $order_products=new Order_products();
                    $order_products->order_id = $orders->id;
                    $order_products->product_id  = $product->id;
                    $order_products->vendor_id  = $product->created_by; 
                    $order_products->created_by = Auth::user()->id;
                    $order_products->save();
                    $total_amount=$total_amount+$product->price;
                    Products::where('id','=',$product->id)->update(['stock'=>$product->stock]);                    
                } 
                print_r($items);
                unset($items[$x]);            
            }  
                      
             $orders->total_amount=$total_amount;
             $orders->update(); 
         }
         catch(Exception $ex){
             DB::rollBack();
             return $ex;
             return redirect('payfromcart');
         }
         DB::commit();  
         return redirect('paymentdetails?id='.$orders->id);      
     }


     public function details(Request $req){
        $items=$req->all();
        //$orders=new Orders();
        $orders = Orders::where('id','=',$items['id'])->first();
        return view("payandproductdetails",array("values"=>$orders));
        print_r($items);
    }

    public function sendotp(Request $req){
        $otp = rand ( 1245, 9825);
					$otp_code = md5($otp);
					$message = rawurldecode('Thank You for shoping  with EBIZ, your delivery code is '.$otp);
					
					// Authorisation details.
					$username = "svssukesh@gmail.com";
					$hash = "q/caMEfdF2k-z7Ch2cHqAJZlTLkfLfz7yirTc4hZr0";
					
					// Config variables. Consult http://api.textlocal.in/docs for more info.
					$test = "0";
					
					// Data for text message. This is the text message data.
					$sender = urlencode('TXTLCL'); // This is who the message appears to be from.
					$numbers = $request->mobile; // A single number or a comma-seperated list of numbers
					// 612 chars or less
					// A single number or a comma-seperated list of numbers
					//$message = urlencode($message);
					$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
					$ch = curl_init('http://api.textlocal.in/send/?');
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$result = curl_exec($ch); // This is the result from the API
					curl_close($ch);
                    $outjson["data"]=array("message"=>"success","otpcode"=>$otp_code,"mobile"=>$request->mobile);
                    echo $otp_code;
    }
    

}
