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
                <button type="button" style="font-weight:600; border-bottom: 10px solid #ff2f2f; color: #ff2f2f;" disabled>
                    <i class="fa-solid fa-shrimp"> </i> เนื้อหา
                </button>
                <button onclick="location.href='effect.php'" type="button">
                    <i class="fa-solid fa-wheat-awn-circle-exclamation"> </i> ผลกระทบ
                </button>
                <button onclick="location.href='about.php'" type="button">
                    <i class="fa-solid fa-circle-exclamation"> </i> เกี่ยวกับ
                </button>

            </a>
        </nav>
        <?php
        // ADD REQUIRED, GET OR POST METHOD
        require("Controls/Control.php");
        // if (isset($_POST["sell"])) {
        // addBird();
        // }
        // $result = getBird();
        ?>
    </header>

    <!-- Content -->

    <main>
        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">
                <h1 class="alert-heading">Chitin Bioplastic คืออะไร?</h1>
                <p class="mb-0">ชนิดของพลาสติกที่นำเปลือกสัตว์ซึ่งประกอบไปด้วยไคตินมาใช้ในการสร้างถุงพลาสติก โดยมีคุณสมบัติสามารถย่อยสลายได้เองตามธรรมชาติ</p>

            </div>

        </div>

        <div style="width:100%; padding: 20px 0 5px;">
            <center>
                <img src="https://i0.wp.com/bioplasticsnews.com/wp-content/uploads/2019/02/shellworks-lobster-bioplastic-design_dezeen_2364_col_9.jpg?ssl=1" style="height: 302px;" alt="">
                <img src="https://pubs.acs.org/cms/10.1021/acsami.2c12764/asset/images/large/am2c12764_0011.jpeg" style="height: 302px; " alt="">

            </center>
        </div>
        <hr>

        <div>
            <div style="width: 80%; margin: auto;">
                <div class="pricing-header px-3 py-2 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4" style="font-weight: 600; text-decoration:underline; color: rgb(53,90,146);">ที่มาและวัตถุประสงค์</h1>
                </div>
                <div class="indent" style="font-weight: 400;">
                    <p>เนื่องจากมีการทิ้งขยะจำพวก เปลือกกุ้ง/ปู เยอะมากๆ ซึ่งมีส่วนประกอบของ Chitin อยู่ถึง 30% หากทิ้งเอาไว้เฉยๆจะเกิดการเน่าเสียและส่งผลให้เกิดก๊าซ Methane เป็นจำนวนมาก
                        จึงได้มีการคิดค้นพลาสติกพิเศษที่ถูกทำมาจากส่วนประกอบหลักเป็น Chitin ออกมา</p>
                </div>


                <div class="alert alert-info" role="alert">
                    ใน<a href="https://www.researchgate.net/publication/317227631_Production_of_chitin_and_chitosan_from_shrimp_shell_wastes" class="alert-link">เปลือกกุ้ง</a> 1 KG มี Chitin อยู่มากถึง
                    15-30% คิดเป็น 150-300 กรับ ซึ่งสามารถผลิตพลาสติกได้ กว่า 2-3 KG
                </div>

                <br>


                <div class="display-results">
                    <div class="table-area table-fit">
                        <center>
                            <p><b> ปัญหาจากขยะในประเทศไทย</b></p>
                        </center>
                        <div class="row justify-content-center">
                            <table class="table table-bordered table-hover" id="table_1" style="font-size: 18px; width: 850px; ">
                                <tbody>
                                    <tr>
                                        <td><b>Rank</b></td>
                                        <td><b>Annual Ocean Plastic Waste (Metric tons)</b></td>
                                        <td><b>Country</b></td>
                                    </tr>
                                    <tr>
                                        <td>#1</td>
                                        <td>Philippines</td>
                                        <td>356,371</td>
                                    </tr>
                                    <tr>
                                        <td>#2</td>
                                        <td>India</td>
                                        <td>126,513</td>
                                    </tr>
                                    <tr>
                                        <td>#3</td>
                                        <td>Malaysia</td>
                                        <td>73,098</td>
                                    </tr>
                                    <tr>
                                        <td>#4</td>
                                        <td>China</td>
                                        <td>70,707</td>
                                    </tr>
                                    <tr>
                                        <td>#5</td>
                                        <td>Indonesia</td>
                                        <td>56,333</td>
                                    </tr>
                                    <tr>
                                        <td>#6</td>
                                        <td>Myanmar</td>
                                        <td>40,000</td>
                                    </tr>
                                    <tr>
                                        <td>#7</td>
                                        <td>Brazil</td>
                                        <td>37,799</td>
                                    </tr>
                                    <tr>
                                        <td>#8</td>
                                        <td>Vietnam</td>
                                        <td>28,221</td>
                                    </tr>
                                    <tr>
                                        <td>#9</td>
                                        <td>Bangladesh</td>
                                        <td>24,640</td>
                                    </tr>
                                    <tr style="background-color: #ff2f2f;">
                                        <td style="color: white;">#10</td>
                                        <td style="color: white;">Thailand</td>
                                        <td style="color: white;">22,806</td>
                                    </tr>
                                    <tr>
                                        <td "></td>
                                        <td >Rest of the World</td>
                                        <td >176,012</td>
                                    </tr>
                                    <tr>
                                        <td "></td>
                                        <td><b> Total</b></td>
                                        <td><b>1,012,500</b></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

        <hr>
        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">
                <center>
                    <h1 class="alert-heading">Process วิธีการดำเนินงาน </h1>

                    <div style="padding-left: 20px; position: static; ">
                        <table>
                            <tr>
                                <td>
                                    <div style="width: 500px;" class="alert alert-warning " role="alert">
                                        <h2 class="alert-heading">วัตถุดิบที่ต้องใช้</h2>
                                        <hr>
                                        <ul>
                                            <li>เปลือกกุ้ง</li>
                                            <li>หม้อต้ม</li>
                                            <li>โซเดียมไฮดรอกไซด์ (NaOH)</li>
                                            <li>กรดเกลือ (HCL)</li>
                                            <li>ไฮโดรเจนเปอร์ออกไซด์ (H2O2)</li>
                                            <li>น้ำ</li>
                                            <li>น้ำส้มสายชู</li>
                                            <li>Glycerin</li>
                                            <li>ถาดหรือแม่พิมพ์สำหรับขึ้นรูป</li>
                                        </ul>
                                    </div>
                                </td>
                                <td style="padding: 20px;">
                                    <img style="height: 450.89px; display: inline;" src="Views\process.png" alt="">
                                </td>
                            </tr>
                        </table>
                        <img src="Views\process2.png" style="height: 500px; " alt="">
                    </div>
                </center>
            </div>
        </div>

        <hr>
        <div style="background-color: #ff2f2f; padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">
                <h1 class="alert-heading">Chitin-Bioplastic VS Normal-Plastic </h1>
                <p class="mb-0">เป็นวัสดุสองประเภทที่มีคุณสมบัติแตกต่างกันและมีผลกระทบต่อสิ่งแวดล้อม</p>

                <div style="padding:20px; position: static; ">
                    <article class="postcard dark blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://gdb.voanews.com/A633F7C5-2CC1-43E7-884E-D8E0B4848604_w1200_r1.jpg" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title blue" style="color: red;">Chitin-Bioplastic</h1>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">ทำมาจากไคติน ซึ่งเป็นโพลิเมอร์ธรรมชาติที่พบในโครงกระดูกภายนอกของสัตว์จำพวกครัสเตเชียน แมลง และเชื้อรา เป็นทรัพยากรหมุนเวียนที่ย่อยสลายได้ทางชีวภาพและสามารถย่อยสลายได้ตามธรรมชาติในสิ่งแวดล้อมโดยไม่ก่อให้เกิดอันตราย พลาสติกชีวภาพไคตินมีคุณสมบัติเชิงกลคล้ายกับพลาสติกแบบดั้งเดิม เช่น แข็งแรง ยืดหยุ่น และทนทาน ทำให้เป็นทางเลือกที่เป็นมิตรต่อสิ่งแวดล้อมที่มีแนวโน้มดีกว่าพลาสติกทั่วไป</div>
                        </div>
                    </article>
                    <article class="postcard dark blue">
                        <a class="postcard__img_link" href="#">
                            <img class="postcard__img" src="https://cdn.mos.cms.futurecdn.net/WTXCtPFr6P7EygfJZ8DsA3-1200-80.jpg" alt="Image Title" />
                        </a>
                        <div class="postcard__text">
                            <h1 class="postcard__title blue" style="color: blue;">Normal-Plastic</h1>
                            <div class="postcard__bar"></div>
                            <div class="postcard__preview-txt">ผลิตจากทรัพยากรที่ไม่หมุนเวียน เช่น น้ำมันและก๊าซ ไม่สามารถย่อยสลายได้ทางชีวภาพและสามารถคงอยู่ในสิ่งแวดล้อมเป็นเวลาหลายร้อยปี ก่อให้เกิดอันตรายอย่างมากต่อระบบนิเวศและสัตว์ป่า การผลิตพลาสติกธรรมดายังก่อให้เกิดการปล่อยก๊าซเรือนกระจกและการเปลี่ยนแปลงสภาพภูมิอากาศ</div>
                        </div>
                    </article>
                    <br>
                    <div class="alert alert-success" role="alert">
                        <h2 class="alert-heading">Conclusion</h2>
                        <p> หากมีต้นทุนมากพอ Chitin-Bioplastic มีศักยภาพที่จะเป็นทางเลือกที่ยั่งยืนและใช้กันอย่างแพร่หลายแทนพลาสติกทั่วไป</p>
                    </div>

                </div>
            </div>
        </div>


        <hr>

        <div>
            <div style="width: 80%; margin: auto;">
                <div class="pricing-header px-3 py-2 pt-md-5 pb-md-4 mx-auto text-center">
                    <h1 class="display-4" style="font-weight: 600; text-decoration:underline; color: rgb(53,90,146);">ข้อดีและข้อเสีย</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card-deck mb-6 text-center" style="font-size: 18px;">
                <div class="card mb-6 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">ข้อดี</h4>
                    </div>
                    <ol class="mt-3 mb-4">
                        <li>สามารถช่วยในการลดขยะที่เกิดจากพลาสติกได้</li>
                        <li>เป็นการนำทรัพยากรที่ถูกใช้แล้วนำมาต่อยอดให้เกิดประฌยชน์ได้</li>
                        <li>มีความเข้ากันได้ทางชีวภาพ (ใช้แล้วไม่เกิดผลเสียต่อสิ่งมีชีวิต)</li>
                        <li>มีคุณสมบัติที่หลายอย่าง และถูกใช้ทั่วไปอยู่แล้ว</li>
                    </ol>
                </div>
                <div class="card mb-6 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">ข้อเสีย</h4>
                    </div>
                    <ol class="mt-3 mb-4">
                        <li>สามารถช่วยในการลดขยะที่เกิดจากพลาสติกได้</li>
                        <li>เป็นการนำทรัพยากรที่ถูกใช้แล้วนำมาต่อยอดให้เกิดประฌยชน์ได้</li>
                        <li>มีความเข้ากันได้ทางชีวภาพ (ใช้แล้วไม่เกิดผลเสียต่อสิ่งมีชีวิต)</li>
                        <li>มีคุณสมบัติที่หลายอย่าง และถูกใช้ทั่วไปอยู่แล้ว</li>
                    </ol>
                </div>
            </div>
            <br>

            <div class="card mb-6 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">ข้อจำกัด</h4>
                </div>
                <ol class="mt-3 mb-4">
                    <li>ในกระบวนการผลิตทำได้ยากเพราะเปลือกกุ้งเป็นของสด ทำให้ต้องเก็บรวบรวมวันต่อวัน</li>
                    <li>ถุงพลาสติกตัวนี้ใช้ขั้นตอนการทำที่ซับซ้อน</li>
                    <li>ใช้ได้ไม่นานเท่ากับถุงพลาสติกธรรมดา เพราะเป็นสิ่งที่ย่อยสลายได้</li>
                    <li>ไม่เหนียวและยืดหยุ่นเท่าถุงพลาสติกปกติ</li>
                </ol>
            </div>

        </div>
        <br>
        <hr>
        <div style="background-color: rgb(53,90,146); padding: 20px 0;">

            <div style="width: 80%; margin: auto; color: white;">
                <h1 class="alert-heading">ข้อเสนอแนะ</h1>
                <p class="mb-0"> ตัว Product เทียบกับถุงพลาสติกธรรมดาได้ไม่มาก แต่ถ้าหากสามารถพัฒนาจนเทียบเคียงได้ควรจะหยิบมาใช้เพราะในกระบวนการผลิตเป็นการลดขยะ และสินค้าสามารถย่อยสลายได้
                </p>

            </div>

        </div>






    </main>

    <!-- footer -->
    <?php
    require("Views/footer.php");
    ?>

</body>

</html>