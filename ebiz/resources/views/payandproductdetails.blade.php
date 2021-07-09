
        <!--<tr>
            <td>customerId</td>
            <td>ebiz{{$values->id}}</td>
        </tr>-->
 <html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>              
    </head>
    <style>
    .table td, .table th {
         padding: .75rem;
         vertical-align: top;
         border-top: none;
         padding:20px;    
    }
    table{
        border:0.px solid black;
       /* box-sizing:border-box;
        box-shadow: 0px 1px 10px black; */
        }
    textarea{
        width:100%;
        height:100%;
        color:skyblue;
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
        <div class="row text-center" style="position:absolute;top:15%;left:50%;transform:translateX(-50%);">
        <h4 class=""style="color:red">  * successfully completed your order  </h4>
        </div>
        <div class="row" style="margin-top:10%;">
            <div class="col-md-4 offset-md-4" style="margin-top:0%;padding:10px">
                <form method="get" action="payfromcartconform">
             
                @csrf
                    <table class="table  table-hover text-center">
                        <tr>
                            <td style="letter-spacing:1.5px;font-size:20px;font-weight:;color:black;font-family: Georgia, serif;">Customer Name</td>
                            <td style="color:skyblue;font-size:20px;text-transform:uppercase">{{Auth::user()->name}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;font-family: Georgia, serif;">Customer Id</td>
                            <td style="color:skyblue;">Ebiz00{{$values->customer_id}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;font-family: Georgia, serif;">Order Id</td>
                            <td style="color:skyblue;">EbizOrder0{{$values->id}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;font-family: Georgia, serif;">Email</td>
                            <td style="color:skyblue;">{{Auth::user()->email}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;font-family: Georgia, serif;">Mobile</td>
                            <td style="color:skyblue;">{{Auth::user()->mobile}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;font-family: Georgia, serif;">Date</td>
                            <td style="color:skyblue;">{{$values->order_date}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;font-family: Georgia, serif;">Address</td>
                            <td style="color:skyblue;">{{$values->address}}</td>
                        </tr>
                        <tr>
                            <td style="letter-spacing:2px;font-size:20px;font-family: Georgia, serif;">Total Amount</td>
                            <td style="color:skyblue;">{{$values->total_amount}}</td>
                        </tr>
                       <!-- <tr>
                            <td style="letter-spacing:2px;font-size:20px;color:red;font-family: Georgia, serif;">Expected Date</td>
                            <td style="color:skyblue;">{{$values->order_date}}</td>
                        </tr>-->
                   
                    <tr><td colspan="2"><a href="yourorders"  class="btn btn-success" role="button" style="margin-left:40%"  >My Orders</a></a></td></tr>
                    </table>
                <form>
            </div>   
        </div>
    </div>
</body>

</html>