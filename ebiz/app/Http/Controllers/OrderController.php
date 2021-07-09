<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Products;
use App\Orders;
use App\Order_products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OrderController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function cancelOrder(Request $req){
        $items=$req->all();
        Order_products::where('id','=',$items['id'])->update(['state'=>'cancel']);
        return view('YourOrders');        
    } 

    public function changeStatus(Request $req){        
        $items=$req->all();
        Order_products::where('id','=',$items['id'])->update(['state'=>$items['order_status']]);
        return view('productorder');
    }

    public function cancelOreder(Request $req){        
        $items=$req->all();
        Order_products::where('id','=',$items['id'])->update(['state'=>'cancel']);
        return view('YourOrders');
    }

    public function delivered(Request $req){        
        $items=$req->all();
        Order_products::where('id','=',$items['id'])->update(['state'=>'delivered']);
        return view('deliverycnform2');
    }

    public function sendotp(Request $req){
        $items=$req->all();
        $otp = rand ( 1245, 9825);
        $otp_code = md5($otp);
        $message = rawurldecode('Thank You for shoping  with EBIZ, otp for your delivery confirmation  is '.$otp);
        
        // Authorisation details.
        $username = "mikal.jitu@gmail.com";//svssukesh@gmail.com
        $hash = "AweS6o4yPBo-a1LYRJmEBAkm7hgQEd8uM4JDAqNkr8";//q/caMEfdF2k-z7Ch2cHqAJZlTLkfLfz7yirTc4hZr0	
        
        // Config variables. Consult http://api.textlocal.in/docs for more info.
        $test = "0";
        
        // Data for text message. This is the text message data.
        $sender = urlencode('TXTLCL'); // This is who the message appears to be from.
        $inputs=Order_products::where('id','=',$items['id'])->get();
        foreach($inputs as $input){
            $customer=$input->created_by;
            $mobiles=User::where('id','=',$customer)->get();
            foreach($mobiles as $mobile){
                $numbers = $mobile->mobile; // A single number or a comma-seperated list of numbers
                // 612 chars or less
                // A single number or a comma-seperated list of numbers
                //$message = urlencode($message);
            
                // Authorisation details.
                $username = "mikal.jitu@gmail.com";//svssukesh@gmail.com
                $hash = "8f632420fc4613ead581c99a510f62aba89b2be20ef8842110b7aa196d08054f";//023385b67d8fff3ddf1a28f3d326d4251c7c544748b995aea2dd162d008cd2da

                // Config variables. Consult http://api.textlocal.in/docs for more info.
                $test = "0";

                // Data for text message. This is the text message data.
                $sender = "TXTLCL"; // This is who the message appears to be from.
                $numbers = $numbers; // A single number or a comma-seperated list of numbers
                $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
                $ch = curl_init('http://api.textlocal.in/send/?');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($ch); // This is the result from the API
                
                curl_close($ch);
            
            }            
            
        }
        return view('deliverycnform2',array("values"=>$otp_code, "value"=>$otp, "id"=>$items['id'])); 
    }

    public function oppVerification(Request $req){        
        $items=$req->all();
        $otp=md5($items["otp"]);
        if($otp==$items["otp_code"]){
        Order_products::where('id','=',$items['id'])->update(['state'=>'delivered']);
        echo "<center><h1 style='color:red; font-family:Helvetica;'>"."Delivered successfully"."</h1></center>";
        }
        else{
            echo "<center><h1 style='color:red; font-family:Helvetica;'>"."please enter correct opt"."</h1></center>";
        
        }
        
    }

    public function editProfile(Request $req){        
        $items=$req->all();
        
        User::where('id','=',$items['id'])->update([ 'name'=>$items['name'], 'mobile'=>$items['mobile'] ]);
        
    }

}
