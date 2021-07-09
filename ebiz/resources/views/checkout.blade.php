<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>              
    </head>
<body>    
    <div clss="containor">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form method="post" action="checkout">
                @csrf
                    <table class="table">
                    <tr>
                    <td>Address</td>
                    <td><textarea class="address" rows=6 cols=40 name="address" style="border:1px solid black"></textarea></td>
                    </tr>
                    <tr><td colspan="2"><input style="margin-left:40%" type="submit" value="Confirm"></td></tr>
                    </table>
                <form>
            </div>   
        </div>
    </div>
</body>

</html>