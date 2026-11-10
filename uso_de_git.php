<?php
$numeros = [];

for ($i = 0; $i < 50; $i++) {
    $numeros[] = rand(1, 100);
}

$tresMayores = [];

if (isset($_POST['mostrar'])) {
    $numeros = explode(",", $_POST['numeros']);

    rsort($numeros);

    $tresMayores = array_slice($numeros, 0, 3);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Arreglos</title>

<style>
body{
    font-family: Arial, sans-serif;
    text-align:center;
    background:#f0f0f0;
}

.contenedor{
    width:80%;
    margin:auto;
    background:white;
    padding:20px;
    margin-top:30px;
    border-radius:10px;
}

button{
    padding:10px 20px;
    cursor:pointer;
}
</style>

</head>
<body>

<div class="contenedor">

    <h2>50 Números Aleatorios</h2>

    <p>
        <?php echo implode(", ", $numeros); ?>
    </p>

    <form method="POST">
        <input
            type="hidden"
            name="numeros"
            value="<?php echo implode(",", $numeros); ?>"
        >

        <button type="submit" name="mostrar">
            Mostrar los 3 más grandes
        </button>
    </form>

    <?php if (!empty($tresMayores)) { ?>
        <h2>Los 3 números más grandes son:</h2>

        <p>
            <?php echo implode(", ", $tresMayores); ?>
        </p>
    <?php } ?>

</div>

</body>
</html>