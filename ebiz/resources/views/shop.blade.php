
<html>
    <head>
        <style>
            table,tr,td{
                border:1px solid black;
                padding:10px;
            }
            img{
                width:100px;
            }
        </style>
    </head>
    <body>
    <table>

<?php
    $products = App\Products::where('status','=','active')->get();

   foreach ($products as $product) {
?>
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->discreption}}</td>
            <td>{{$product->price}}</td>
            <td><img src='../storage/app/{{$product->img}}'/></td>
            <td><button><a target='_blank' href='addtocart?id={{$product->id}}'>Add To Cart</button> </td>
        </tr>
 <?php     
   }
 ?>

</table>
</body>
</html>