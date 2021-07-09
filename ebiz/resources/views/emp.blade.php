<html>
    <head>
        <style>
            table,tr,td{
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <form action="emp" method="post">
            @csrf
            <table>
                <tr>
                <td>Employee Id</td>
                <td><input type="text" name="id"></td>
                </tr>
                <tr>
                <td>Employee Name</td>
                <td><input type="text" name="name"></td>
                </tr>
                <tr>
                <td>salary</td>
                <td>
                    <input type="text" name="salary">
                </td>
                </tr>
                <tr>
                <td>dept.Name</td>
                <td>
                    <input type="text" name="dept">
                </td>
                </tr>
                <tr>
                <td>operation</td>
                <td>
                    <select name="ope">
                    <option value="select">--Select--</option>
                    <option value="add">ADD</option>
                    <!--<option value="display">Display</option>-->
                    <option value="update">update</option>
                    <option value="delete">Delete</option>
                    <option value="Undo">Undo</option>
                    
                    </select>
                </td>
                </tr>
                <tr><td></td>
                <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    
    </body>

<?php
/*if(session()->exists('user')){
    $data1=session()->get('user');
   // echo "are you coming";
   //session()->put('user',array());
   //echo "yes iam here";
    print_r($data1);*/
  
   echo "<table>";
   $employes=App\Employee::where("status","=","active")->get();
   echo "<tr><th>ID</th><th> Name </th><th>Salary</th><th>detp.name</th></tr>";
    foreach($employes as $employee){
        echo "<tr>";
       /* foreach($dt as $y){*/
            echo "<td>".$employee->emp_id."</td>" ;
            echo "<td>".$employee->emp_name."</td>" ;
            echo "<td>".$employee->salary."</td>" ;
            echo "<td>".$employee->dept."</td>" ;
        //}
        echo "</tr>";
   }
   echo "</table>";
//}

?>
</html>