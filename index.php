<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="swa/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="swa/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calcular Factorial</title>
</head>

<body>

    <div id="contenedor" class="row align-items-center">
        <form action="index.php" method="post" class="formulario"">
            <h2 style=" color: white;">¡Calcula el factorial de un número!</h2>
            <input type="text" name="numero" class="cajatexto">
            <INPUT type="submit" value="Ver" class="boton">
        </form>
    </div>

    <?php
    if (isset($_POST["numero"])) {
        $numeroFactorizado = verFactorial($_POST["numero"]);
        echo "<script>Swal.fire('Hola!','El número factorial es: $numeroFactorizado','info')</script>";
    }

    function verFactorial($numeroAFactorizar)
    {
        if ($numeroAFactorizar == 0) {
            return 1;
        }
        return $numeroAFactorizar * verFactorial($numeroAFactorizar - 1);
    }
    ?>

</body>

</html>