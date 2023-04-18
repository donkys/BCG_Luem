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

        <!-- Navbar -->
        <nav class="navbar navbar-light bg-light head-nav" style="z-index: 1; padding: 0px 40px; filter: drop-shadow(-2mm 1mm 3mm rgb(211, 211, 211)); position: fixed; width: 100%;">
            <a class="navbar-brand" href="./">
                <img src="Views\Chitin_BioPlastic.png" width="130" class="d-inline-block align-top" alt="logo-chitin">
                <span style="padding-left:20px; margin-top:10px; font-size: 40px; font-weight: 600; color:rgb(53,90,146); font-family: 'Caveat', cursive;" class="nav-text d-inline-block align-top">Chitin Bio-Plastic</span>
            </a>

            <a class="navbar-brand" style="padding:0px">
                <button type="button" onclick="location.href='index.php'">
                    <i class="fa-solid fa-shrimp"> </i> เนื้อหา
                </button>
                <button type="button" style="font-weight:600; border-bottom: 10px solid #ff2f2f; color: #ff2f2f;" disabled>
                    <i class="fa-solid fa-wheat-awn-circle-exclamation"> </i> ผลกระทบ
                </button>
                <button type="button" onclick="location.href='about.php'">
                    <i class="fa-solid fa-circle-exclamation"> </i> เกี่ยวกับ
                </button>

            </a>
        </nav>
        <?php
        require("Controls/Control.php");

        ?>
    </header>

    <!-- Content -->

    <main>
        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">

                <center>
                    <h1 class="alert-heading"><b> ผลกระทบต่อ BCG</b></h1>
                </center>
                <div class="container">
                    <div class="card-deck mb-3" style="font-size: 25px; color:black">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#00235B; font-size: 25px;"><b> Bio economy</b></h5>
                                <p class="card-text">พัฒนา Bio plastic เพื่อนำมาทดแทน Single-used plastic เพื่อลดปัญหาขยะมูลฝอย</p>

                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#E21818; font-size: 25px;"><b>Circular economy</b></h5>
                                <p class="card-text">เป็นการนำ Food-waste จากอาหารของมนุษย์มาใช้งานให้เกิดประโยชน์สูงสุด</p>

                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title" style="color:#0EA293; font-size: 25px;"><b>Green economy</b></h5>
                                <p class="card-text">ในกระบวนการสกัด Chitin ส่งผลให้เกิด CO2 แต่ไม่ได้มีมากเท่าที่ควรเป็นกังวล และมีการฟอกสีโดยใช้สารแบบเดียวกับสิ่งทอซึ่งไม่เป็นอันตราย</p>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <br>

        <div style="background-color: #ff2f2f; padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">

                <center>
                    <h1 class="alert-heading"><b> ผลกระทบต่อระบบเศรษฐกิจของประเทศ </b></h1>
                </center>

                <center>
                    <img src="Views\s2.png" style="height: 302px;" alt="">
                    <img src="Views\s15.png" style="height: 302px;" alt="">
                </center> <br>
                <div class="indent" style="font-weight: 400;">
                    <p>
                        จากตารางในรูปเราจะเห็นว่าประเทศไทย มีการจับ บริโภคและส่งออกอาหารทะเล เฉพาะแค่กุ้งกับปูมากถึง 70,000 ตันต่อปี(2015) โดยหากเทียบกับประเทศอื่น ประเทศไทยเป็นถึงประเทศที่ผลิต Seafood อันดับที่ 15 ของโลก (2018)
                    </p>

                    <p>
                        จากข้อมูลข้างต้น คาดว่าหากนำมาทำ Chitin Bioplastic จะสามารถพัฒนาประเทศไทยได้มากขึ้น ในด้านการลดขยะพลาสติกจากการทำอาหารที่ใช้บรรจุภัณฑ์พลาสติก
                    </p>
                </div>

            </div>

        </div>

        <?php
        $kg = 1;
        if (isset($_POST["submit"]) && is_numeric($_POST["envi"])) {
            if ($_POST["envi"] > 0) {
                $kg = $_POST["envi"];
            } else {
                $kg = 1;
            }
        }


        ?>

        <br>
        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">

                <center>
                    <h1 class="alert-heading"><b> ค่าประมาณผลกระทบด้านสิ่งแวดล้อม </b></h1>
                </center>
            </div>
        </div>

        <div>
            <div style="width: 80%; margin: auto;">
                <br>
                <div class="display-results">
                    <div class="table-area table-fit">
                        <center>
                            <form action="./effect.php" method="post">
                                <input type="number" class="form-control-number" value="<?php if (isset($_POST["submit"])) echo $kg; ?>" name="envi" step="0.01" placeholder="ค่า Carbon Footprint ต่อ kg.">
                                <input type="submit" name="submit" value="คำนวน">
                            </form>
                        </center><br>
                        <div class="row justify-content-center">
                            <table class="table table-bordered table-hover" id="table_1" style="font-size: 18px; width: 1050px; ">
                                <tbody>
                                    <tr>
                                        <td><b>ลำดับ</b></td>
                                        <td><b>ชื่อ</b></td>
                                        <td><b>หน่วย</b></td>
                                        <td><b>ค่า Emission Factor (kgCO<sub>2</sub>e/หน่วย)</b></td>
                                        <td><b>ปริมาณ</b></td>
                                        <td><b>ค่า Carbon Footprint(kgCO<sub>2</sub>e)</b></td>
                                        <td><b>ค่า Carbon Footprint(kgCO<sub>2</sub>e) ต่อ <?php echo $kg; ?> kg.</b></td>


                                    </tr>
                                    <tr style="background-color: grey;">
                                        <td colspan="7"> กลุ่มเคมีภัณฑ์ (Chemicals)</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Acetic acid</td>
                                        <td>kg</td>
                                        <td>2.5702</td>
                                        <td>0.8</td>
                                        <td>0.2056</td>
                                        <td><?php echo $kg * 0.2056; ?></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hydrogen Peroxide50%</td>
                                        <td>kg </td>
                                        <td>1.1239</td>
                                        <td>1.5</td>
                                        <td>1.6859</td>
                                        <td><?php echo $kg * 1.6859; ?></td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sodium hydroxide</td>
                                        <td>kg</td>
                                        <td>1.1148</td>
                                        <td>0.25</td>
                                        <td>0.2787</td>
                                        <td><?php echo $kg * 0.2787; ?></td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Hydrochloric acid</td>
                                        <td>kg</td>
                                        <td>0.8709</td>
                                        <td>0.72</td>
                                        <td>0.6270</td>
                                        <td><?php echo $kg * 0.6270; ?></td>

                                    </tr>
                                    <tr style="background-color: grey;">
                                        <td colspan="7"> กลุ่มน้ำประปาและน้ำอุตสาหกรรม (Tap water) </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>น้ำประปา-การประปานครหลวง</td>
                                        <td>m3</td>
                                        <td>0.7948</td>
                                        <td>0.01333</td>
                                        <td>0.0106</td>
                                        <td><?php echo $kg * 0.0106; ?></td>

                                    </tr>
                                    <tr style="background-color: grey;">
                                        <td colspan="7"> กลุ่มไฟฟ้า</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Electricity, grid mix (ไฟฟ้า)</td>
                                        <td>kWh</td>
                                        <td>0.5986</td>
                                        <td>4</td>
                                        <td>2.3944</td>
                                        <td><?php echo $kg * 2.3944; ?></td>

                                    </tr>
                                    <tr style="background-color: #ff2f2f;">
                                        <td colspan="5" style="color: white;">ค่า Carbon Footprint ของ Chitin Bioplastic 1 กิโลกรัม คือ</td>
                                        <td style="color: white;">5.20 kgCO<sub>2</sub>e</td>
                                        <td style="background-color: #fff;"><?php echo $kg; ?> กิโลกรัม : <?php echo $kg * (0.2056 + 1.6859 + 0.2787 + 0.6270 + 0.0106 + 2.3944); ?> kgCO<sub>2</sub>e</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br>




        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">

                <center>
                    <h1 class="alert-heading"><b> ค่าประมาณผลกระทบด้านเศรษฐศาสตร์</b></h1>
                </center>
            </div>
        </div>

        <div>
            <div style="width: 80%; margin: auto;">
                <div class="display-results">
                    <div class="table-area table-fit"><br>
                        <center>
                            <p><b> ต้นทุนคงที่ </b></p>
                        </center>
                        <div class="row justify-content-center">
                            <table class="table table-bordered table-hover" id="table_1" style="font-size: 18px; width: 1050px; ">
                                <tbody>
                                    <tr>
                                        <td><b>ลำดับ</b></td>
                                        <td><b>วัสดุ</b></td>
                                        <td><b>ราคา (บาท)</b></td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>หม้อต้ม</td>
                                        <td>250</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Hydrogen Peroxide50%</td>
                                        <td>230 </td>

                                    </tr>

                                    <tr style="background-color: #ff2f2f;">
                                        <td colspan="2" style="color: white;">ต้นทุนคงที่รวม</td>
                                        <td style="color: white;">480 บาท</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <div>
            <div style="width: 80%; margin: auto;">
                <div class="display-results">
                    <div class="table-area table-fit"><br>
                        <center>
                            <p><b> ต้นทุนการผลิตต่อชิ้น </b></p>
                        </center>
                        <div class="row justify-content-center">
                            <table class="table table-bordered table-hover" id="table_1" style="font-size: 18px; width: 1050px; ">
                                <tbody>
                                    <tr>
                                        <td><b>ลำดับ</b></td>
                                        <td><b>รายการ</b></td>
                                        <td><b>หน่วย</b></td>
                                        <td><b>ราคาต่อหน่วย</b></td>
                                        <td><b>ราคารวม (บาท)</b></td>


                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>เปลือกกุ้งแห้ง</td>
                                        <td>500 กรัม</td>
                                        <td>300 บาท/กก.</td>
                                        <td>150</td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sodium Hydroxide (NAOH)</td>
                                        <td>250 มิลลิลิตร</td>
                                        <td>69 บาท/กก.</td>
                                        <td>17.25</td>


                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>น้ำ</td>
                                        <td>0.01333 ลบ.ม.</td>
                                        <td>9 บาท/หน่วย</td>
                                        <td>0.11997</td>


                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>ไฟฟ้า</td>
                                        <td>4 หน่วย</td>
                                        <td>3.74 บาท/หน่วย</td>
                                        <td>22.82</td>


                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Hydrochloric (HCL)</td>
                                        <td>720 มิลลิลิตร</td>
                                        <td>22 บาท/กก.</td>
                                        <td>15.84</td>


                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Hydrogen Peroxide (H2O2)</td>
                                        <td>1500 มิลลิลิตร</td>
                                        <td>22.20 บาท/กก.</td>
                                        <td>33.3</td>


                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Acetic acid หรือน้ำส้มสายชู</td>
                                        <td>80 มิลลิลิตร</td>
                                        <td>60 บาท/ลิตร</td>
                                        <td>4.8</td>


                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Glycerin</td>
                                        <td>20 กรัม</td>
                                        <td>76.64 บาท/กก.</td>
                                        <td>1.5328</td>


                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>ค่าแรง</td>
                                        <td>1 วัน</td>
                                        <td>353 บาท/วัน</td>
                                        <td>17.65 บาท/กก.</td>


                                    </tr>
                                    <tr style="background-color: #ff2f2f;">
                                        <td colspan="4" style="color: white;">ต้นทุนการผลิตต่อชิ้น/ต้นทุนแปรผัน</td>
                                        <td style="color: white;">263.31 บาท</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 1000px; margin: auto; color: white;">
                <h1 class="alert-heading"><b> เมื่อขายราคา 400 บาท </b></h1>
                <h1 class="alert-heading"><b> จุดคุ้มทุน </b> = ต้นทุนคงที่ / (ราคาขาย - ต้นทุนแปรผัน)</h1>
                <h1 class="alert-heading"><b> จุดคุ้มทุน </b> = 480 / (400 - 263)</h1>
                <h1 class="alert-heading"><b> จุดคุ้มทุน </b> = 3.5 กิโลกรัม</h1>
                <h1 class="alert-heading"> จะคุ้มทุนเมื่อผลิตและขายผลิตภัณฑ์ได้ 3.5 กิโลกรัมขึ้นไป</h1>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php
    require("Views/footer.php");
    ?>

</body>

</html>