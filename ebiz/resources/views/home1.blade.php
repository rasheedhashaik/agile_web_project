<html>
    <head>
   <!-- <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
        <style>
           body{
               padding:0px;
               margin:0px;
               background:white;
           }
           .nav ul{
               list-style:none;
               text-align:center;
               /*background-color: black;*/
               margin-top :30px;
               padding:0px;
           }
           .nav li{
               display: inline-block;
               padding-left: 100px;
           }
           .nav li a{
               text-decoration: none;
               display: block;
               width:100%;
               font-size:14px;
               padding:10px;
               color:rgb(129,118,109);
               letter-spacing:4px;
              text-transform: uppercase;
             
           }
           .all{
               text-align: center;
               margin-top: 15%;
           }
           .name{
               color:red;
               font-family:Courier New;
               font-size:65px; 
               font-weight: lighter;
               letter-spacing: 2px;
           }
           .nav li a:hover{
              background: white;
              border:1px solid black;
              box-shadow:2px 1px 15px skyblue;
              color:black;
              border:0.1px solid rgb(129,118,109);
              color:#49b5d1;
              border:1px solid black;
              border-radius:2%;
           }
        </style>
    </head>
    <body>
            @csrf
        <div class ='all'>
        <div class="name">
            Welcome {{Auth::user()->name }}
        </div>
       <div class="nav">
            <ul>
                <li><a href="products">Product</a></li>
                <!--<li><a href="catalog">Catalog</a></li>-->
                <li><a href="productorder">Orders</a></li>
                <li><a href="logout">Log Out</a></li>
            </ul>
       </div>
       </div>
    </body>

</html>