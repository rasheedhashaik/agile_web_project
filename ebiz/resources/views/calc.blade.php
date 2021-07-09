<html>
    <head></head>
    <body>
        <form action="calc" method="post">
        </form>
            <table>
                <tr>
                <td>Value1</td>
                <td><input type="text" name="id1"></td>
                </tr>
                <tr>
                <td>Value2</td>
                <td><input type="text" name="id2"></td>
                </tr>
                <tr>
                <td>Operation</td>
                <td><select name="ope">
                        <option value="add">ADD</option>
                        <option value="sub">Sub</option>
                        <option value="mul">Mul</option>
                        <option value="div">Div</option>
                    </select>
                </td>
                </tr>
                <tr><td></td>
                    <td><input type="submit" value="submit">
                </tr>
            </table>
        </form>
    </body>
</html>
<?php
if(isset($values)){
   // echo $values["id1"]." ".$values["id2"]." "$values["ope"]." ";
    if($values["ope"]=="add"){
        echo $values["id1"]+$values["id2"];
    }
    elseif($values["ope"]=="sub"){
        echo $values["id1"]-$values["id2"];
    }
    elseif($values["ope"]=="mul"){
        echo $values["id1"]*$values["id2"];
    }
    elseif($values["ope"]=="div"){
        echo $values["id1"]/$values["id2"];
    }
}
?>