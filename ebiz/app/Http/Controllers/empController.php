<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class empController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function test(Request $req){
        $items=$req->all();
        return view('calc',array("values"=>$items));
    }

    public function details(Request $req){
        $items=$req->all();
        //$req->session()->push('',$items);
       // return view('work',array("values"=>$items));

       if(isset($items)){
           if($items["ope"]=="add"){
                if ($req->session()->exists('user')){
                        $details=array();
                        $details[]=$items["id"];
                        $details[]=$items["name"];
                        $details[]=$items["salary"];
                        $details[]=$items["dept"];
                        $req->session()->push('user',$details);

                                // $data = $req->session()->get('users');
                                    //unset($data[7]);
                                    //$req->session()->put('users',$data);

                }
                else{
                    $details=array();
                    $details[]=$items["id"];
                    $details[]=$items["name"];
                    $details[]=$items["salary"];
                    $details[]=$items["dept"];
                    
                    $req->session()->push('user',$details);
                }
            }
            elseif($items["ope"]=="delete"){
               // echo "hello guys";
                $i=0;
                $data = $req->session()->get('user');
                foreach($data as $x=>$find){
                    if($find[0]==""){
                        continue;
                    }
                   // echo "iam here 1";
                      elseif($find[0]===$items["id"]){
                     //     echo "i am here 2";
                        unset($data[$i]);
                      //  echo "i am here 3";
                      //  $i++;
                        break;
                        echo "hello";
                         }
                         echo "</br>".$i;
                         $i++;

                }
                $req->session()->put('user',$data);

            }
            elseif( $items["ope"]=="update"){  
                $i=0;              
                $data = $req->session()->get('user');
                foreach($data as $up=>$dt){
                   if($dt[0]==""){
                        continue;
                    }
                    if($dt[0]===$items["id"]){
                        break;
                    }
                  $i++;
                }
                $data[$i][1]=$items["name"];
                $data[$i][2]=$items["salary"];
                $data[$i][3]=$items["dept"];
              //  $data[1][3]="dasfdsf";
                $req->session()->put('user',$data);

            }
            return view('emp');
        }
    }
}
   // public function work(Request $req){
     //   $items=$req=>all();
       // if($items[""]
    //}
   

