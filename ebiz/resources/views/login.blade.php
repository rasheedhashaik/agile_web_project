<html>
    <head>
        <title></title>
        <style>
                        body{
                            background :url(mahesh.JPG);
                            background-size:cover;
                            background-position: center;
                            margin: 0px;
                            padding: 0px;
                            font-family: sans-serif;
                            opacity: 5;
                            /*transform: translate(-50%,-50%);
                            background: no-repeat;*/
                        }
                        .login-box{
                            height:400px;
                            width :300px;
                            background: rgba(0,0,0,0.5);
                            border-radius:2%;
                            box-sizing: border-box;
                            position: absolute;
                            top:60%;
                            left:50%;
                            transform: translate(-60%,-50%);
                            color:#fff;
                            padding:70px 30px;
                        }
                        .login-box input[type="email"] , input[type="password"]{
                            width:100%;
                            margin-bottom: 20px;
                            border: none;
                            background: transparent;
                            border:none;
                            border-bottom:3px solid #ccc;
                            height:25px;
                            width:100%;
                            color:white;
                        }
                        /*.login-box input[type="email"] , input[type="password"]:hover{
                            border-bottom:2px solid #ccc;
                            background:transparent;
                        }*/
                        .login-box p{
                            color:#ccc;
                            letter-spacing: 1px;
                            font-size:16px;
                            position:relevant;
                        }
                        .login-box input[type="submit"]{
                            width:80%;
                            margin-left:20px;
                            height:30px ;
                            border-radius:2%;
                            border:none;
                            background:;
                            color:green;
                        }
                        .login-box input[type="submit"]:hover{
                            background: green;
                            box-shadow: 2px 3px 20px #ccc;
                            color:white;
                            border:0.1px solid rgb(129,118,109);
                        }
                        .link{
                            position: absolute;
                            top:80%;
                            padding:10px;
                            text-align:center;
                        
                        }
                        a{
                            text-decoration: none;
                            color:#ccc;
                            font-size: 16px;
                            
                        }
                        a:hover{
                            color:green;
                        }
                        .link #link1 {
                            
                            left:50%;
                        }
                        .link #link2 {
                            
                             left:80%;
                        }
                        img{
                            height: 80px;
                            position: absolute;
                            top:-10%;
                            left:35%;
                        }
          </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>           
    </head>
    <body>
        <div class="bg"></div>
        <form action="login" method="post">
            @csrf
            <div class="login-box">
                <img src="user.png"/>
                 <p>Email</p>
                <input type="email" name="email" placeholder="Email@gmail.com">
                <p> Password</p>
               <input type="password" name="password" placeholder="Password"><br/>
                <input type="submit" value="Submit"></td><br/>
                <div class="link">
               <a id="link1" target='_blank' href="forgetpwd">Forgot Password </a>
                <a id="link2" target='_blank' href="signup">SignUp</a>
                </div>
            </div>
            
        </form>
    
    </body>

</html>