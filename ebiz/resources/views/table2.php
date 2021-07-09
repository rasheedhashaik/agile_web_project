
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <!-- <link rel="stylesheet" type="text/css" href="css/style.css">-->
       <style>
           body{
    color:#434444;
    background:#fff;
}
.header{
    position:fixed;
    width:100%;
    height:10%;
    border:0px solid black;
    top:0;
    left:0;
    background:#5bc0de;
    z-index:5;
}

.container{
    padding-top:60px;
}
hr{
    width:500px;
    border:2px solid #434444;
}
img{
    width:100%;
    height:40%;
}
.image{
    position: relative;
}
.product-grid{
    padding-top: 30px;
    padding-bottom: 20px;
}
.product-grid:hover{
    box-shadow: 0px 4px 6px rgba(0,0,0,0.2),0px 8px 20px rgba(5,0,0,0.19);
}
.overlay{
   position: absolute;
   top:0;
   right:0;
   left:0;
   bottom:0;
   height:100%;
   width: 100%;
   opacity:0;
   transition: 0.3 ease;
   background-color: rgba(67,68,68,0.7);
}
.image:hover .overlay{
    opacity: 1;
}
.detail{
	color: #fff;
	font-size: 20px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
}

.Buy{
    background: transparent;
    color:#434444;
    border-radius: 0px;
    border:1.5px solid #434444;
    width:100%;
    margin-top:25px;
}
.Buy:hover{
    background: #434444;
    color:white;
}
.footer-site{
    width:100%;
    height:4%;
    border:1px solid black;
    background:rgba(0,0,0,0.5);
    color:white;
    bottom:0;
    position:fixed;
    padding:10px;
    left:0;
    z-index:5px;
}
.title{
    letter-spacing:5px;
    color:white;
}
           </style>
    </head>
    <body>
    <?php?>
        <div class="container-fulied">
        <div class="row header">
            <div class="col-md-3 col-xs-4 col-md-offset-2 col-xs-offset-0">
                <div class="dropdown "style="top:20px;">
                    <button class="dropdown-toggle btn btn-success" id="hello" data-toggle="dropdown" style="letter-spacing:1px;">
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
            <div class="col-md-3 col-xs-4">
                <h1 class="text-center title">EBIZ</h1>                     
             </div>
            <div class="col-md-3 col-xs-3 text-right"style="top:20px;padding-right:10px">
            <a href="viewcart" target="_blank" class="btn btn-warning">View Cart</a>
            </div>
        </div>
            
        </div>
    <div class="container">
        <div class="row col-md-12">
            <div class="col-md-8 col-md-offset-2">                
            </div>   
            <div class="col-md-2">
                
            </div>
        </div>
        
        <div class="row">
           <!-- <div class="col-md-3">

            </div>
            <div class="col-md-9">
             first row-->
                <div class="row">   
                    <?php
                        $products = App\Products::where('status','=','active')->where('catalog_id','=','$_GET["cat"]')->get();print_r($products);die();

                        foreach ($products as $product) {
                    ?>
                    <!-- <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->discreption}}</td>
                        <td>{{$product->price}}</td>
                        <td><img src='../storage/app/{{$product->img}}'/></td>
                        <td><button><a target='_blank' href='addtocart?id={{$product->id}}'>Add To Cart</button> </td>
                    </tr>-->

                    <div class="col-md-3 product-grid">
                                <div class="image text-center">
                                    <a href="viewproduct?id={{$product->id}}">
                                        <img src='../storage/app/{{$product->img}}' class="w-100">
                                        <div class="overlay">
                                            <div class="detail">View Details</div>
                                        </div>
                                    </a>
                                </div>
                                <h2 class="text-center">{{$product->name}}</h2>
                            <h4 class="text-center">{{$product->discreption}}</h4>
                            <h3 class="text-center">Price: {{$product->price}}</h3>
                            <a href='addtocart?id={{$product->id}}' class="btn Buy">Add To Cart</a>
                    </div>

                    <?php     
                    }
                    ?>
                </div>   
             </div>
         </div>
     </div>


<div class="row ">
<footer class="text-center footer-site">
     <p>Thankyou For Visiting My Website</p>
</footer>
</div>
</body>
</html>