
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body{
            font-family: 'Arvo', serif;
            }
        img{
            width:100px;
            height:100px;
        }         
        .table td, .table th {
            padding: .75rem;
            vertical-align: top;
            border-top: 0px solid #dee2e6; 
        }
        input[type="text"]{
            color:black;
            border:2px solid black;
            background:transparent;
            width:100%;
        }

        input[type="file"]{
            width:100%;
            border:none;
            background:transparent;
        }
        
        a {text-decoration: none;
        color:white;
        padding:1px;
        } 
        a:hover
        {
            color:black;
        }
        .navbar{
            background:#5bc0de;
        }

        th{ background-color:#5bc0de;
            color:white;
            letter-spacing:1px;
            font-size:20px;
        }
        li{
           padding-left:20px;
           padding-right:20px;
        }
        
        .edit{
            text-decoration:none;
            color:#5bc0de;
        }
        .edit:hover{
            text-decoration:none;
            color:black;        
        }
        
        .delete{
            text-decoration:none;
            color:#5bc0de;
        }
        .delete:hover{
            text-decoration:none;
            color:black;        
        }
        .botton{
            background:#5bc0de;  
            color:white;           
            border:1px solid white;         
            width:70%;
        }
        .botton:hover{
            border:1px solid black;
            background:skyblue;
            color:black;              
        }
        .size{
            width:10px;
        }
        .table2 td{
            /*margin-left:0px;*/
            padding-left:0px;
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
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target"><span class="navbar-toggler-icon"> <img src="menu.png" style="height:30px;width:30px;"></span></button>
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
                                
                                <li class="nav-item">
                                    <a class="nav-link text-right" href="logout">Logout</a>
                                </li>                       
                            </ul>
                            
                        </div>      
                </nav>
            </div>    
        </div>
</div>

<div class="containor">
    <div class="row col-md-4 offset-md-5" style="margin-top:150px;color:#5bc0de;font-family: 'Arvo', serif;"> <h1>Products</h1> </div>
        
    <div class="row ">          
        <div class="col-md-4 offset-md-4" style="margin-top:2%;">     
            <form action="products" method="post" enctype="multipart/form-data" >
                @csrf   
                <table class="table table1">  
                    <tr>
                        <td ><b>Name</b></td>
                        <td><input type="text" name="name"></td>
                    </tr>                                  
                    <tr>
                        <td><b>Description</b></td>
                        <td><input type="text" name="des"></td>
                    </tr>                   
                    <tr>
                        <td><b>Price</b></td>
                        <td><input type="text" name="price"></td>
                    </tr>
                    <tr>
                        <td><b>Catalog</b></td>
                       <td> <select name="catalog" style="width: 100%;border:2px solid black">
                        <?php
                             $catalogs = App\Catalog::where('status','=','active')->get();
                                foreach($catalogs as $catalog){ ?>
                                <option value="{{$catalog->id}}">{{$catalog->name}}</option>
                        <?php   } ?>
                        </select>
                        </td>
                    </tr>
                    <!--<tr>
                        <table class="table table2" style="font-size:12px;" hidden="hidden"> 
                            <tr>
                                <td>
                                    <b>small</b>
                                    <input type="text" name="size1" class="size">
                                </td>
                                <td>
                                    <b>medium</b>
                                    <input type="text" name="size2" class="size">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>large</b>
                                    <input type="text" name="size3" class="size">
                                </td>
                                <td>
                                    <b>xtra large</b>
                                    <input type="text" name="size4" class="size">
                                </td>
                            </tr>
                        </table>
                    </tr>-->
                    <tr>
                        <td><b>Stock</b></td>
                        <td><input type="text" name="stock"></td>
                    </tr>
                                     
                    <tr>
                        <td>
                        <b>Image</b>
                        </td>
                        <td>
                        <input type="file" id="real-file" name='img_file'>                                           
                        </td>                           
                    </tr>               
                    <tr>
                        <td></td><td ><input class="btn botton" type="submit" value="Submit"></td>
                    </tr> 
                </table>                            
            </form>
        </div>   
    </div>
        
    
    <?php 
        $my_id=Auth::user()->id;
        $products = App\Products::where('created_by','=',$my_id)->where('status','=','active')->get();  ?> 
        <div class="row col-md-10 offset-md-1">
        <table class='table table-hover table-striped' style="background-color:white;box-shadow:2px 1px 15px skyblue;">
            <tr><th>Name</th><th>Description</th><th>Stock</th><th>Price</th><th>Image</th><th>Actions</th></tr>
            <?php
                foreach ($products as $product)
                { 
                ?>
            <tr>
                <td>{{$product->name}}</td> 
                <td>{{$product->description}}</td>
                <td>{{$product->stock}}</td>
                <td>{{$product->price}}</td>
                <td><img src=' ../storage/app/{{$product->img}}'/></td>
                <td>   
                <a class="edit " href='editproduct?id={{$product->id}}'><b>&nbsp;&nbsp;Edit</b></a><br><br>
                <a class="delete" href='deleteproduct?id={{$product->id}}'><b>&nbsp;&nbsp;Delete</b></a>
                </td>
            </tr>
            <?php
                }
                ?>
        </table>
        </div>
</div>
</body>

</html>
    
        
    
    
        