<html>
    <head></head>
    <body>
        <form action="work.php" method="post">
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
                
                <tr><td></td>
                    <td><input type="submit" value="submit">
                </tr>
            </table>
        </form>
 <?php
 //$name=$father=$grade1=$mobile="";
 //if(isset($_POST['submit'])){
    $name= $_POST['name1'];
    $father= $_POST['name2'];
    $grade1=$_POST['grade'];
    $mobile= $_POST['mob'];
    echo $name;
    echo $father;
    echo $grade1;
    echo $mobile;// }
    //$details=arraya($name,$father,$grade,)
?>

    </body>

</html>