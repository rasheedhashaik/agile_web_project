<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>              
    </head>
    <style>
    body{
        font-family: helvetica, serif;
    }
    .table td, .table th {
         padding: .75rem;
         vertical-align: top;
         border-top: none;
         padding:20px;    
    }
    table{
       /* border:1px solid skyblue;*/
        box-sizing:border-box;
        box-shadow: 0px 1px 10px black; 
        }
    textarea{
        width:100%;
        height:100%;
        color:skyblue;
    }
    table{
        box-shadow:2px 1px 18px skyblue;
    }
    </style>
<body>    
   
            <div class="container"style="margin-left:0;margin-right:0;">
                <div class="row" style="background:#5bc0de;height:8%;border:0.5px solid #5bc0de;width:100%;top:0;position:fixed;z-index:5;">                   
                        <div class="col-md-4  ">
                        </div>
                        <div class="col-md-4  text-center" style="color:white;padding-top:10px ">
                            <h1>EBIZ</h1>
                        </div>
                        <div class="col-md-4  text-center">
                            <!--<a href="payfromcart" role="button" class="btn btn-danger">Buy Items </a>-->
                        </div>                   
                </div>
            </div>
        <div clss="containor">
        <div class="row" style="position:absolute;top:10%;">
        </div>
        <div class="row" style="margin-top:10%;">
            <div class="col-md-4 offset-md-4" style="margin-top:0%;padding:10px">
                <form method="post" action="payfromcartconform">
                @csrf
                    <table class="table table-striped table-hover text-center">
                        <tr>
                            <td style="letter-spacing:1.5px;font-size:20px;font-weight:;color:red;">Name</td>
                            <td style="color:;font-size:20px;text-transform:uppercase">{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;color:red;">Email</td>
                            <td style="color:;">{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;color:red;">Mobile</td>
                            <td style="color:;">{{Auth::user()->mobile}}</td>
                        </tr>
                    <tr>
                    <td style="letter-spacing:2px;font-size:20px;font-weight:;color:red;">Address</td>
                    <td style="color:;"><textarea class="address" rows=6 cols=40 name="address" style="border:1px solid black"></textarea></td>
                    </tr>
                    <tr><td colspan="2"><input class="btn btn-success" style="margin-left:40%" type="submit" value="Confirm"></td></tr>
                    </table>
                <form>
            </div>   
        </div>
    </div>
</body>

</html>