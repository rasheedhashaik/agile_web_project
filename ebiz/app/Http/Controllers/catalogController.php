<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Student;
use App\Catalog;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Storage;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class catalogController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function catalogs(Request $req){
        $items=$req->all();

        if ($req->isMethod('post')) {
            $catalog=new Catalog();
            $catalog->name=$items["name"];
            $catalog->discreption=$items["Description"];
            $path = Storage::putFile('uploads', $req->file('img_file'));
            $catalog->img=$path;
            $catalog->save();
            return view("catalog");
        }
        if($req->isMethod('get')){
            return view("catalog");

        }
          
    }

    public function editCatalog(Request $req){
        $inputs  = $req->all();
        if ($req->isMethod('post')) {
            $path = Storage::putFile('uploads', $inputs['img_file']);
            Catalog::where('id','=',$inputs['id'])->update(['name'=>$inputs['name'],'discreption'=>$inputs['Description'],'img'=>$path]);
            //return redirect('editcatalog?id='.$inputs['id']);
            return view("catalog");
        }
        if($req->isMethod('get')){
               $catlogs = Catalog::where('id','=',$inputs['id'])->get();
            foreach($catlogs as $catlog){
            return view("editcatalog",array("values"=>$catlog));
            }
        }
    }

    public function deleteCatalog(Request $req){
        $inputs  = $req->all();
       
            Catalog::where('id','=',$inputs['id'])->update(['status'=>'inactive']);
            return redirect('catalog');
    }   
}
