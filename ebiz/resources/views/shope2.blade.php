
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
       <!-- <link rel="stylesheet" type="text/css" href="css/style.css">-->
       <style>
           body{
    color:#434444;
    background:#fff;
}
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

.container{
    padding-top:60px;
}
hr{
    width:500px;
    border:2px solid #434444;
}
img{
    width:115px;
    height:170px;
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
	color: #6a7477;
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
    background:#6a7477;
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
            <div class="col-md-2 col-md-offset-3 col-xs-2 col-xs-offset-1">
                <h1 class="text-center title"><a href="shope2" style="text-decoration:none;color:white;marhin-right:0%;">EBIZ<a></h1>                     
            </div>
            <div class="col-md-1 col-md-offset-2 text-center col-xs-2 col-xs-offset-1"style="top:20px;">
                <a href="viewcart" style="text-decoration:none;color:#6a7477;"><button class="btn" style="letter-spacing:1px;background-color:#5bc0de;width:110px">Cart</button></a>
            </div>
            <div class="col-md-1  col-xs-1 text-center"style="top:20px;">
                <a href="logout" style="text-decoration:none;color:#6a7477;"><button class="btn" style="letter-spacing:1px;background-color:#5bc0de;width:110px">Logout</button></a>
            </div>
            <div class="col-md-1  col-xs-1 text-center"style="top:20px;">
                <a href="yourorders" style="text-decoration:none;color:#6a7477;"><button class="btn" style="letter-spacing:1px;background-color:#5bc0de;width:110px">My Orders</button></a>
            </div>
        </div>            
    </div>
    <div class="container" style="margin-top:50px">              
        
                <div class="row">   
                    <?php
                    
                        $products = App\Products::where('status','=','active')->get();
                        

                        foreach ($products as $product) {
                    ?>                   

                    <div class="col-md-2 product-grid">
                                <div class="image text-center">
                                    <a href="viewproduct?id={{$product->id}}">
                                        <img src='../storage/app/{{$product->img}}' class="w-100">
                                        <div class="overlay">
                                            <div class="detail">View Details</div>
                                        </div>
                                    </a>
                                </div>
                                <h5 class="text-center"><b>{{$product->name}}</b></h5>                           
                            <h5 class="text-center">Price: {{$product->price}}</h5>
                            <h5 class="text-center">Stock: {{$product->stock}}</h5>
                            <a href='addtocart?id={{$product->id}}' class="btn Buy">Add To Cart</a>
                    </div>

                    <?php     
                    }
                    ?>
                </div>   
             </div>
         
     </div>


<!--<div class="row ">
<footer class="text-center footer-site">
     <p>Thanks for visiting</p>
</footer>
</div>-->
</body>
</html>

