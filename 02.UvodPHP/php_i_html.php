<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
</head>
<body>
    <h1>PHP & HTML</h1>

    <?php
        include "include_require.php";
        $ispis = "Ovo je ispisano pomoću PHP jezika";
    ?>

    <section>
        <p><?php echo $ispis?></p>
    </section>


</body>
</html>