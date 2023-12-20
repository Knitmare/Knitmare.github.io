<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
</head>
<body>
    <p>
        <form action="texto.php" method="post">
            <label >Nombre Del cliente</label>
            <input type="text" name="nombre" ><br><br>
            <label>Domicilio del cliente</label>
            <input type="text"name="domicilio"><br><br>
            <label>localidad</label>
            <input type="text" name="localidad"><br><br>
            <label >I.V.A</label>
            <input type="text" name="iva"><br><br>
            <label>Monto</label>
            <input type="text" name="monto"><br><br>
            <label>C.U.I.T</label>
            <input type="text" name="cuit"><br><br>
            <label>Telefono</label>
            <input type="number" name="telefono"><br><br>
            <label >En Concepto</label>
            <input type="text" name="concepto"><br><br>
            <input type="submit" value="Convertir">
        </form>
    </p>
</body>
</html>