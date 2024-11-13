<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado de Resultados</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 70%;
            margin: auto;
            border: 1px solid #000;
        }
        .header {
            background-color: #6f42c1;
            color: white;
            text-align: center;
            font-size: 24px;
            padding: 10px;
            font-weight: bold;
        }
        .sub-header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            padding: 5px;
            border-bottom: 2px solid green;
        }
        .period {
            text-align: center;
            font-size: 14px;
            padding: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            text-align: right;
            padding: 10px;
        }
        th {
            background-color: #f0f0f0;
            font-weight: bold;
        }
        td:first-child {
            text-align: left;
            padding-left: 20px;
        }
        .highlight {
            background-color: #e0e0e0;
            font-weight: bold;
        }
        .total {
            background-color: #aaf5d6;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Encabezado principal -->
    <div class="header">ESTADO DE RESULTADOS</div>

    <!-- Sub-encabezado -->
    <div class="sub-header">Nombre de la empresa</div>
    <div class="period">DEL 01.01 2021 AL 31.12.2021 (colocar fecha inicio y fecha fin)<br>EXPRESADO EN (moneda de tu país)</div>

    <!-- Tabla de estado de resultados -->
    <table>
        <tbody>
            <tr>
                <td><strong>Venta</strong></td>
                <td>15,000</td>
            </tr>
            <tr>
                <td>(-) Devoluciones sobre ventas</td>
                <td>500</td>
            </tr>
            <tr>
                <td>(-) Descuentos sobre ventas</td>
                <td>250</td>
            </tr>
            <tr class="highlight">
                <td><strong>Ventas Netas</strong></td>
                <td>14,250</td>
            </tr>
            <tr>
                <td>(-) Costo de Ventas</td>
                <td>600</td>
            </tr>
            <tr class="highlight">
                <td><strong>Utilidad BRUTA</strong></td>
                <td>13,650</td>
            </tr>
            <tr>
                <td><strong>Gastos Operativos</strong></td>
                <td></td>
            </tr>
            <tr>
                <td>(-) Gasto de Ventas</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Gasto de Administración</td>
                <td>2,000</td>
            </tr>
            <tr class="highlight">
                <td><strong>Utilidad OPERATIVA</strong></td>
                <td>11,250</td>
            </tr>
            <tr>
                <td>Ingresos Financieros</td>
                <td>500</td>
            </tr>
            <tr>
                <td>(-) Gastos Financieros</td>
                <td>150</td>
            </tr>
            <tr>
                <td>Otros Ingresos</td>
                <td>40</td>
            </tr>
            <tr>
                <td>(-) Otros Gastos</td>
                <td>80</td>
            </tr>
            <tr class="highlight">
                <td><strong>Resultado Antes del Impuesto a la Renta</strong></td>
                <td>11,560</td>
            </tr>
            <tr>
                <td>Impuesto a la Renta (29.5%*)</td>
                <td>3,410</td>
            </tr>
            <tr class="total">
                <td><strong>Utilidad Neta</strong></td>
                <td>8,150</td>
            </tr>
        </tbody>
    </table>
</div>
<br><br>
<a href="../auditoria/auditoria.php"><button type="button" class="btn btn-primary">SALIR</button></a>
<button type="button" class="btn btn-primary"  onclick="window.print()">IMPRIMIR</button>
</body>
</html>
