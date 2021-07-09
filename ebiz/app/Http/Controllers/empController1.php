<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use App\Student;
use App\Employee;




use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class empController1 extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function emp_details(Request $req){
        $items=$req->all();
       if(isset($items)){
           if($items["ope"]=="add"){                
                $employee = new Employee();
                $employee->emp_id = $items["id"];
                $employee->emp_name = $items["name"];
                $employee->salary = $items["salary"];
                $employee->dept = $items["dept"];
                $employee->save();
            }
            elseif($items["ope"]=="delete"){
                Employee::where('emp_id', '=',$items["id"])->update(["status"=>"inactive"]);

            }
            elseif( $items["ope"]=="update"){  
                Employee::where('emp_id', '=',$items["id"])->update(["emp_name"=>$items["name"],"salary"=>$items["salary"],"dept"=>$items["dept"]]);

            }
            elseif( $items["ope"]=="Undo"){ 
                Employee::where('emp_id','=',$items["id"])->update(["status"=>"active"]);
            }
            return view('emp');
        }
    }

    
}
