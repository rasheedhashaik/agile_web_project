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

class ProductController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function products(Request $req){
        $items=$req->all();

        if ($req->isMethod('post')) {
            $product=new Products();
            $product->name=$items["name"];
            $product->description=$items["des"];
            $product->stock=$items["stock"];
            $product->price=$items["price"];
            $product->catalog_id =$items["catalog"];
            $path = Storage::putFile('uploads', $req->file('img_file'));
            $product->img=$path;  
            $product->created_by=Auth::user()->id;         
            $product->save();
            return view("product");
        }
        if($req->isMethod('get')){
            return view("product");
        }
        
    }

    public function editProduct(Request $req){
        
        $inputs  = $req->all();
        if ($req->isMethod('post')) {
            $path = Storage::putFile('uploads', $req->file('img_file'));
            Products::where('id','=',$inputs['id'])->update(['name'=>$inputs['name'],'description'=>$inputs['des'],'stock'=>$inputs['stock'],'price'=>$inputs['price'],'img'=>$path]);
            //return redirect('editproduct?id='.$inputs['id']);
            return view("product");
        }
        if($req->isMethod('get')){
            $products = Products::where('id','=',$inputs['id'])->get();
            foreach($products as $product){
            return view("editProduct",array("values"=>$product));
            }

        }
    }

    public function deleteProduct(Request $req){
        $inputs  = $req->all();
        if ($req->isMethod('get')) {
        Products::where('id','=',$inputs['id'])->update(['status'=>'inactive']);
        return view("product");
        } 
    }  

    public function viewProduct(Request $req){
        $inputs=$req->all();
        $product = Products::where('id','=',$inputs['id'])->first();
         return view("viewproduct",array("values"=>$product));
    }
}
