<html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">    
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
                padding-left: .50rem;
                vertical-align: top;
                border-top: 0px solid #dee2e6; 
            }
            input[type="text"]{
                color:black;
                border:2px solid black;
                background:transparent;
                width:100%;
            }
            .address{
                border:2px solid #a7e06d;
                width:100%;
            }

            input[type="submit"]{
                border:none;
                width:60%;
                background:#5cb85c;
                color:white;
            }

            input[type="submit"]:hover{
                background:green;
                text-align:center;
            }
            a {text-decoration: none;
                color:white;
                padding:1px;
            } 
            a:hover{
                text-decoration: none;
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
            .center{
                color:black;
                font-weight:bold;
            }
            .logo{
            width:6%;
            height:9%;
            }
            #custom-button{
            background-color:#5cb85c;
            color:white;
            border:none;
            width:60%;
            padding:1.7%;
            border-radius:6%;
            }
            #custom-button:hover{
                background-color:green;
            }   
        </style>
    </head>

    <body>
        <div class="row">
            <nav class="navbar navbar-expand-md fixed-top ">
                    <div class="navbar-header"><h1 style="letter-spacing:1px;color:white;">Ebiz<h1></div>
                    <ul class="navbar-nav mr-auto" style="margin-left: 33%; padding:2px;">                    
                        <li class="nav-item" style=" margin-left: 0px;">
                            <a class="nav-link" href="products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="catalog">Catalog</a>
                        </li>
                        <li class="nav-item"  style=" margin-right: 10px;   margin-left: 0px;">
                            <a class="nav-link" href="customer">Customer</a>
                        </li>
                    </ul>
                    <div class="navbar-header"><h2 style="letter-spacing:1px;color:white;">{{Auth::User()->name}}</h2></div>    
            </nav>
        </div>
        <div class="row col-md-4 offset-md-5" style="margin-top:8%;color:#0ea306;font-family: 'Arvo', serif;"> <h1 style="color:#5bc0de">Customer</h1> </div>
        
        <div class="row" style="margin-top:2%;">
        <div class="col-md-4 offset-md-4">
                <form action="customer" method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="table center">
                        <tr>
                        <td>First Name</td>
                        <td><input type="text" name="firstname"></td>
                        </tr>
                        <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="lastname"></td>
                        </tr>
                        <tr>
                        <td>Mobile</td>
                        <td>
                            <input type="text" name="mobile">
                        </td>
                        </tr>
                        <tr>
                        <td>Gender</td>
                        <td>
                            <input type="radio" name="gender" value="male">Male &nbsp;
                            <input type="radio" name="gender" value="female">Female
                        </td>
                        </tr>
                        <tr>
                        <td>Address</td>
                        <td >
                            <textarea class="address" rows=5 cols=30 name="address" style="border:2px solid black"></textarea>
                        </td>
                        </tr>
                        <tr>
                        <td>Image</td>
                        <td>
                            <input type="file" name="img_file" >
                           <!-- <button type="button" id="custom-button">Upload Image</button>
                            <span id="custom-text">No file choosen</span>
                            <script type="text/javascript">
                                const realFileBtn = document.getElementById("real-file");
                                const customBtn = document.getElementById("custom-button");
                                const customTxt = document.getElementById("custom-text");

                                customBtn.addEventListener("click",function(){
                                    realFileBtn.click();
                                });

                                /*realFileBtn.addEventListener("change", function(){
                                    if(realFileBtn.value){
                                        customTxt.innerHTML=realFileBtn.value;
                                    }
                                    else{
                                        realFileBtn.innerHTML="No file choosen";
                                    }
                                });*/
                            </script>-->
                        </td>
                        </tr>
                        <tr><td></td>
                        <td><input class="btn btn-success"style="background:#5bc0de" type="submit" value="Submit"></td>
                        </tr>
                    </table>    
                </form>
            </div>
        </div>
        <div class="row col-md-10 offset-md-1" style="margin-top:5%;">
            <?php $customers=App\Customer::where('status','=','active')->get();?>
                <table class="table table-hover table-striped">
                    <tr ><th>First Name</th><th>Last Nmae</th><th>Mobile</th><th>Gender</th><th>Address</th><th>Image</th><th>Actions</th></tr>                    
                    <?php foreach($customers as $customer){ ?>
                        <tr>
                        <td>{{$customer->first_name}}</td>
                        <td>{{$customer->last_name}}</td>
                        <td>{{$customer->mobile}}</td>
                        <td>{{$customer->gender}}</td>
                        <td>{{$customer->address}}</td>
                        <td><img src='../storage/app/{{$customer->img}}'/></td>
                        <td><a style="text-decoration:none;color:#0ea306;" target='_blank' href='editcustomer?id={{$customer->id}}'><img class="logo">&nbsp;&nbsp;Edit</b></a><br><br>
                            <a style="text-decoration:none;color:#0ea306;" href='deletecustomer?id={{$customer->id}}'><img class="logo">&nbsp;&nbsp;Delete</b></a>
                        </tr>
                    <?php } ?>              
                </table>
        </div>      
    </body>

</html>