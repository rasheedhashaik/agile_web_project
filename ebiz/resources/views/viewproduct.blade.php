<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet"> 
            <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
            
            <style>
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

            </style>
    </head>
   <body>
    <div class="container-fulied">
        <div class="row header" style="font-family:'Arvo', serif">
            <div class="col-md-2 col-sm-2 text-center">
                <div class="dropdown"style="top:20px;">
                    <button class="dropdown-toggle btn " id="hello" data-toggle="dropdown" style="letter-spacing:1px;background-color:5bc0de;">
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
            <div class="col-md-2 offset-md-3 col-sm-2 offset-sm-3 text-center ">
                <a href="shope2" style="text-decoration:none; color:white;padding-top:10%;"><h1>EBIZ</h1><a>                     
            </div>
            <div class="col-md-2  offset-md-1  col-sm-2 offset-sm-1 text-right"style="top:14px;padding-right:10px">
                <a href="viewcart" style="text-decoration:none;color:#f4f9f9;"><img src="shopping-cart.png" style="width:50px;height:40px;padding-right:8px;">Cart</a>
            </div>
            <div class="col-md-2  col-sm-2 text-left "style="top:20px;padding-right:10px">
                <a href="logout" style="text-decoration:none;color:#f4f9f9;"><img src="exit.png" style="width:43px;height:30px;padding-right:8px;">Logout</a></div>
            </div>
        </div>            
        </div> 
        <div class="container">           
                <div class="row" style="">
                    <div class="col-md-6 text-center" style="margin-top:10%;border-radius:1%;border:1.5px solid black;padding:2% ;padding-top:10%">
                        <div >
                        <img class="w-50 " src='../storage/app/{{$values->img}}'/>
                        <h3 style="color:#5bc0de"> {{$values->name}}</h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-center" style="margin-top:20%;border:px solid black;padding:5%">
                    <h2>{{$values->name}}</h2><br/>
                    <h4>{{$values->description }}</h4><br/><br/>
                    <h2>Price: {{$values->price}}</h2><br/>
                    <div class="row">
                        <!--<div class="col-md-6">
                            <a href='#' class="btn btn-danger" style="width:100%;" role="button">Make Buy</a>
                        </div>-->
                        <div class="col-md-6 offset-md-3">
                             <a href='addtocart?id={{$values->id}}'style="width:100%;"  class="btn btn-info" role="button">Add To Cart</a>
                         </div>
                    </div>
                    </div>
                </div>
         </div>
      <!-- <h1> {{$values->id}}</h1>-->
       
    </body>
    
</html>