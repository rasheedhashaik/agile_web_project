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
    input[type="text"]{
        color:black;
        border:2px solid black;
        background:transparent;
        width:100%;
    }
    input[type="password"]{
        color:black;
        border:2px solid black;
        background:transparent;
        width:100%;
    }
    .table td, .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 0px solid #dee2e6; 
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
</style>
</head>
<body>
<div class="containor">
    <div class="row">
        <div class="col-md-4 offset-md-4 " style="margin-top:150px; color:#5bc0de; font-family: 'Arvo', serif; margin-left: 40%;"><h1>Edit Profile</h1></div>
    </div>
    <div class="row" style="margin-top:20px;">
        <div class="col-md-4 offset-md-4">
            <table class="table">
            <form method="post" action="editprofile">
                @csrf
                <tr>
                    <td style="color:#5bc0de;">Name</td><td><input type="text" name="name"></td>
                </tr>
                
                <tr>
                    <td style="color:#5bc0de;">Mobile</td><td><input type="text" name="mobile"></td>
                </tr>
                
                <tr>
                    <td></td>
                
                <input type="text" name="id" value="{{Auth::user()->id}}" hidden="hidden">
                <td><input type="submit" class="btn botton" value="Submit"></td>                
                </tr>
                </form>
            </table>
        </div>
    </div>
</div>
</body>
</html>