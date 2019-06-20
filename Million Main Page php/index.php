<?php 

    include 'src/content/head.inc.php';
    //$mokejimas = $_GET['mokejimas'];

    if ($_GET['mokejimas'] == "sekmingas") {
        $mok = 1;
    }
    if (isset($_GET['success'])) {
        $email = 1;
    }
    ?>


<div class="panels width-alt">
    <div class="panelMain">
        <div class="panel-heading">Kada tu būsi milijonierius?</div>
        <div class="panel-switch">
            <a class="panel-first" onclick="changeContent();">
                Periodinis investavimas
            </a>
            <a class="panel-second" onclick="changeContent();">
                Vienkartinis investavimas
            </a>
        </div>
        <div class="panel-content" id="first" style="display:none;">
            <form onsubmit="return countPeriod();">
                <p>Kiek jums metų?</p>
                <input type="text" required name="age" id="age">
                <p>Kiek norite investuoti dabar?</p>
                <input type="text" required name="money" id="moneyNow">
                <p>Kokią sumą kėtinate investuoti kas metus?</p>
                <input type="text" required name="money" id="moneyInvest">
                <input type="submit" name="submit" value="Sužinok datą">
                <a href="knyga.php?book=1">Sužinok kaip</a>
            </form>
        </div>
        <div class="panel-content" id="second" style="display:block;">
            <form onsubmit="return countSingle();">
                <p>Kiek jums metų?</p>
                <input type="text" required name="age1" id="age1">
                <p>Kiek norite investuoti dabar?</p>
                <input type="text" required name="money1" id="moneyNow1">
                <p style="visibility:hidden;">Kokią sumą kėtinate investuoti kas mėnesį?</p>
                <input style="visibility:hidden;" type="text">
                <input type="submit" name="submit" value="Sužinok datą">
                <a href="knyga.php?book=1">Sužinok kaip</a>
            </form>
        </div>
    </div>
    <div class="panelMain">
        <div class="panel-heading">Gauk nemokamą knygą</div>
        <div class="panel-content">
            <h1>Knyga: Kaip pasiekti finansinę laisvę?</h1>
            <form action="system/sendBook.php" method="post">
                <p>Vardas</p>
                <input type="text" required name="name" id="name">
                <p>El. Paštas</p>
                <input type="email" email required name="email" id="email">
                <p>Telefono numeris</p>
                <input type="text" required name="telnr" id="telnr">
                <input type="submit" name="submit" value="Parsisiųsti">
            </form>
        </div>
    </div>
</div>

<?php 
    if ($mok == 1) {
        echo "
        <div class='width-alt'>
        <p class='successMsg'>Mokėjimas sėkmingai atliktas</p>
        </div>
        ";
    }
    if($email == 1) {
        echo "
        <div class='width-alt'>
        <p class='successMsg'>Knyga sėkmingai išsiųsta el. paštu</p>
        </div>
        ";
    }
    ?>

<div class="mokymai width-alt">
    <span>Mokymai</span>
</div>

<div class="books width-alt">
    <div>
        <a href="knyga.php?book=1"><img src="src/img/books/<?php echo $firstBookImg; ?>" alt="million.lt <?php echo $firstBookTitle; ?>">
            <div class="book-img-content">
                <h2>
                    <?php echo $firstBookTitle; ?>
                </h2>
                <p>Po šių mokymų turėsite paruoštą planą kaip pasiekti finansinę nepriklausomybę ir 5 realius pavyzdžius kaip to pasiekti</p>
            </div>
        </a>
    </div>
    <div>
        <a href="knyga.php?book=2"><img src="src/img/books/<?php echo $secondBookImg; ?>" alt="million.lt <?php echo $secondBookTitle; ?>">
            <div class="book-img-content">
                <h2>
                    <?php echo $secondBookTitle; ?>
                </h2>
                <p>Aš galiu parduoti ledus eskimui, o tu?<br>
                    Po mokymų galėsi ir tu.</p>
            </div>
        </a>
    </div>
    <div>
        <a href="knyga.php?book=3"><img src="src/img/books/<?php echo $thirdBookImg; ?>" alt="million.lt <?php echo $thirdBookTitle; ?>">
            <div class="book-img-content">
                <h2>
                    <?php echo $thirdBookTitle; ?>
                </h2>
                <p>Vienintelis dalykas kuris stabdo tave nuo to, ko nori pasiekti - tai netikusi istorija, kurią kartoji sau mintyse.</p>
            </div>
        </a>
    </div>
    <div>
        <a href="knyga.php?book=4"><img src="src/img/books/<?php echo $fourthBookImg; ?>" alt="million.lt <?php echo $fourthBookTitle; ?>">
            <div class="book-img-content">
                <h2>
                    <?php echo $fourthBookTitle; ?>
                </h2>
                <p>Efektyvus vadovavimas komandai ir įgalinanti lyderystė: praktinės įžvalgos.</p>
            </div>
        </a>
    </div>
    <div>
        <a href="knyga.php?book=5"><img src="src/img/books/<?php echo $fifthBookImg; ?>" alt="million.lt <?php echo $fifthBookTitle; ?>">
            <div class="book-img-content">
                <h2>
                    <?php echo $fifthBookTitle; ?>
                </h2>
                <p>Efektyvus vadovavimas komandai ir įgalinanti lyderystė: praktinės įžvalgos.</p>
            </div>
        </a>
    </div>
    <div>
        <a href="knyga.php?book=6"><img src="src/img/books/<?php echo $sixthBookImg; ?>" alt="million.lt <?php echo $sixthBookTitle; ?>">
            <div class="book-img-content">
                <h2>
                    <?php echo $sixthBookTitle; ?>
                </h2>
                <p>Sužinok kaip turi valdyti savo pinigus, kad būtum sėkmingas žmogus.</p>
            </div>
        </a>
    </div>
</div>

<div class="aboutThis width-alt">
    <div>
        <h1>Apie Million.lt</h1>
        <p>Remiantis statistika, mažiau nei 5% žmonių siekia finansinės nepriklausomybės, domisi investavimu ir rūpinasi savo ateitimi. Dauguma tikisi, kad valstybė jais pasirūpins, tačiau ar galime būti tuo užtikrinti? Pagrindinis Million.lt tikslas mokyti finansinio raštingumo, naujų įgūdžių, bei parodyti trumpiausius kelius kaip užsibrėžti ir pasiekti savo užsibrėžtus tikslus. Šis projektas buvo sukurtas tam, kad bet kuris žingeidus žmogus galėtų mokytis iš savo srities profesionalų, kurie jau yra pasiekę tai, apie ką jis dar tik svajoja. Million.lt projekto misija pakeisti žmonių požiūrį į pinigus, išmokyti savo klientus ne dirbti dėl pinigų, o mokytis įdarbinti savo pinigus, kad pinigai dirbtų ir generuotų pajamas.</p>
    </div>
    <div>
        <img src="src/img/ud35749s.png" alt="">
    </div>
</div>

<div id="myModal" class="modal">

</div>

<?php include 'src/content/footer.inc.php'; ?>

<script>
    function toggleMenu() {
        var menuBox = document.querySelector('nav ul');
        if (menuBox.style.display == "block") { // if is menuBox displayed, hide it
            menuBox.style.display = "none";
        } else { // if is menuBox hidden, display it
            menuBox.style.display = "block";
        }
    }

</script>
<script src="src/js/main.js"></script>
