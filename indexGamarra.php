<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Desarrollado por @Sergio Gamarra 👨🏻‍💻</h1>
        <p>
            Pregunta 01:
            Desarrollar un programa que muestre por consola los N primeros números naturales y calcule la
            suma de ellos
        </p>
        <form method="post" name="form1" action="ejerciciosGamarra/numero.php">
            <fieldset>
                <label>Ingrese un numero natural</label>
                <input type="text" name="txtNumero" required>
                <br>
                <input type="submit" name="btnEnviar">
            </fieldset>
        </form>
        <p>
            Pregunta 02:
            Diseñar un algoritmo que imprima los primeros N números pares (asuma como máximo el valor de
                N a 100), además que calcule y muestre la suma de dichos números.

        </p>
        <form method="post" action="ejerciciosGamarra/pares.php">
            <fieldset>
                <label>Ingrese un numero natural</label>
                <input type="text" name="txtPares" required="">
                <br>
                <input type="submit" name="btnPares">
            </fieldset>
        </form>
        <p>
            Pregunta 03:
            Diseñar un programa que imprima en pantalla n primeros números impares y muestre la suma de
                    ellos.
        </p>
        <form method="post" action="ejerciciosGamarra/impares.php">
            <fieldset>
                <label>Ingrese un numero natural</label>
                <input type="text" name="txtImpares" required="">
                <br>
                <input type="submit" name="btnImpares">
            </fieldset>
        </form>
        <p>
            Pregunta 04:
            Se necesita un programa que solicite dos números, los cuales son un rango, de los cuales queremos
                    que imprima dichos números y el total de la suma de ellos.
        </p>
        <form method="post" action="ejerciciosGamarra/rango.php">
            <fieldset>
                <label>Ingresa el rango inferior</label>
                <input type="text" name="txtRango1" required="">
                <br>
                <label>Ingresa el rangos superior</label>
                <input type="text" name="txtRango2" required="">
                <br>
                <input type="submit" name="btnRangos">
            </fieldset>
        </form>
        <p>
            Pregunta 05:
            Dado un rango de números enteros m y n, muestre los números pares que exista en el rango, el
                    numero m no puede ser mayor que n y si lo fuera mostrara un mensaje advirtiéndonos e invierte
                    los valores.

        </p>
        <form method="post" action="ejerciciosGamarra/rangee.php">
            <fieldset>
                <label>Ingresa el rango inferior</label>
                <input type="text" name="txtRangom" required="">
                <br>
                <label>Ingresa el rango superior</label>
                <input type="text" name="txtRangon" required="">
                <br>
                <input type="submit" name="btnRange">
            </fieldset>
        </form>
        <p>
            Pregunta 06:
            Diseñar un programa que permita generar una lista de N números aleatorios entre 1 y N y cuente
                    la cantidad de números pares e impares.
        </p>
        <form method="post" action="ejerciciosGamarra/aleatorio.php">
            <fieldset>
                <label>Genere un numero random</label>
                <input type="text" name="txtAlea" required=""><br>
                <input type="submit">
            </fieldset>
        </form>
        <p>
            Pregunta 07:
            Desarrollar un programa que permita generar una lista en forma descendente desde un número N
                    hasta 1.
        </p>
        <form method="post" action="ejerciciosGamarra/listado.php">
            <fieldset>
                <label>Ingresar un numero</label>
                <input type="text" name="txtList" required="">
                <br>
                <input type="submit">
            </fieldset>
        </form>
        <p>
            Pregunta 08:
            Dado un número entero, determinar cuántos dígitos tiene.
        </p>
        <form method="post" action="ejerciciosGamarra/digitos.php">
            <fieldset>
                <label>Ingrese un numero entero</label>
                <input type="text" name="txtDigiito" required="">
                <input type="submit">
            </fieldset>
        </form>
        <p>
            Pregunta 09:
            Dado un número entero, determinar la cantidad de dígitos pares que contiene.
        </p>
        <form method="post" action="ejerciciosGamarra/digitosPar.php">
            <fieldset>
                <label>Ingrese un numero entero</label>
                <input type="text" name="txtDigiitoPar" required="">
                <input type="submit">
            </fieldset>
        </form>
        <p>
            Pregunta 10:
            Dado un número, devolver el digito mayor.
        </p>
        <form method="post" action="ejerciciosGamarra/mayor.php">
            <fieldset>
                <label>Ingresa un numero</label>
                <input type="text" name="txtMayor" required="">
                <input type="submit">
            </fieldset>
        </form>
    </body>
</html>
