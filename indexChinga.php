<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Desarrollado por @Carlos Chinga 👨🏻‍💻</h1>
        <p>
            Pregunta 01:
            Elabore un programa que permita calcular el descuento según el valor de la compra
            de un cliente. Si la compra es igual o mayor a S/. 1000.00 se le otorgará el descuento
            del 10%. Mostrar el valor inicial, el descuento y el total neto a pagar.
        </p>
        <form action="preg01chinga.php" method="post">
            <fieldset>
                <label>¡Hola! Ingresa tus datos.</label><br><br>
                <label>Cliente:</label><br><br>
                <input type="text" name="txtCliente"><br><br>
                <label>Monto:</label><br><br>
                <input type="number" name="numMonto"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 02:
            Que pida tres números e indicar si el tercero es igual a la suma del primero y el
            segundo.

        </p>
        <form action="preg02chinga.php" method="post">
            <fieldset>
                <label>Número 01:</label><br><br>
                <input type="number" name="num01"><br><br>
                <label>Número 02:</label><br><br>
                <input type="number" name="num02"><br><br>
                <label>Número 03:</label><br><br>
                <input type="number" name="num03"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 03:
            Elabore un programa que acepte un número del año mayor a 2000 y muestre
            "PRESENTE" si el número es el año actual, "PASADO" si es menor o "FUTURO" si es
            mayor, en razón al año actual.
        </p>
        <form action="preg03chinga.php" method="post">
            <fieldset>
                <label>¡Bienvenido al año!</label><br><br>
                <label>Ingrese el año:</label><br><br>
                <input type="number" name="numbAño" min="2001" max="3000"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 04:
            Elabore un programa que solicite el nombre y la edad de 2 hermanos. Realice la
            comparación de las edades y muestre un mensaje indicando el nombre del hermano
            mayor y cuantos años de diferencia tiene con el menor.
        </p>
        <form action="preg04chinga.php" method="post">
            <fieldset>
                <label>Hola Hermanos, completen los datos.</label><br><br>
                <label>Nombre del 1° hermano:</label><br><br>
                <input type="text" name="txtNombre01"><br><br>
                <label>Edad:</label><br><br>
                <input type="number" name="numbEdad01"><br><br>
                <label>Nombre del 2° hermano:</label><br><br>
                <input type="text" name="txtNombre02"><br><br>
                <label>Edad:</label><br><br>
                <input type="number" name="numbEdad02"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 05:
            Leer un número entero positivo e identificar si es de un dígito, dos dígitos, tres dígitos
            o más de tres dígitos.

        </p>
        <form action="preg05chinga.php" method="post">
            <fieldset>
                <label>Ingresa el número: </label><br><br>
                <input type="number" min="1" step="1" name="numero"><br><br><!-- step: indica que de solo 1 dígito es permitido (no decimales) -->
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 06:
            Elabore un programa que permita determinar la temperatura corporal de una persona,
            según la medida de un termómetro.
            a. > 39º        Fiebre Alta: Diríjase al Centro de Salud más cercano
            b. 37º - 38º    Fiebre: Tómese una pastilla y repose
            c. 35º - 36º    Temperatura Normal
            d. <35          Temperatura muy baja: Tómese algo caliente
        </p>
        <form action="preg06chinga.php" method="post">
            <fieldset>
                <label>Ingresa tu temperatura. 😃</label><br><br>
                <label>Temperatura °:</label><br><br>
                <input type="number" name="numbTe"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 07:
            El NIF (o letra asociada a un DNI) se obtiene de la siguiente manera:
            • Se divide el número de DNI entre 23 y el resto es codificado por una letra según la
            siguiente tabla de equivalencias:
            0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 
            T R W A G M Y F P D  X  B  N  J  Z  S  Q  V  H  L  C  K  E
            • Escribe un programa que pida el DNI y ofrezca como resultado letra asociada.
            • Ejemplo: para el DNI 56321122 el NIF es ‘X’.
        </p>
        <form action="preg07chinga.php" method="post">
            <fieldset>
                <label>Ingrese el DNI:</label><br><br>
                <input type="number" name="numbDNI"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 08:
            Determine el importe a pagar para el examen de admisión de una universidad, cuyo
            valor depende del nivel socioeconómico y el colegio de procedencia.           
                                  Nivel Social
            Colegio            A       B       C
            [N]acional      300.00  200.00  100.00
            [P]articular    400.00  300.00  200.00
        </p>
        <form action="preg08chinga.php" method="post">
            <fieldset>
                <label>Importe a Pagar</label><br><br>
                <label>Colegio:</label><br><br>
                <select name="txtcolegio">
                    <option value=""></option>
                    <option value="N">Nacional</option>
                    <option value="P">Particular</option>
                </select><br><br>
                <label>Nivel Social:</label><br><br>
                <select name="txtnsocial">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 09:
            Al ingresar el día y el numero de un mes, devolver la estación del año de acuerdo a la
            siguiente tabla:           
            Estación                     Tiempo
            Verano          Del 21 de Diciembre al 20 de Marzo
            Otoño           Del 21 de Marzo al 21 de Junio
            Invierno        Del 22 de Junio al 22 de Setiembre
            Primavera       Del 23 de Setiembre al 20 de Diciembre
        </p>
        <form action="preg09chinga.php" method="post">
            <fieldset>
                <label>Imgrese la fecha: </label><br><br>
                <label>Día:</label><br><br>
                <input type="text" name="txtDia"><br><br>
                <label>Mes:</label><br><br>
                <input type="text" name="txtMes"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
        <p>
            Pregunta 10:
            Programa que permita el ingreso del día
            y mes de nacimiento, indique a que signo
            zodiacal que corresponde según la imagen:
        </p>
        <form action="preg10chinga.php" method="post">
            <fieldset>
                <label>Imgrese tu fecha de nacimiento: </label><br><br>
                <label>Día:</label><br><br>
                <input type="text" name="txtDia"><br><br>
                <label>Mes:</label><br><br>
                <input type="number" name="txtMes"><br><br>
                <input type="submit" value="Enviar" name="btnEnviar">
                <input type="reset" value="Cancelar" name="btnCancelar">
            </fieldset>
        </form>
    </body>
</html>
