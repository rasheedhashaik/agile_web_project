<html>
    <head>
        <!-- <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

            <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">--> 

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

            <style>
            </style>
        </head>
        <body>
            <div class="container-fulied">
                <div class="row">
                    <div class="col-md-12 " style="background:#5bc0de;height:10% ;left:0">
                        <h1 class="text-center" style="padding-top:10px;color:white">EBIZ</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top:15%">
                    <div class="col-md-4 ">
                    </div>
                    <div class="col-md-4 jumbotron" style="border:0px solid black;background:transparent;padding:1px;" >
                        <div class="row  text-center" >
                            
                                <div class="col-lg-6 ">
                                     <a href="login" class="btn btn-danger text-center " role="button" style="width:100%; font-family:'Trebuchet MS';font-size: 1rem"><span class="barge"><img src="pic1.png" style="height:25px;width:25px;"/></span>I have account</a>
                                </div>                                
                                <div class="col-lg-6 ">
                                    <a href="signup" class="btn btn-info" role="button"style="width:100%;background:#5bc0de;font-family:'Trebuchet MS';font-size: 1rem"><span class="barge"><img src="pic3.png" style="height:25px;width:25px;"/></span>New User</a>
                                </div>
                             <!--   <div class="col-md-2">
                                    </div>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group mc-2 " role="group" aria-label="First group" >
                                          <a href="#" role="button" class="btn btn-danger" style="letter-spacing: px"><img src="pic1.png" style="height:25px;width:25px;"/></span>I have account</a>
                                          <a href="#" role="button" class="btn btn-info" style="letter-spacing: px"><img src="pic3.png" style="height:25px;width:25px;"/></span>New User</a>
                                          
                                          </div>
                                </div> 
                                 <div class="col-md-2"> </div>     -->                                                      
                         </div>

                        <div class="row" style="height:20px;">
                        </div>

                         <div class="row">
                             <div class="col-md-2"></div>
                             <div class="col-md-8 text-center">
                                    <h5>Login Form</h5>
                             </div>
                             <div class="col-md-2"></div>
                         </div>

                         <div class="row" style="margin-top:10%">
                         </div>
                         <!--  <div class="">-->
                         <form class="form-container" action="login" method="post">
                                @csrf
                                <div class="input-group"style="padding-bottom:20px;padding-top:15px;">
                                        <span class="input-group-addon " style="border:1px solid #ced4da;border-right:0px;padding-top:3px"><img src="envelope.png" style="height:25px;width:25px;"/></span>     
                                    <input class="form-control"type="email" name="email" placeholder="Email Address" style="height:5%;border-radius:0;border-left:0px;" id="emailExample">
                                </div>
                                <div class="input-group" style="padding-bottom:20px;">   
                                        <span class="input-group-addon" style="border:1px solid #ced4da;border-right:0px;padding-top:3px"><img src="key.png" style="height:25px;width:25px;"/></span>                                  
                                <input class="form-control" type="password" name="password" placeholder="Password" style="height:5%;border-radius:0;border-left:0px" id="emailExample">
                                </div>

                               <!-- <div class="input-group" style="padding-bottom:20px;">   
                                        <span class="input-group-addon" style="border:1px solid #ced4da;border-right:0px;padding-top:3px"><img src="key.png" style="height:25px;width:25px;"/></span>                                    
                                    <input class="form-control" type="password" name="password" placeholder="Confirm Password" hidden="hidden" style="height:5%;border-radius:0;border-left:0px" id="emailExample">
                                </div>-->
                                <input type="text" name="user_type" hidden="hidden" value="user">
                                <div >
                                    <input type="submit" value="submit" class="btn btn-info" style="width:100%;background:#5bc0de">
                                    </div>
                          </form>
                       
                         </div>
                      
                    <div class="col-md-4 ">
                    </div>                        
                 </div>
                </div>
         </body>
    </html>