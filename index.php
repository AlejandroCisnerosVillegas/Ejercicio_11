<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema de Cotización para Eventos</title>
        <link rel="shortcut icon" href="../../assets/img/logo.png">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="POST" name="AlejandroVillegas" class="container">
            <h1>Cotización de Evento</h1>
            <div class="section">
                <h2>Datos del Cliente</h2>
                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="txtnombre" required></td>
                    </tr>
                    <tr>
                        <td>Fecha del evento:</td>
                        <td><input type="date" name="txtfecha" required></td>
                    </tr>
                    <tr>
                        <td>Domicilio:</td>
                        <td><input type="text" name="txtdomicilio" required></td>
                    </tr>
                    <tr>
                        <td>Delegación:</td>
                        <td><input type="text" name="txtdistrito" required></td>
                    </tr>
                </table>
            </div>
            <div class="section">
                <h2>Servicios</h2>
                <table>
                    <tr>
                        <td>Hora y precio:</td>
                        <td>
                            <select name="horayprecio" required>
                                <option value="0">Seleccionar</option>
                                <option value="1">3pm a 5pm = MXN/400.00</option>
                                <option value="2">5pm a 7pm = MXN/500.00</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Agregar Servicios Adicionales:</td>
                    </tr>
                    <tr>
                        <td>Payasos:</td>
                        <td><input type="number" name="txtpayasos" value="0" min="0" max="5"> x (MXN/60.00)</td>
                    </tr>
                    <tr>
                        <td>Muñecos:</td>
                        <td><input type="number" name="txtmunecos" value="0" min="0" max="6"> x (MXN/50.00)</td>
                    </tr>
                    <tr>
                        <td>Bailarinas:</td>
                        <td><input type="number" name="txtbailarinas" value="0" min="0" max="9"> x (MXN/40.00)</td>
                    </tr>
                    <tr>
                        <td>Magos:</td>
                        <td><input type="number" name="txtmagos" value="0" min="0" max="9"> x (MXN/80.00)</td>
                    </tr>
                    <tr>
                        <td>Decorar ambiente:</td>
                        <td>
                            <input type="radio" name="decorarambiente" value="1" checked> No (MXN/0.00)
                            <input type="radio" name="decorarambiente" value="2"> Si (MXN/150.00) 
                        </td>
                    </tr>
                    <tr>
                        <td>Grabar fiesta:</td>
                        <td>
                            <input type="radio" name="grabarfiesta" value="1" checked> No (MXN/0.00)
                            <input type="radio" name="grabarfiesta" value="2"> HD (MXN/100.00)
                            <input type="radio" name="grabarfiesta" value="3"> Full HD (MXN/150.00)
                            <input type="radio" name="grabarfiesta" value="4"> Ultra HD (MXN/200.00)
                        </td>
                    </tr>
                    <tr>
                        <td>Delegación evento:</td>
                        <td>
                            <select id="distritoevento" name="distritodelevento1" required>
                                <option value="0">Seleccionar Delegación</option>
                                <option value="1">Álvaro Obregón</option>
                                <option value="2">Azcapotzalco</option>
                                <option value="3">Benito Juárez</option>
                                <option value="4">Coyoacán</option>
                                <option value="5">Cuauhtémoc (MXN/50.00)</option>
                                <option value="6">Gustavo A. Madero (MXN/50.00)</option>
                                <option value="7">Iztacalco (MXN/50.00)</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Cotizar" name="cotizarcliente">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>