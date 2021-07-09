<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Student;
use App\Customer;
use App\User;



use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CustomerController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
      public function customerDetails(Request $req){
          $items=$req->all();
          if($req->isMethod('post')){
                $customer=new Customer();
                $customer->first_name=$items['firstname'];
                $customer->last_name=$items['lastname'];
                $customer->mobile=$items['mobile'];
                $customer->gender=$items['gender'];
                $customer->address=$items['address'];
                $path=storage::putFile('uploads',$req->file('img_file'));
                $customer->img=$path;
                $customer->save();
                return view('customer');
             }
          if($req->isMethod('get')){
              return view('customer');
             }
         }

       public function editCustomer(Request $req){
           $items=$req->all();
           if($req->isMethod('post')){
                Customer::where('id','=',$items['id'])->update(['first_name'=>$items['firstname'],'last_name'=>$items['lastname'],'mobile'=>$items['mobile'],'gender'=>$items['gender']]);
                return redirect('editcustomer?id='.$items['id']);
            }
           if($req->isMethod('get')){
               $deatils=Customer::where('id','=',$items['id'])->first();
               return view('editcustomer',array('values'=>$deatils));
           }
       }
       
       public function deleteCustomer(Request $req){
        $inputs  = $req->all();
        //if ($req->isMethod('post')) {
        Customer::where('id','=',$inputs['id'])->update(['status'=>'inactive']);
        return redirect('customer');
       }
}
