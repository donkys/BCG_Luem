<!DOCTYPE html>
<html lang="en">

<head>
    <!-- head -->
    <?php
    require("Models/Configs.php");
    require("Views/head.php");

    // ADD REQUIRED GET OR POST METHOD


    ?>

    <!-- Title -->
    <title>ข้อที่ 1</title>
</head>

<body>
    <!-- navbar -->
    <header>
        <?php
        require("Views/navbar.php");
        require("Controls/Control.php");
        if (isset($_POST["sell"])) {
            sellBird($_POST["id"]);
        }
        $result = getBird();
        ?>
    </header>

    <!-- Content -->
    <main>
        <center>
            <h1>ขายนก [รวมที่ขายได้ <?php echo getSumSold(); ?>$]</h1>
        </center>
        <table class="table">
            <tr>
                <th scope="col">รหัสนก</th>
                <th scope="col">Red </th>
                <th scope="col">Green </th>
                <th scope="col">Blue </th>
                <th scope="col">Status </th>
                <th scope="col">ราคา (USD) </th>
                <th scope="col">ซื้อนก</th>
            </tr>
            <?php
            $sum = 0;
            while ($row = $result->fetch_assoc()) {
                $sum = $sum + 1;
                print("
                    <tr>
                        <th scope='row' style='color:rgb(" . $row["red"] . "," . $row["green"] . "," . $row["blue"] . ")'>" . $row["birdid"] . "</th>
                        <td>" . $row["red"] . "</td>
                        <td>" . $row["green"] . "</td>
                        <td>" . $row["blue"] . "</td>
                        <td>" . (($row["statussold"]) ? "<p style='color: green'> ยังไม่ขาย " : "ขายแล้ว") . "</td>
                        <td>" . $row["price"] . "</td>
                        <td>            
                            <form method='post' action='sell.php'>
                                <input type='hidden' name='id' value='" . $row["birdid"] . "'>
                                <input type='submit'  name='sell' value='ซื้อนก'" . (($row["statussold"]) ? "  " : " disabled ") . " class='btn btn-success btn-lg'>
                            </form>
                        </td>
                    </tr>
                ");
            }
            ?>
        </table>
        <tfoot>
            <tr>
                <th scope='row'>รวม <?php echo $sum ?> ตัว</th>
            </tr>
        </tfoot>
    </main>

    <!-- footer -->
    <?php
    require("Views/footer.php");
    ?>

</body>

</html>