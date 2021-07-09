<html>
    <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css" />
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.theme.css" />
 
    </head>
    <style>
        body{
            color:black;
        }
     .fa1{
            color:white;
        }
        .fa1:hover{
            color:red;
        }
          /* .fa4{
            color:white;
        }
        .fa3{
            color:white;
        }*/
        .two:hover{
            border-bottom:1px solid white;
        }
        .one:hover{
            background: black;
            border:1px solid black;
        }
        #size{
            font-size: 28px;
            background: red;
            color:white;
            border-radius:10px;
            padding:1px;
            padding-left:10px;
            padding-right: 10px;
        }
        .hello{
            background:#5bc0de;
            z-index:5px;
        }
        .carousel-item{
            height:100vh;
            min-height: 300px;
            background:no-repeat center center scroll;
            background-size: cover;
        }
        .carousel-item .carousel-caption{
          
            margin-top:250px ;
            transform: translateY(-50%);
            line-height: 30px;
        }
        .carousel-inner{
            height:700px;
        }
        .carousel-caption h5{
            letter-spacing: 3px;
            font-size: 50px;
            color:white;
            font-weight:inherit;
        }
        .carousel-caption p{
            color:white;
            font-size:18px;
            letter-spacing: 2px;
           /* line-height: 50%;*/
           text-transform: uppercase;
        }
        .style2{
            color:#5bc0de;
        }


        hr{
    width:500px;
    border:2px solid #434444;
        }
        .img1{
            width:300px;
            height:300px;
        }
        .image{
            position: relative;
        }
        .product-grid{
            padding-top: 20px;
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
        .pad{
            padding:100px;   
        }
        .img1{
            height:300px;
            width: 500px;
            margin-top:0px;
        }
        .slider1{
            background:rgba(0,0,0,0.2);
            height:100px;
        }
        .name{
            border: 1px solid ;
            
        }
        .image img{
            height:300px;
        }
        .image{
            top:10px;
            background: rgba(0,0,0,0);
            padding:30px;
        }
        .owl-next  {
            position: absolute;
            left: 53%;
            font-size: 15px;    
            padding-left: 10px;  
            padding-right: 10px;  
            border:2px solid skyblue; 
            text-transform:uppercase;
            letter-spacing:2px;
        }
        .owl-prev {
            position: absolute;
            left: 47%;
            font-size: 15px;    
            padding-left: 10px; 
            padding-right: 10px;  
            border:2px solid skyblue; 
            text-transform:uppercase; 
            letter-spacing:2px;
        }
       
        .dropul li a{
            color:black;
        }
        .name{
            border: 0px solid ;
           
        }
        .image img{
            height:300px;
        }
        .image{
            top:10px;
            background: rgba(0,0,0,0);
            padding:30px;
        }
       
 </style>
    <body>

            <nav class="navbar navbar-expand-lg navbar-light fixed-top hello">
                <div class="container">
                        <a class="navbar-brand text-center" href="#" style="font-weight:light;color:white;font-size:50px">E<span id="size">EBIZ</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="height:0%;">
                          <ul class="navbar-nav ml-auto" >
                            <li class="nav-item active " >
                             <!-- <a class="nav-link" href="#">Shop <span class="sr-only">(current)</span></a>-->
                              
                              <a class="nav-link btn two" role="button" href="shope2"  style="color:white;font-size:18px">
                              <i class="fa fa-home fa1"></i> Shop <span class="sr-only">(current)
                              </span>
                              </a>
                            </li>
                           
                            <div class="dropdown "style="top:0px;">
                        <button class="dropdown-toggle btn btn-info " id="hello"  data-toggle="dropdown" style="letter-spacing:1px;background:#5bc0de;border:none;">
                            Catalog<span class="caret"></span>
                        </button>
                        
                        
                        <ul class="dropdown-menu text-center dropul" aria-labelledby="hello">
                            <?php
                            $Catalogs = App\Catalog::where('status','=','active')->get();

                                foreach ($Catalogs as $Catalog) {
                            ?>
                            <li><a href="category?cat={{$Catalog->id}}">
                            {{$Catalog->name}}
                            </a></li>
                            <?php
                                }
                            ?>
                        </ul>

                    </div>
                            <li class="nav-item">
                                    <a class="nav-link btn two" role="button" href="viewcart"  style="color:white;font-size:18px"><i class="fa fa-shopping-cart fa3" aria-hidden="true"></i> Cart </a>
                                    
                                  </li>

                            <li class="nav-item">
                                    <a class="nav-link btn btn-outline-light one" href="logout" role="button"  style="color:white;font-size:18px"><i class="fa fa-sign-out fa4" aria-hidden="true"></i> Logout </a>
                                    
                            </li>
                          </ul>
                         <!-- <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                          </form>-->
                        </div>
                </div>
                   
            </nav>
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="phone.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5><span class="style2">W</span>ELCOME <span class="style2">T</span>O<span style="color:white"> E<span id=size>BIZ</span></span></h5>
                                    <p>One spot for all your wishes</p>
                                </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="macbook.png" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5><span class="style2">W</span>ELCOME <span class="style2">T</span>O<span style="color:white"> E<span id=size>BIZ</span></span></h5>
                                    <p>One spot for all your wishes</p>
                                </div>
                        </div>
                        <!--</div>-->
                        <div class="carousel-item">
                            <img class="d-block w-100" src="pixel3xl.webp" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                    <h5><span class="style2">W</span>ELCOME <span class="style2">T</span>O<span style="color:white"> E<span id=size>BIZ</span></span></h5>
                                    <p>One spot for all your wishes</p>
                                </div>
                        </div>
                     </div>
            </div>
                 <div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                 <!-- <h1 style="color:red">hello...!</h1>-->
               
                 <div class="image">
                        <div class="owl-carousel owl-theme">
                            <?php
                            $Catalogs = App\Catalog::where('status','=','active')->get();

                                foreach ($Catalogs as $Catalog) {
                            ?>
                            <div class="name">
                                <div class="item">
                                <a href="category?cat={{$Catalog->id}}">
                                <img src='../storage/app/{{$Catalog->img}}'/>
                                </a>
                                </div>
                                <h3 class="text-center">{{$Catalog->name}}</h3>
                            </div>
                            <?php
                                }
                            ?>
                                
                        </div>
                  </div>        
                  <div class="image">
                      <h2 class="text-center" style="letter-spacing:2px;">Products</h2>
                      <hr style="border-bottom:1px solid grey"/>
                        <div class="owl-carousel owl-theme">
                        <?php
                            $products = App\Products::where('status','=','active')->get();

                                foreach ($products as $product) {
                            ?>
                            <div class="name">
                                <div class="item">
                                <a href="viewproduct?id={{$product->id}}">
                                <img src='../storage/app/{{$product->img}}'/>
                                </a>
                                </div>
                                <h3 class="text-center">{{$product->name}}</h3>
                                <h4 class="text-center">Rs.{{$product->price}}</h4>
                            </div>
                            <?php
                                }
                            ?>
                                
                            </div>
                  </div>  
            


            <script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  
           <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
            <script type="text/javascript">
                $('.owl-carousel').owlCarousel({
                    loop:true,
                    margin:10,
                    responsiveClass:true,
                    responsive:{
                        0:{
                            items:2,
                            nav:true
                        },
                        300:{
                            items:3,
                            nav:false
                        },
                        600:{
                            items:5,
                            nav:false
                        },
                        1000:{
                            items:7,
                            nav:true,
                            loop:true
                        }
                    }
                })
                
            </script>
                
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>