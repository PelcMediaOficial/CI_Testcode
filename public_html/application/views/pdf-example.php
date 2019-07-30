<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Cotización</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        @page { margin: 0px; font-family: sans-serif;}
        body {
            margin: 0px;
            font-family: sans-serif;
            font-size:12px;
        }
       
        .text-center {
            text-align: center;
        }

        .bg-gray {
            background-color: silver;
            color: #333;
        }

        .bg-blue {
            background-color: #074370;
            color: #fff;
        }

        .col{
            display:inline-block;            
        }
    </style>
</head>

<body class="container">
    <div>
        <div class="col w-50 bg-gray text-center" style="height:120px;">
            <img src="<?= base_url('dist/img/logo.jpg')?>" class="logo" /><br/>
            <a href="#">www.sitioweb.cl</a>
        </div>
        <div class="col w-50 bg-blue text-center" style="height:120px;">
            <p>COTIZACIÓN Nº 58369</p>
        </div>
    </div>
    <div>
        <div class="col w-50">
            <div>
                <p>
                <h3>Datos del Cliente</h3>
                <ul>
                <li>96.753.420-K</li>
                <li>Arteknia S.A.</li>
                <li>Av. Apoquindo 6411 Local 40</li>
                <li>Contacto: Mariana Moller</li>
                <li>Teléfono: +56223659865</li>
                <li>Email: mmoller@arteknia.cl</li>
                </ul>
                <p>
            </div>
        </div>
        <div class="col w-50">
            <p>
                <h3>Detalles de la Cotización</h3>
                <ul>
                    <li>Fecha: 12-06-2019</li>
                    <li>Válida Hasta: 22-06-2019</li>
                    <li>Vendedor: Erick Palma</li>
                    <li>Email: epalma@ledstudio.cl / Teléfono: +56223853500</li>
                    <li>Showroom Santiago Centro - Grajales 2487, Santiago.</li>
                    <li>Observaciones: Consultas al teléfono 223853518.</li>
                </ul>
            <p>
        </div>
    </div>
    <div class="footer">
    </div>
</body>

</html>