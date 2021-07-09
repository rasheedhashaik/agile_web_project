<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <style>
        .header{
    position:fixed;
    width:100%;
    height:80px;
    border:0px solid black;
    top:0;
    left:0;
    background:#6a7477;
    z-index:5;
}
        th{
            background:#5bc0de;
            color:white;letter-spacing:1px;
            font-size:20px;font-family:'Trebuchet MS', 'Open Sans Condensed', sans-serif;"
        }
        .cancel{
            margin-top:22%;
            background-color:#5bc0de;
            color:white;
        }
        .cancel:hover{
            background-color:#149bbc;
        }
    </style>
    </head>
    <body>
    <div class="container-fulied">
            <div class="row header" style="font-family:'Arvo', serif">
                <div class="col-md-2 text-center col-xs-4">
                    <div class="dropdown"style="top:20px;">
                        <button class="dropdown-toggle btn " id="hello" data-toggle="dropdown" style="letter-spacing:1px;background-color:#5bc0de;">
                            Category<span class="caret"></span>
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
                <div class="col-md-2 offset-md-3 col-xs-2 col-xs-offset-1" style="margin-top:16px;">
                    <h1 class="text-center title"><a href="shope2" style="text-decoration:none;color:white;">EBIZ<a></h1>                     
                </div>
                <div class="col-md-2 offset-md-1 text-right col-xs-2 col-xs-offset-1"style="top:20px;">
                    <a href="viewcart" style="text-decoration:none;color:#6a7477;"><button class="btn" style="letter-spacing:1px;background-color:#5bc0de;width:108px">Cart</button></a>
                </div>
                <div class="col-md-1  col-xs-1 text-left"style="top:20px;">
                    <a href="logout" style="text-decoration:none;color:#6a7477;"><button class="btn" style="letter-spacing:1px;background-color:#5bc0de;width:108px">Logout</button></a>
                </div>
                <div class="col-md-1  col-xs-1 text-left"style="top:20px;">
                    <a href="yourorders" style="text-decoration:none;color:#6a7477;"><button class="btn" style="letter-spacing:1px;background-color:#5bc0de;width:108px">My Orders</button></a>
                </div>
            </div>            
        </div>    
        <div class="containor">
            <div class="row" style="margin-top:8%;">
                <div class="col-md-2 offset-md-5 text-center" style="color:#5bc0de;font-family:'Arvo', serif;">
                    <h1>My orders</h1>
                </div>
            </div>
            <div class="row" style="margin-top:3%;">
            <div class="col-md-8 offset-md-2">
                <table class="table table-striped table-hover table-condensed" style="box-shadow:2px 1px 15px skyblue;">
                    <th>Name</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Delivery status</th>
                    <th>Action</th>
                    <?php         
                    $items = App\Order_products::where('created_by','=',Auth::user()->id)->get();
                    foreach($items as $item){
                        $pid=$item->product_id;
                        $products = App\Products::where('id','=',$pid)->where('status','=','active')->get(); ?>
                        <tr><?php foreach($products as $product){?>
                                    <td>{{$product->name }}</td>
                                    <td><a href="viewproduct?id={{$product->id}}"><img style="height:100px;width:100px;" src='../storage/app/{{$product->img}}'></a></td>
                                    <td>{{$product->price }}</td>
                            <?php } ?>
                            <td>                                                        
                            <?php if($item->state=='shipped') {?> Shipped <?php } ?>
                            <?php if($item->state=='placed') {?> Placed <?php } ?>
                            <?php if($item->state=='delivered') {?> Delivered <?php }?>
                            <?php if($item->state=='cancel') {?> Canceled <?php }?>
                            </td>
                            <td><a href="ordercancel?id={{$item->id}}"><button class="btn cancel">cancel</button></a></td>
                        </tr>
              <?php }?>
                </table>
            </div>    
            </div>
        </div>                        
    </body>
</html>