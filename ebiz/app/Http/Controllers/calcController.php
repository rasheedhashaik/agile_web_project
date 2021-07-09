<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;
use App\Employee;




use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class calcController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function test(Request $req){
        $items=$req->all();
        return view('calc',array("values"=>$items));
    }

    public function work(Request $req){
        $items=$req->all();
        //$req->session()->push('',$items);
       // return view('work',array("values"=>$items));

       if(isset($items)){
           if($items["ope"]=="add"){                
                $student = new Employee();
                $student->name = $items["name1"];
                $student->father_name = $items["name2"];
                $student->gpa = $items["grade"];
                $student->mobile = $items["mob"];
                $student->save();
            }
            elseif($items["ope"]=="delete"){
                Employee::where('name', '=',$items["name1"])->update(["status"=>"inactive"]);

            }
            elseif( $items["ope"]=="update"){  
                $i=0;              
                $data = $req->session()->get('users');
                foreach($data as $up=>$yt){
                   if($up[0]==" "){
                        continue;
                    }
                    if($up[0]==$items["name1"]){
                        break;
                    }
                  $i++;
                }
                $data[$i][1]=$items["name2"];
                $data[$i][2]=$items["grade"];
                $data[$i][3]=$items["mob"];
              //  $data[1][3]="dasfdsf";
                $req->session()->put('users',$data);

            }
            return view('work');
        }
    }

   // public function work(Request $req){
     //   $items=$req=>all();
       // if($items[""]
    //}
    
}
