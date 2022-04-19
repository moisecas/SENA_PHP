

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title> 
</head>
<body>
    <form id="form1" method="post" action="index.php">
        <input type="text" name="numero1" >
        <select name="" id="">
            <option value="0">Sumar</option>
            <option value="1">Restar</option>
            <option value="2">Multiplicar</option>
            <option value="3">Dividir</option>

        </select>
        <input type="text" name="numero2" >
        <br>
        <input type="submit" name="calcular" value="calcular" > <input type="reset" value="borrar"/>  

    </form>
    <?php

        include("biblioteca.php");  
        if (isset($_REQUEST['calcular'])){
            $numero1= $_REQUEST['numero1'] ;
            $numero2= $_REQUEST['numero2'] ;
            $total= $_REQUEST['total'] ; 

            switch($total){
                case 0:
                    echo matematica::sumar($numero1,$numero2)
                    break; 
                case 1:
                    echo matematica::restar($numero1,$numero2)
                    break; 
                case 2:
                    echo matematica::multiplicar($numero1,$numero2)
                    break; 
                case 3:
                    echo matematica::dividir($numero1,$numero2) 
                    break; 

                default:
                    echo: "no hay opciones validas"; 
                    break; 

            }
                 
        }


    ?>
</body>
</html>

