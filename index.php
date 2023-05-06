<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
<?php
    //1) Define tres arrays de 20 números enteros cada una, con nombres "numero",cuadrado" y "cubo". Carga el array "numero" con valores aleatorios entre 0 y 100. En el array "cuadrado" se deben almacenar los cuadrados de los valores que hay en el array "numero". En el array "cubo" se deben almacenar los cubos de los valores que hay en "numero". A continuación, muestra el contenido de los tres arrays dispuestos en tres columnas
       /*
        for ($i = 0; $i < 20; $i++) {
            $numero[] = rand(0,100);
        }

        foreach ($numero as $elemento) {
            $cuadrado[] = $elemento * $elemento;
            $cubo[] = $elemento * $elemento * $elemento;
        }

    ?>
    <table>
        <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
        <?php
            for ($i = 0; $i < 20; $i++) {
                echo "<tr><td>".$numero[$i]."</td>";
                echo "<td>".$cuadrado[$i]."</td>";
                echo "<td>".$cubo[$i]."</td></tr>";
            }
        ?>
    </table>*/
  ?>
<!--2) Escribe un programa que pida 10 números por teclado y que luego muestre los números
introducidos junto con las palabras "máximo" y "mínimo" al lado del máximo y del mínimo respectivamente
    <form action="#" method="post" enctype="multipart/form-data">
       Numero 1 <input type="text" name="num1"><br>
       Numero 2 <input type="text" name="num2"><br>
       Numero 3 <input type="text" name="num3"><br>
       Numero 4 <input type="text" name="num4"><br>
       Numero 5 <input type="text" name="num5"><br>
       Numero 6 <input type="text" name="num6"><br>
       Numero 7 <input type="text" name="num7"><br>
       Numero 8 <input type="text" name="num8"><br>
       Numero 9 <input type="text" name="num9"><br>
       Numero 10 <input type="text" name="num10"><br>
       <input type="submit" name="enviar">
       <?php/*
        if(isset($_POST['enviar'])){
            $array=array();
            for($i=1; $i<=10; $i++){
                $array[$i]=$_POST["num".$i];
                
            }
            echo min ($array);
            echo max ($array);
            
        }*/
       ?>

    </form>-->
<!--3) Escribe un programa que lea 15 números por teclado y que los
almacene en un array. Rota los elementos de ese array, es decir,
el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición
debe pasar a la posición 0. Finalmente, muestra el contenido del array.
    <form action="#" method="post" enctype="multipart/form-data">
        Numero 1 <input type="text" name="num1"><br>
        Numero 2 <input type="text" name="num2"><br>
        Numero 3 <input type="text" name="num3"><br>
        Numero 4 <input type="text" name="num4"><br>
        Numero 5 <input type="text" name="num5"><br>
        <input type="submit" name="enviar"><br>

    <?php/*
        if(isset($_POST['enviar'])){
            $array=array();
            for($i=1; $i<=5; $i++){
                $array[$i]=$_POST["num".$i];
            }
            $elemento = array_pop($array);
            array_unshift($array,$elemento);
            foreach ($array as $key => $value) {
                # code...
                echo $value;
            }
            
        }
    */?>
    </form>-->
<!--4)Escribe un programa que genere 100 números aleatorios del 0
al 20 y que los muestre por pantalla separados por espacios.
El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente. 
Los números que se han cambiado deben aparecer resaltados de un color diferente.
    
    <?php/*
        // Generar la lista de números aleatorios
        $numeros = array();
        for ($i = 0; $i < 100; $i++) {
            $numeros[] = rand(0, 20);
        }

        // Mostrar la lista por pantalla
        echo "Lista de números aleatorios: ";
        foreach ($numeros as $numero) {
            echo $numero . " ";
        }

        ?>

        <!-- Pedir al usuario los dos valores a cambiar-->
        <form action="#" method="post" enctype="multipart/form-data">
        <br>
        Introduce el valor a cambiar: <input type='text' name='num1'><br>
        <br>
        Introduce el nuevo valor: <input type='text' name='num2'>
        <input type='submit' name='enviar'><br>";
        </form>
    <?php
        // Cambiar los valores en la lista
        if(isset($_POST['enviar'])){
        $valor1 = $_POST['num1'];
        $valor2 = $_POST['num2'];
        $indice = 0;
        foreach ($numeros as $numero) {
                if ($numero == $valor1) {
                    echo "<span style='background-color:#f00'>".$valor2."</span>"." ";
                    $numeros[$indice] = $valor2;
                } else {
                    echo $numero . " ";
                }
                $indice++;
            }
        }
    ?>-->*/
</div>
</body>
</html>