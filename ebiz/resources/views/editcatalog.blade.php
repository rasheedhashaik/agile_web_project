<html>
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
        input[type="submit"]{
            background:#5bc0de;  
            color:white;           
            border:1px solid white;         
            width:70%;
        }
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
                                <li class="nav-item">
                                    <a class="nav-link text-right" href="catalog">Catalog</a>
                                </li>

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
            <div class="col-md-4 offset-md-4 text-center" style="color:#5bc0de;font-family:'Arvo', serif;margin-top:150px;">
                <h1>Edit Product</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top:2%;">
                <form action="editcatalog" method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-stripped">
                        <tr>
                        <td>Name</td>
                        <td><input type="text" value="{{$values->name}}"  name="name"></td>
                        </tr>
                        <tr>
                        <td>Description</td>
                        <td><input type="text" value="{{$values->discreption}}" name="Description"></td>
                        </tr>
                        <input type="hidden" name="id" value="{{$values->id}}">
                        <tr>
                        <td>Image</td>
                        <td>
                            <input type="file" name="img_file">
                        </td>
                        </tr>
                        <tr><td></td>
                        <td><input type="submit" value="Submit" class="btn"></td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </body>

</html>