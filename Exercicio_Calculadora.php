<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <title>simple calculator</title>
    </head>
    <body>
        <form method="post" class="form">


            <h1>Select Operator </h1>
            <input type="radio" name="operator" value="add">Soma
            <br>
            <input type="radio" name="operator" value="sub">Subtração
            <br>
            <input type="radio" name="operator" value="mul">
            <br>
            <input type="radio" name="operator" value="div">/
            <br>

<br>
            <label>Value 1 <input type="text" name="value1" placeholder="Enter 1st value"></label>
            <label>Value 2<input type="text" name="value2" placeholder="Enter 2nd value"></label>
            <br><br>
            
            <input type="submit" class="btn btn-success" value="Show Result">
        </form>
        
        
        <?php

            /*
                Ensure that ALL post fields are set
            */
            if( isset(
                $_POST['value1'],
                $_POST['value2'],
                $_POST['operator']
            )) {
                /*
                    Assign POST values as variables.
                */
                $value_1=(int)$_POST['value1'];
                $value_2=(int)$_POST['value2'];     
                $operator=$_POST['operator'];
                
                /*
                    Perform the relevant calculation
                    and assign the correct symbol for display
                */
                switch( $operator ){
                    case 'add':$symbol='+';$res=$value_1 + $value_2;break;
                    case 'sub':$symbol='-';$res=$value_1 - $value_2;break;
                    case 'mul':$symbol='*';$res=$value_1 * $value_2;break;
                    case 'div':$symbol='/';$res=$value_1 / $value_2;break;
                }
                
                /*
                    print the sum and result
                */
                printf(
                    '%d %s %s=%d',
                    $value_1,
                    $symbol,
                    $value_2,
                    $res
                );
            }
        ?>
    </body>
</html>
