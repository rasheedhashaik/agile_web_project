<html>
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <style>
            table,tr,td,th{
                border:1px solid black;
            }
            </style>
    </head>
    <body>
        @csrf
        <table>
            <tr>
                <th>Name</th>
                <th>Father Name</th>          
                <th>Mobile No</th>            
                <th>Dept.Name</th>
                <th>Action</th>
            </tr>
            <tr id='r1'>
                <td>Mahesh</td>
                <td>Prakasa Rao </td>
                <td>9949289040</td>
                <td>c.s.e</td>
                <td><button onclick="deleteRow('r1')">Delete</button></td>
            </tr>
            <tr id='r2'>
                <td>Sukash</td>
                <td>Sai</td>
                <td>9876543219</td>
                <td>c.se</td>
                <td><button onclick="deleteRow('r2')">Delete</button></td>
            </tr>
            <tr id='r3'>
                <td>Apple</td>
                <td>Pineapple</td>
                <td>9182736459</td>
                <td>eat</td>
                <td><button onclick="deleteRow('r3')">Delete</button></td>
            </tr>
            
        </table>
        <button id="bt1">Button1</button>
        <button id="bt2">Button2</button>
        <button id="bt3">Button3</button>
        <div id="div1">
        </div>
        <div id="div2">
        </div>
    </body>
    <script>
        $(document).ready(function(){
            $("#bt1").click(function(){
                $("#div1").html("this is button 1 click event"); 
                $("#bt2").hide();
            });
            $("#bt3").click(function(){
                $("#div1").html("this is button 3 click event"); 
                $("#bt2").show();
            });
        });

        function deleteRow(rowId){
            $("#"+rowId).hide();
        }
    </script>

</html>