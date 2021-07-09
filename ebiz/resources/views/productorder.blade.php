<html>
<head>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        th{
            background:#5bc0de;
            color:white;letter-spacing:1px;
            font-size:20px;font-family:'Trebuchet MS', 'Open Sans Condensed', sans-serif;"
        }
        .navbar{
            background:#5bc0de;
            font-family:'Arvo', serif;
        }
        a {text-decoration: none;
        color:white;
        padding:1px;
        } 
        a:hover
        {
            color:black;
        }
        li{
           padding-left:20px;
           padding-right:20px;
        }
        </style>
</head>
    <body>
        <div class="containor">
            <div class="row ">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-md fixed-top ">
                            <div class="navbar-brand"><h1 style="letter-spacing:1px;color:white;">Ebiz<h1></div>
                            <div class="navbar-text" style="letter-spacing:1px;color:white;margin-left:5%;"><h5>{{Auth::User()->name}}</h5></div>
                            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target"><span><img src="menu.png" style="height:30px;width:30px;"></span></button>
                            <div class="collapse navbar-collapse" id="collapse_target">
                                <ul class="navbar-nav mr" style="margin-left: 63%; padding:2px;">                    
                                    <li class="nav-item">
                                        <a class="nav-link text-right" href="products">Products</a>                            
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="nav-link text-right" href="catalog">Catalog</a>
                                    </li>-->

                                    <li class="nav-item" >
                                        <a class="nav-link text-right" href="productorder">Orders</a>
                                    </li>
                                    <!--<li class="nav-item" style="margin-left:70%;">
                                        <h3 style="letter-spacing:1px;color:white;">{{Auth::User()->name}}</h3>
                                    </li>-->
                                    <li class="nav-item">
                                        <a class="nav-link text-right" href="logout">Logout</a>
                                    </li>                       
                                </ul>
                                
                            </div>      
                    </nav>
                </div>    
            </div>
    
        
            <div class="row">
                <div class="col-md-2 offset-md-5 text-center" style="color:#5bc0de;font-family:'Arvo', serif;margin-top:150px;">
                    <h1>Orders</h1>
                </div>
            </div>
            <div class="row" style="margin-top:3%;">
                <div class="col-md-12 ">
                    <table class="table table-striped table-hover table-condensed" style="box-shadow:2px 1px 15px skyblue;">
                    <?php
                            $items = App\Order_products::where('vendor_id','=',Auth::user()->id)->get(); ?>
                        <th>order id</th>
                        <th>Name</th>
                        <th>product</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">cust id</th>                                     
                        <th class="text-center">Details</th>
                        <th>status</th>
                        <th>change status</th>
                <?php foreach($items as $item){
                        $products = App\Products::where('created_by','=',$item->vendor_id)->where('id','=',$item->product_id)->get(); ?>
                        
                        <?php foreach($products as $product){ ?>
                                <tr>
                                <td class="text-center">{{$item->id}}</td>
                                <td >{{$product->name}}</td>                                
                                <td class="text-center"><img style="height:100px;width:100px;" src='../storage/app/{{$product->img}}'></td>
                                <td class="text-center">{{$product->price}}</td>
                                <td class="text-center">{{$item->created_by}}</td>
                                <?php $customer = App\User::where('id','=',$item->created_by)->where('status','=','active')->get(); 
                                foreach($customer as $customer){ ?>
                                <td class="text-left"><b>Name: </b>{{$customer->name}} <br>
                                <b>Mobile: </b>{{$customer->mobile}}<br>
                                <?php }  ?>             
                                <?php $inputs = App\Orders::where('id','=',$item->order_id)->get(); 
                                foreach($inputs as $input){ ?>
                                    <b>Address: </b>{{$input->address}}</td>
                        <?php } ?>
                                <td class="text-center">
                                {{$item->state}}
                                </td class="text-center">
                                <td class="text-center">
                                <?php if($item->state=='delivered'){?> -- <?php } else{?>                               
                                <form action="changeStatus" method="post" enctype="multipart/form-data">
                                @csrf                        
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <select name="order_status">
                                    
                                    <option value="placed">placed</option>
                                    <option value="shipped">shipped</option>
                                    <!--<option value="cancel">cancel</option>-->                                    
                                    </select>
                                    <input type="submit" value="go">
                                </form>
                                <?php } ?>    
                                </td>
                                </tr>
                    <?php     }               
                        }?>
                    </table>
                </div>    
            </div>    
        </div>    
    </body>
</html>