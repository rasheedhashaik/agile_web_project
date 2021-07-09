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
            table,tr,td{
                border:0px solid black;
                padding:30px;
                border-top: 0.5px solid #5cb85c;
                
            }
            img{
                width:100px;
                height:100px;
            }
            .header{
                position:fixed;
                width:100%;
                height:10%;
                border:0px solid black;
                top:0;
                left:0;
                background:rgba(0,0,0,0.3);
                z-index:5;
            }

            .footer-site{
                width:100%;
                height:4%;
                border:0px solid black;
                background:rgba(0,0,0,0.5);
                color:white;
                padding:10px;
                left:0;
                margin-top:0%;
                margin-bottom:0%;
                right:0;
                position: fixed;
                bottom:0;
                z-index:5;
              }
            .title{
                letter-spacing:5px;
                /*background:linear-gradient(45deg, red, blue);*/
                color:white;
            }
           table{
               /*margin-top:15%;*/
               box-shadow:2px 0px 10px black;
               
            }
            .me{
                margin-top:10%;
            }
            th{
                padding:10px;
                color:white;
                font-size:20px;
                font-family:"Trebuchet MS", 'Open Sans Condensed', sans-serif;
                letter-spacing:1px;
            }
*/
        </style>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    </head>
    <body>
    <div class=" header">
         <h1 class="text-center text-info title">EBIZ</h1>
      </div>
      <button class="btn btn-success">Check out</button>
        <center>
        <div class="col-md-2 ">
        
        </div>
        <div class="col-md-8 me">
       <table  class="table table-hover" >
            <tr style="background:#5bc0de;" >
               <th class="text-center">Name </th>
               <th class="text-center">Product </th>
               <th class="text-center">Price </th>
               <th class="text-center">Descreption </th>
               <th class="text-center"></th>
            <tr>
    <?php
    $cartitemsids= session()->get('cart');
    foreach($cartitemsids as $itemid ){
        $products = App\Products::where('id','=',$itemid)->where('status','=','active')->get();
        foreach ($products as $product) {
        ?>
                <tr style="background:rgba(0,0,0,0);" id='{{$product->id}}'>
                    <td ><h2>{{$product->name}}</h2></td>
                    <td><img src='../storage/app/{{$product->img}}'/></td>                   
                    <td><h2>{{$product->price}}</h2></td>
                    <td><h3>{{$product->descreption}}</h3></td>
                    <td style="padding:40px"><button class="btn btn-info" onclick="deleteRow('{{$product->id}}')">Remove</button> </td>
                </tr>                
        <?php     
        }
       }
     ?>
     </table>
     </center>
     </div>
     <div class="row ">
        <footer class="text-center footer-site  ">
             <p>Thankyou For Visiting My Website</p>
        </footer>
    </div>

    
    </body>
    <script>
    function deleteRow(rowId){
            $("#"+rowId).hide();
           url="removefromcart?id="+rowId;
            $.ajax({url: url, success: function(result){
                
              alert("product delete success " );
            }});
        }
    </script>


</html>