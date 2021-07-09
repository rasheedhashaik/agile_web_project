
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
            <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
        <style>
        body{

            width:100%;
        }
            img{
                width:100px;
                height:100px;
            }

            .header{
                position:fixed;
                width:100%;
                height:10%;
                border:0px solid black;
                top:0;
                left:0;
                background:#6a7477;
                z-index:5;
            }

            .footer-site{
                width:100%;
                height:4%;
                border:0px solid black;
                background:rgba(0,0,0,0.7);
                color:white;
                padding:10px;
                left:0;
                margin-top:0%;
                margin-bottom:0%;
                right:0;
                position: fixed;
                bottom:0;
                z-index:5;
                text-align:center;
            }
            table{
                box-shadow:2px 1px 15px skyblue;
            }
            
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        </head>
        <body>
            <div class="container-fulied">
                <div class="row header" style="font-family:'Arvo', serif">
                    <div class="col-md-2 col-xs-2 text-center">
                        <div class="dropdown"style="top:20px;">
                            <button class="dropdown-toggle btn" id="hello" data-toggle="dropdown" style="letter-spacing:1px;background-color:5bc0de;">
                                Catalog<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu text-center" aria-labelledby="hello">
                                <?php
                                $Catalogs = App\Catalog::where('status','=','active')->get();

                                    foreach ($Catalogs as $Catalog) {
                                ?>
                                <li><a href="category?cat={{$Catalog->id}}">{{$Catalog->name}}</li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 offset-md-3 col-xs-2 offset-xs-3 text-center ">
                        <a href="shope2" style="text-decoration:none; color:white; padding-top:10%;"><h1>EBIZ</h1><a>                     
                    </div>
                    <div class="col-md-2  offset-md-2  col-xs-2 offset-xs-2 text-right"style="top:14px;padding-right:10px">
                        <a href="viewcart" style="text-decoration:none;color:#f4f9f9;"><img src="shopping-cart.png" style="width:50px;height:40px;padding-right:8px;">Cart</a>
                    </div>
                    <div class="col-md-1  col-xs-1 text-left "style="top:20px;padding-right:10px">
                        <a href="logout" style="text-decoration:none;color:#f4f9f9;"><img src="exit.png" style="width:43px;height:30px;padding-right:8px;">Logout</a></div>
                    </div>
                </div>            
            </div> 
            <div class="container-fulide">
                <div class="row " style="margin-top:100px"><div class="col-md-2 offset-md-10"><a href="payfromcart" role="button" class="btn btn-success" >Check out</a></div></div>
                <!--<div class="row" style="margin-top:5%">-->
                <div class="row" style="margin-top:3%">
                    <div class="col-md-1 ">
                    </div>
                    <div class="col-md-10 " >
                        <table class="table table-striped table-hover table-condensed">
                            @csrf
                            <thead style="background:#5bc0de;color:white;letter-spacing:1px; font-size:20px;font-family:'Trebuchet MS', 'Open Sans Condensed', sans-serif;">
                                <tr class="text-center">
                                    <th >Name</th>
                                    <th>Product</th>
                                    <th>Price</th>                                   
                                    <th>Description</th>
                                    <!--<th>Quantity</th>
                                    <th>total</th>-->
                                    <th></th>
                                    
                                </tr>
                            </thead>
                           
                            <?php
                                 
                                  $cartitemsids= session()->get('cart');$amount=0;
                                  foreach($cartitemsids as $itemid ){
                                  $products = App\Products::where('id','=',$itemid)->where('status','=','active')->get();
                                foreach ($products as $product) {
                            ?>
                         <tr class="text-center" id='{{$product->id}}'>
                                <td style="text-transform:uppercase"><h5>{{$product->name}}</h5></td>
                                <td><img src='../storage/app/{{$product->img}}' class="img-responsive"/></td>                   
                                <td id="price"><h4>{{$product->price}}</h4></td>
                                <td><h5>{{$product->description }}</h5></td>
                               <!-- <td><h2><input type="number" min="1" max="10" id="cells" onmouseover="abc()" style="width:35%;margin-top:15%;" ></h2></td>                                
                                
                                <script>
                                var price = document.getElementsById("price").value;
                                function abc(){
                                var qunty = document.getElementsById("cells").value;
                                document.write(qunty);
                                
                                </script>--> 
                                
                                <td style="padding:40px"><button class="btn btn-info " style="background:#5bc0de;" onclick="deleteRow('{{$product->id}}')">Remove</button> </td>
                          </tr>                
                            <?php   
                
                                 }
                              }
                             ?>

                        </table>
                    </div>
                    <div class="col-md-1 ">
                    </div>
                </div> 
                <div class="row footer-site">
                            <div class="col-md-2"></div>
                        <div class="col-md-8"> <p>Thankyou For Visiting My Website</p>     </div>  
                         <div class="col-md-2"></div>         
                 </div>               
            </div>
        </body>

        <script>
    function deleteRow(rowId){
            $("#"+rowId).hide();
           url="removefromcart?id="+rowId;
            $.ajax({url: url, success: function(result){                
              alert("product delete success " );
            }});
        }
    </script>
    </html>