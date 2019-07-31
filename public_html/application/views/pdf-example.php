<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOMPDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /** Define the margins of your page **/
        @page {
            margin: 100px 25px;
        }

        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;

            /** Extra personal styles **/
            background-color: #03a9f4;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>

<body class="container-fluid">

    <!-- Define header and footer blocks before your content -->
    <header>
        Our Code World
    </header>

    <footer>
        Copyright &copy; <?php echo date("Y");?>
    </footer>

    <table class="table">
        <tbody>
            <tr>
                <td>
                    <p>
                        <h3>Datos del Cliente</h3>
                        <ul>
                            <li>XX.XXX.XX-K</li>
                            <li>XXXXXXX S.A.</li>
                            <li>Av. Apoquindo XXX Local XX</li>
                            <li>Contacto: XXXXX Moller</li>
                            <li>Teléfono: +562XXXXXXXX</li>
                            <li>Email: mmoller@XXXX.cl</li>
                        </ul>
                        <p>
                </td>
                <td>
                    <p>
                        <h3>Detalles de la Cotización</h3>
                        <ul>
                            <li>Fecha: 12-06-2019</li>
                            <li>Válida Hasta: 22-06-2019</li>
                            <li>Vendedor: XXXXX Palma</li>
                            <li>Email: xpalma@XXXX.cl / Teléfono: +562XXXXXXXX</li>
                            <li>Santiago Centro - Grajales XXXX, Santiago.</li>
                            <li>Observaciones: Consultas al teléfono 2XXXXXXX.</li>
                        </ul>
                        <p>
                </td>
            </tr>
        </tbody>
    </table>
    <hr />
    <table class="table">
        <caption>List of users</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i=1; $i < 20; $i++) : ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</body>

</html>