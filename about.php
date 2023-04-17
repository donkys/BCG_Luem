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
                <button type="button" onclick="location.href='effect.php'">
                    <i class="fa-solid fa-wheat-awn-circle-exclamation"> </i> ผลกระทบ
                </button>
                <button type="button" style="font-weight:600; border-bottom: 10px solid #ff2f2f; color: #ff2f2f;" disabled>
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
                <h1 class="alert-heading">ผู้จัดทำ</h1>
                <ol>
                    <li>62070135 นายพศิน คูสุวรรณ</li>
                    <li>62070151 นางสาวภูริชญา จานะพร</li>
                    <li>63050139 นายธนัตถ์ สิทธิประสงค์</li>
                    <li>63050148 นายธิษณบดินท์ ทรายเพชร์</li>
                    <li>63050156 นายปรพิพัฒน์ แก่นพุฒ</li>
                    <li>63050157 นางสาวปิยาภรณ์ ตั้งจิตสิริสิน</li>
                    <li>63050196 นายสรณ์พัฒน์ อ่ำเที่ยงธรรม</li>
                    <li>63050200 นางสาวสิรินภัทร เลิศภูริปราชญ์</li>
                </ol>
            </div>

        </div>
        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">
                <h1 class="alert-heading">แหล่งที่มา</h1>
                <ol>
                    <li>
                        ข้อมูลหลัก [https://www.researchgate.net/publication/317227631_Production_of_chitin_and_chitosan_from_shrimp_shell_wastes/link/595b9df9458515
                    </li>
                    <li>
                        ปริมาณChitin% ในเปลือกกุ้ง [https://www.researchgate.net/figure/Percent-of-chitin-in-different-local-sources_tbl1_6423408] </li>
                    <li>
                        วิธีการทำ Plastic [https://www.youtube.com/watch?v=tK-OgZOePQQ&ab_channel=CorinneOkadaTakara] </li>
                    <li>
                        วิธีผลิต Chitin
                        [https://www.siamchemi.com/%E0%B9%84%E0%B8%84%E0%B9%82%E0%B8%95%E0%B8%8B%E0%B8%B2%E0%B8%99/]
                        [https://pubmed.ncbi.nlm.nih.gov/25345123/](https://pubmed.ncbi.nlm.nih.gov/25345123/) </li>
                    <li>
                        ขยะในแต่ละประเทศ
                        [https://www.visualcapitalist.com/cp/visualized-ocean-plastic-waste-pollution-by-country/]</li>
                    <li>
                        จับปลาได้ต่อปี
                        [https://www.indexmundi.com/facts/indicators/ER.FSH.PROD.MT/rankings] </li>
                </ol>
            </div>

        </div>

    </main>


    <!-- footer -->
    <?php
    require("Views/footer.php");
    ?>

</body>

</html>