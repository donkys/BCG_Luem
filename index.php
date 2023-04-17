<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head -->
    <?php
    require("Models/Configs.php");
    require("Views/head.php");

    ?>

    <!-- Title -->
    <title>Chitin Bio-Plastic</title>
</head>

<body>
    <!-- navbar -->
    <header>
        <?php
        // ADD REQUIRED, GET OR POST METHOD
        require("Views/navbar.php");
        require("Controls/Control.php");
        // if (isset($_POST["sell"])) {
        //     addBird();
        // }
        // $result = getBird();
        ?>
    </header>

    <!-- Content -->
    <main>


    </main>

    <!-- footer -->
    <?php
    require("Views/footer.php");
    ?>

</body>

</html>