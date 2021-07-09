<html>
    <head>
        <style>
            table,tr,td,th{
                border:1px solid black;
            }
        </style>
    </head>
    <body>
        <form action="work" method="post">
            @csrf
            <table>
                <tr>
                <td>Student Name</td>
                <td><input type="text" name="name1"></td>
                </tr>
                <tr>
                <td>Father Name</td>
                <td><input type="text" name="name2"></td>
                </tr>
                <tr>
                <td>Grade</td>
                <td>
                    <input type="text" name="grade">
                </td>
                </tr>
                <tr>
                <td>Mobile</td>
                <td>
                    <input type="text" name="mob">
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
    $students = App\Employee::where('status','=','active')->get();
   echo "<table>";
   echo "<tr><th>Name</th><th>Father Name</th><th>Grade</th><th>Mobile No.</th></tr>";
   foreach ($students as $student) {
        echo "<tr>";
        echo "<td>".$student->name."</td>" ;
        echo "<td>".$student->father_name."</td>" ;
        echo "<td>".$student->gpa."</td>" ;
        echo "<td>".$student->mobile."</td>" ;

        
        echo "</tr>";
   }
   echo "</table>";

?>
</html>