<html>
    <head>
        <style>
            table,tr,td{
                border:1px solid black;
            }
            img{
                width:100px;
            }
        </style>
    </head>
    <body>
        <form action="editcustomer" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                <td>First Name:</td>
                <td><input type="text" value="{{$values->first_name}}"  name="firstname"></td>
                </tr>
                <tr>
                <td>Last Name:</td>
                <td><input type="text" value="{{$values->last_name}}" name="lastname"></td>
                </tr>
                <tr>
                <td>Mobile:</td>
                <td>
                    <input type="text" value="{{$values->mobile}}" name="mobile">
                </td>
                </tr>
                <tr>
                <td>Gender:</td>
                <td>
                    <input type="text" value="{{$values->gender}}" name="gender">
                </td>
                </tr>
                <tr>
                <td>Address:</td>
                <td>
                    <textarea rows=5 cols=30 name="address">
                    "{{$values->address}}"</textarea>
                </td>
                </tr>
                <input type="hidden" name="id" value="{{$values->id}}">
                <tr>
              <!--  <td>Image</td>
                <td>
                    <input type="file" name="img_file">
                </td>
                </tr>-->
                <tr><td></td>
                <td><input type="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>