<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Desarrollado por @Huanca Rimac Bernardo 👨🏻‍💻</h1>
        <p>
            Pregunta 01:
            Realizar una aplicación web que recibe como parámetro el número de una semana y devuelve el día al que pertenece.
        </p>
        <form action="preg01huanca.php" method="post">
            <fieldset>
                <label>Ingrese un número de la semana (1 - 7):</label> 
                <br><br>
                <input name="txtNumeroSemana" type="text">
                <input type="submit">
            </fieldset>
        </form>
        <p>
            Pregunta 02:
            Realizar una aplicación web que recibe como parámetro el número de un mes y devuelve el trimestre al que pertenece.

        </p>
        <form action="preg02huanca.php" method="post">
            <fieldset>
                <label>Ingrese un número del mes (1 - 12):</label> 
                <br><br>
                <input name="txtNumeroMes" type="text">
                <input type="submit">
            </fieldset>
        </form>
        <p>
            Pregunta 03:
            Realizar una aplicación web que lea un número entero entre 1 y 10. Si el número es menor que 1 o mayor que 10 el programa debe escribir en pantalla un mensaje de error y en caso de que sea válido debe mostrar en pantalla el número romano que lo representa.
        </p>
        <form action="preg03huanca.php" method="post">
            <fieldset>
                <label>Ingrese un número entre 1 y 10 (1 - 10):</label> 
                <br><br>
                <input name="txtNumero" type="text">
                <input type="submit">
            </fieldset>
        </form>
        <p>
            Pregunta 04:
            Una tienda dedicada a la venta de equipos y suministros para PC desea premiar a sus clientes que realizan una compra superior o igual a S/. 1000.00 con el sorteo de premios según el valor de una bolilla que tiene un número grabado entre 1 y 5 (este número debe obtenerse de forma aleatoria). Los premios se dan bajo la siguiente tabla:
        </p>
        <form action="preg04huanca.php" method="post">
            <fieldset>
                <label>¡Felicidades! Usted ha sido premiado con una oportunidad de participar en un sorteo.</label> 
                <p>Solo presione el botón y podrá recibir uno de los siguiente premios:</p>
                <br>
                <table border="2" style="height: 150px; width: 400px;">
                    <tr>
                        <th><strong>#bolilla</strong></th>
                        <th><strong>Premios</strong></th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Mouse</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Teclado</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cámara Web</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Parlantes</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Memoria USB</td>
                    </tr>
                    
                </table>
                <br>
                <input name="txtSortear" type="text" value="ok" hidden>
                <input type="submit" value="Sortear">
            </fieldset>
        </form>
        <p>
            Pregunta 05:
            Determine el importe a pagar para el examen de admisión de una universidad, cuyo valor depende del nivel socioeconómico y el colegio de procedencia.

        </p>
        <form>
            <fieldset>
                <label>Cálculo de importe a pagar según "Nivel Socieconómico":</p>
                <label>Por favor seleccione el tipo de Colegio y el Nivel social.</p>
                <br>
                
                <label>Colegio</label>
                <select name="selectColegio">
                    <option value="NACIONAL">Nacional</option>
                    <option value="PARTICULAR">Particular</option>
                </select>
                
                <br>
                <br>
                
                <label>Nivel Social</label>
                <select name="selectSocial">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
                <br>
                <br>
                
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        <p>
            Pregunta 06:
            Al ingresar el día y el numero de un mes, devolver la estación del año de acuerdo a la siguiente tabla:
        </p>
        <form>
            <fieldset>
                <table border="2" style="height: 150px; width: 400px;">
                    
                    <thead>
                        <tr>
                            <th>Estación</th>
                            <th>Tiempo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Verano</td>
                            <td>Del 21 de Diciembre al 20 de Marzo</td> 
                        </tr>
                        <tr>
                            <td>Otoño</td>
                            <td>Del 21 de Marzo al 21 de Junio</td> 
                        </tr>
                        <tr>
                            <td>Invierno</td>
                            <td>Del 22 de Junio al 22 de Septiembre</td> 
                        </tr>
                        <tr>
                            <td>Primavera</td>
                            <td>Del 23 de Septiembre al 20 de Diciembre</td> 
                        </tr>
                    </tbody>
                    
                </table>
                <br>
                
                <label><strong>Ingrese un día del mes (1 - 31):</strong></label>
                <input type="text" name="txtDia"> <br>
                <br>
                <label><strong>Ingrese el número del mes (1 - 12):</strong></label>
                <input type="text" name="txtMes"> <br>
                <br>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        <p>
            Pregunta 07:
            Programa que permita el ingreso del día y mes de nacimiento, indique a que signo zodiacal que corresponde según la imagen:
        </p>
        <form>
            <fieldset>

                <label><strong>Ingrese un día de nacimiento (1 - 31):</strong></label>
                <input type="text" name="txtDia"> <br>
                <br>
                <label><strong>Ingrese mes de naciemiento (1 - 12):</strong></label>
                <input type="text" name="txtMes"> <br>
                <br>
                <input type="submit" value="Enviar">

            </fieldset>
        </form>
        
    </body>
</html>
