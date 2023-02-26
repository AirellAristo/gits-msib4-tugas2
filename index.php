<!-- fastLink = http://localhost/gits/portofolio/ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="test2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
<body>

<!-- navigation bar dibawah ini -->
    <div id="bgnav">
        <a href="#skills">Skills</a>
        <a href="#about">About Me</a>
        <a href="#hero" class="title"><i class="bi bi-code-square"></i>&nbsp;Personal Portofolio</a>
    </div>
<!-- sampai sini codingan navigation bar -->

<!-- kartu yang dijadikan background utama -->
    <div id="hero">
        <span class="hnamebox">
            <h1 class="heroname">Hello My Name 
            <br><span id="name">Airell Aristo Subagia</span> </h1>
        </span>
    </div>
<!-- selesai disini -->


<!-- kartu nama -->
    <section id=hoverabout></section>
    <section id="about">
        <h1 class="sAbout">About Me</h1>
        <br>
        <table id="namecard">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>Airell Aristo Subagia</td>
                <td rowspan="3"><img class="face" src="incPhotoMhs.png"></td>
            </tr>
            <tr>
                <td>Campus</td>
                <td>:</td>
                <td>Universitas Kristen Duta Wacana</td>
            </tr>
            <tr>
                <td>Domicile</td>
                <td>:</td>
                <td>Yogyakarta</td>
            </tr>
        </table>
    </section>
<!-- kartu nama selesai disini -->

    <h1 class=skillSection>Skills</h1>
<!--chart start-->
    <section id="skills">
        <div class="skill">
            <div class="skillName">Python (75%)
                <div class="skillBar">&nbsp;</div>
                <div class="skillPer" style="width:160px;margin-left: 400px;">&nbsp;</div>           
            </div>
        </div>

        <div class="skill">
            <div class="skillName">HTML (50%)
                <div class="skillBar">&nbsp;</div>
                <div class="skillPer" style="width:260px;margin-left: 300px;">&nbsp;</div>           
            </div>
        </div>

        <div class="skill">
            <div class="skillName">CSS (50%)
                <div class="skillBar">&nbsp;</div>
                <div class="skillPer" style="width:260px;margin-left: 300px;">&nbsp;</div>           
            </div>
        </div>

        <div class="skill">
            <div class="skillName">PHP (50%)
                <div class="skillBar">&nbsp;</div>
                <div class="skillPer" style="width:260px;margin-left: 300px;">&nbsp;</div>           
            </div>
        </div>
    </section>
    <!--chart end-->



    <footer>
        <br>
        <br>
        <p>Dibuat Oleh Airell Aristo Subagia</p>
        <br>
        <br>
    </footer>
</body>
<script src="script2.js"></script>
</html>

