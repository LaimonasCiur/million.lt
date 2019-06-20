<?php
   include 'config.php';
   if(isset($_GET['book']))
   {
       switch ($_GET['book']) {
           case 1: {
               $bookTitle = "AŠ ESU FINANSIŠKAI NEPRIKLAUSOMAS";
               $price = "€29.99";
               $places = "120";
               $rengejas = "Marius Kizikevičius";
               $imgSrc = "src/img/teachers/teacher3.png";
               $bookTime = "13:30";
               $bookPlace = "Vilnius, Litexpo";
               $bookDesc = "Tau šis seminaras neteiks naudos ir nebus įdomus jei tu žinai atsakymus į šiuos klausimus:
               Kada tu galėsi nebedirbti ir gyventi sau? 
               Kada tavo investicijų suma bus tokia, kad nebereiks bijoti dėl senatvės?
               Kada turėsi pakankamai pinigų, kad galėtum padaryti tai ką seniai svajojai? 
               Kada atsikelsi ryte ir nuspresi f*ck it, jau galiu mesti darbą?
               Kada darysi kažką kas pakeis pasaulį?
               Kada ateis ta diena, kai tu nebebijosi pamatyti didelę sąskaitą už šildymą, lizingą ar kažką panašaus?
               Kada nuvažiavęs į Monaką gyvensi Hotel de Paris ir net neklausi kiek pas juos kainuoja tas liukso numeris?
               Kada tavo pinigai stabiliai uždirbs 18-100% per metus?
               Nepriklausomai nuo to ar tavo svajonė turėti pilį ar Lamborghini, ar tiesiog turėti pakankamai laiko ir pinigų apkeliauti pasaulį, o gal tiesiog nedirbti ir turėti laiko žiūreti kaip auga tavo vaikai, šio seminaro metu tu rasi atsakymus į visus savo iškeltus klausimus ir nustatysi tikslias tikslų įgyvendinimo datas!";
               $teacherDesc = "Marius Kizelevičius - verslininkas, investuotojas, holdingo kompanijos savininkas ir direktorius, investuotojų angelas ir mentorius, BNI Vanagas narys.  Specializuojasi patirtinio mokymosi, įtaigios komunikacijos, nuostatų, strategijos ir nuomonės formavimo investicijų srityje.";
               break;
           }
           case 2: {
               $bookTitle = "Aš pardavimų vilkas";
               $price = "€29.99";
               $places = "120";
               $rengejas = "Valentinas Marinionokas";
               $imgSrc = "src/img/teachers/teacher5.png";
               $bookTime = "13:30";
               $bookPlace = "Vilnius, Litexpo";
               $bookDesc = "Ar tu gali man parduoti tušinuką? <br>Ar gali parduoti ledus eskimui?<br> Po šio seminaro galėsi.";
               $teacherDesc = "Valentinas Marinionokas profesionalus mokymų treneris, inovatyvus pardavėjas-
               praktikas, programų ,,Grizlio Metodas“ autorius. Sertifikuotas NLP praktikas. Svarbiausias ir prasmingiausias dalykas – santykių kokybė su žmonėmis: šeima, kolegomis, klientais ir kt.<br><br>
               20 metų patirtis – praktiniuose B2B/ B2C pardavimuose.<br>
               10 metų patirtis – suaugusiųjų mokyme.<br>
               2 apdovanojimai – metų pardavėjas.<br>";
               break;
           }
           case 3: {
               $bookTitle = "Aš galiu viską";
               $price = "€29.99";
               $places = "120";
               $rengejas = "Andrius Jarašiūnas";
               $imgSrc = "src/img/teachers/teacher2.png";
               $bookTime = "13:30";
               $bookPlace = "Vilnius, Litexpo";
               $bookDesc = "Kokių 3 dalykų tu labai nori, bet žinai, kad niekada nepasieksi?<br>   
               Kokius 3 dalykus tu šiandien pradėtum daryti, jei būtum 100% tikras, kad tau pasiseks?";
               $teacherDesc = "Andrius Jarašiūnas, NLP ir Koučingo specialistas, BNI Lietuva regiono direktorius. Specializuojasi patirtinio mokymosi, įtaigios komunikacijos, nuostatų ir nuomonės formavimo srityse.";
               break;
           }
           case 4: {
               $bookTitle = "Aš esu stiprus vadovas (-ė) ir lyderis (-ė)";
               $price = "€29.99";
               $places = "120";
               $rengejas = "Tomas Lekavičius";
               $imgSrc = "src/img/teachers/teacher6.png";
               $bookTime = "13:30";
               $bookPlace = "Vilnius, Litexpo";
               $bookDesc = "Įvairaus lygio vadovai yra savo rezultatų šeimininkai ne veltui. Sunkus, dažnai ilgametis darbas, išauginti įgūdžiai bei stiprios asmenybės nulėmė pasiektus tikslus. Todėl jiems nebeužtenka bendrinių, vien tik teorija ar pasenusiomis žiniomis pripildytų, mokymų. Jiems reikia požiūrį keičiančios, mąstymą stimuliuojančios bei realius pokyčius kuriančios patirties. Vadovai siekia bendro laiko giliam mąstymui bei praktinių žingsnių planavimui, adaptacijos įgūdžių kūrimui bei autentiškos lyderystės įgūdžių stiprinimui. Vadovams reikia tiesioginio grįžtamojo ryšio, atvirumo bei patarimų, kurie veikia.
               ";
               $teacherDesc = "Tomas Lekavičius yra verslo konsultantas ir lyderystės treneris. Jis padeda vadovams ir jų komandoms spręsti augimo, komunikacijos ir komandinio darbo problemas. Tarptautinius apdovanojimus laiminčių komandų vystymas, vadovų ir lyderių ugdymas bei edukacija, kompleksinių organizacijų pokyčių valdymas - Tomo kasdienybė.";
               break;
           }
           case 5: {
               $bookTitle = "Marketingas, tai ne reklama -sužinok vieną iš strategijų - BRANDSENSE";
               $price = "€29.99";
               $places = "120";
               $rengejas = "Rytė Lukošiūtė";
               $imgSrc = "src/img/teachers/teacher7.png";
               $bookTime = "13:30";
               $bookPlace = "Vilnius, Litexpo";
               $bookDesc = "";
               $teacherDesc = " • Patirtis su pardavimais - 15 metų,<br>
               • Privatūs komandos ir vadovų mokymai juridiniams asmenims - 2 metai,<br>
               • 'Laimingi Mūsų Namai' paramos kampanijos pardavimų grupės vadovas,<br>
               • 3 verslų savininkė,<br>
               • 'Verslo pažinčių' mentorė naujiems verslams ir Kauno pardavimų lyderių grupės narys,<br>
               • BigData Strategies, Financial Strategies and Consumers Products Conference - 2015 m.,<br> 
               • Health Unplugged Conference - 2014 m.,<br>
               • Lietuvos banko pensijų rinkos rodiklių analitikos konferencija - 2018 m.,<br>
               • Aurimo Vetrino konferencija (8h trukmės) “Mokymai vadovams: kaip vadovui pasiekti geriausią
               rezultatą komandiniame valdyme?” - 2018 m.<br>
               • SELDIA biggest selling Conference in Brussels - 2018 m.,<br>
               • Certificate in business Development, Level 2, Colchester Institute - 2010 m.;";
               break;
           }
           case 6: {
               $bookTitle = "Pinigų planavimas/skirstymas kasdienybėje";
               $price = "€29.99";
               $places = "120";
               $rengejas = "Nerijus Murauskas";
               $imgSrc = "src/img/teachers/teacher4.png";
               $bookTime = "13:30";
               $bookPlace = "Vilnius, Litexpo";
               $bookDesc = "Finansiniai įrankiai skolinantis (būsto kreditai, vartojimo kreditai)<Br>
               Supažindinu kaip jie veikia, 
               kaip tinkamai pasirinkti ir kokiomis sąlygomis, 
               kaip pasirenkant strategijas sumokėti mažiau palūkanų, 
               kaip jau turimus finansinius įsipareigojimus suoptimizuoti,
               kaip pasirūpinti, kad įsipareigojimai 'nesmaugtų' krizei atėjus,
               kaip finansinius įsipareigojimus atsverti finansinėmis apsaugomis.";
               $teacherDesc = "Verslininkas, lektorius, konsultantas.<br>
               „Savimi pasirūpinti yra mano pareiga, todėl į gyvenimą kabinuosi visomis keturiomis. Ir dar įsirėžęs nagais. Pinigai yra tema su kuria susiduriame kas dieną. Nepaisant to – švietimo apie pinigus Lietuvoje nėra. Matydamas šią problemą – dalinuosi savo žiniomis kaip teisingai tvarkyti savo pinigus. Tai daryti yra mano aistra.“  ";
               break;
           }
           default: {
               header("Location: index.php");
               die();
               break;
           }
       }
   } else {
       header("Location: index.php");
       die();
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <!-- META SETTINGS -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="verify-paysera" content="7c156592a47beb319922438f447d15c6">
      <!-- OTHER SETTINGS -->
      <title>MILLION.LT</title>
      <link rel="icon" type="image/png" href="src/img/icons/favicon.png">
      <!-- INCLUDES -->
      <link rel="stylesheet" href="src/css/main.css">
      <link rel="stylesheet" href="src/css/responsive.css">
      <link rel="stylesheet" href="src/css/reset.css">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
      <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/92fc45dd29bb7c123490fcb63/8b573573a579f37ab031f7049.js");</script>
   </head>
   <body>
      <div class="header">
         <div class="width">
            <div class="logo">
               <a href="index.php"><img src="src/img/logo/Group%204.svg" alt="million.lt logo"></a>
            </div>
            <nav>
               <a href="#" onclick="toggleMenu()" id="menu-icon"><i class="fa fa-bars"></i></a>
               <ul>
                  <li><a href="kontaktai.php" class="btn-border">Kontaktai</a></li>
               </ul>
            </nav>
            <div class="bookHeader">
               <p style="margin-bottom: -1em;">Seminaras</p>
               <h1 class="bookTitle">
                  <?php echo $bookTitle; ?>
               </h1>
               <p class="bookDesc">
                  <?php echo $bookDesc; ?>
               </p>
            </div>
         </div>
      </div>
      <style>
         .header {
            background-size: cover;
            height: 400px ;
         }
         body {
            background: #fff;
         }
         @media only screen and (min-width: 290px) and (max-width: 425px) {
            .header { height: 600px !important; }
            .dot { margin-top: 1em; }
         }
         @media only screen and (min-width: 425px) and (max-width: 768px) {
            .header { height: 500px !important; }
         }
      </style>
      <div class="width bookReview">
         <div class="bookReviewContent">
            <div class="bookSteps">
               <p class="bold no__top">Šių mokymų metu jūs</p>
               <?php
                  switch ($_GET['book']) {
                      case 1: {
                          echo '
                          <div class="willLearn">
                          <ul class="noBullet">
                              <div class="firstSteps">
                                  <li class="dot">Sužinosite kas yra finansinė nepriklausomybė, laisvė ir absoliuti laisvė.</li>
                                  <li class="dot">Išmoksite įsivertinti savo finansinius tikslus skaičiais.</li>
                                  <li class="dot">Susikursite planą, kaip juos pasiekti.</li>
                              </div>
                              <div class="secondSteps">
                              <li class="dot">Įveiksite baimes, kurios trukdo jūsų finansinei sėkmei.</li>
                              <li class="dot">Sužinosite bent 5 konkrečius būdus, kurie padėjo kitiems pasiekti tai ko norite.</li>
                              <li class="dot">Sužinosi kelis būdus, kaip uždirbti ne mažiau 18% per metus nuo savo investicijų.</li>
                              </div>
                          </ul>
                          </div>';
                          break;
                      }
                      case 2: {
                          echo '
                          <div class="willLearn">
                          <ul class="noBullet">
                              <div class="firstSteps">
                                  <li class="dot">Kokie veiksmai sukuria maksimalius rezultatus: gebėsit be streso parduoti daugiau ir per trumpesnį laiką.</li>
                                  <li class="dot">Kaip su klientais rasti bendrą kalbą: išvystysite ją iki sandorio, o vėliau ir iki nuolatinio bendradarbiavimo.</li>
                                  <li class="dot">5 principai kaip suprasti, kas iš tikro svarbu klientams: gebėsite parinkti sprendimą už kuri klientas sutiks sumokėti.</li>
                                  <li class="dot">6 įtaigaus pasiūlymo principai: labiau sudominsite klientą, jis akivaizdžiai suvoks, kodėl jam reikalinga Jūsų prekė (paslaugą).</li>
                              </div>
                              <div class="secondSteps">
                                  <li class="dot">Išmoksite, nešvaistant energijos ir laiko, sėkmingai užbaigti sandorį: užauginsite didesnį sandorių kiekį.</li>
                                  <li class="dot">Atskirsite tariamus ir tikruosius prieštaravimus: gebėsite juos pašalinti – „NE“ paversite į „TAIP“.</li>
                                  <li class="dot">Kas stabdo Jūsų asmeninį progresą: 3 principai, su mažiau pastangų – turėsite daugiau rezultatų.</li>
                              </div>
                          </ul>
                          </div>';
                          break;
                      }
                      case 3: {
                          echo '
                          <div class="willLearn">
                          <ul class="noBullet">
                              <div class="firstSteps">
                                 <li class="dot">Sužinosite kokie įsitikinimai trukdo jūsų sėkmei.</li>
                                 <li class="dot">Sulaužysite visus jus ribojančius įsitikinimus.</li>
                                 <li class="dot">Susikursite naujus įsitikinimus, kurie padės jums siekti savo tikslų.</li>
                                 <li class="dot">Sudarysite savo tikslų sąrašą.</li>
                              </div>
                              <div class="secondSteps">
                                 <li class="dot">Sudarysite planą kaip jų pasiekti.</li>
                                 <li class="dot">Sukursite įsipareigojimą sau juos pasiekti.</li>
                                 <li class="dot">Kas stabdo Jūsų asmeninį progresą: 3 principai, su mažiau pastangų – turėsite daugiau rezultatų.</li>
                              </div>
                          </ul>
                          </div>';
                          break;
                      }
                      case 4: {
                         echo '
                           <div class="willLearn">
                           <ul class="noBullet">
                              <div class="firstSteps">
                                 <li class="dot">Suprasi, kaip statyti bendrus tikslus, kurti organizacijos viziją bei įkvėpti komandos narius.</li>
                                 <li class="dot">Sužinosi, kaip optimizuoti savo komandos veiklą: ugdyti savarankiškumą, planuoti veiksmus bei kurti pasitikėjimo atmosferą.</li>
                              </div>
                              <div class="secondSteps">
                                 <li class="dot">Įgysi praktinį planą, kaip komunikuoti strateginių pokyčių laikotarpiu  išvengti kritinių klaidų, bendrauti tikslingai ir užtikrinti pokyčių tvarumą bei rezultatyvumą.</li>
                                 <li class="dot">Išgirsi patarimų, kaip didinti asmeninį produktyvumą: nuostatos, metodai bei įrankiai.</li>
                              </div>
                           </ul>
                           </div>
                         ';
                         break;
                      }
                      case 5: {
                        echo '
                        <div class="willLearn">
                        <ul class="noBullet">
                           <div class="firstSteps">
                              <li class="dot">Kaip neagresyvusis marketingas siejasi su pardavimais arba kodėl negalima pardavinėti telefonu?</li>
                              <li class="dot">Kodėl pardavimai nėra svajonių profesija ir siejasi su įkyrumu?</li>
                              <li class="dot">Pardavimo užuomazgos skambutyje.</li>
                           </div>
                           <div class="secondSteps">
                              <li class="dot">Šaltų skambučių etika ir klaidos.</li>
                              <li class="dot">Auginame savo kaip pardavimų vadovo/ vadybininko asmenybę.</li>
                           </div>
                        </ul>
                        </div>
                      ';
                        break;
                      }
                      case 6: {
                        echo '
                        <div class="willLearn">
                        <ul class="noBullet">
                           <div class="firstSteps">
                              <li class="dot">Kalbu apie dažniausiai daromas klaidas.</li>
                              <li class="dot">Kaip efektyviai skirstyti pinigus prieš juos išleidžiant.</li>
                              <li class="dot">Kokie yra pliusai ir minusai skirtingų įrankių.</li>
                           </div>
                           <div class="secondSteps">
                              <li class="dot">Kaip šeimoje susitarti pinigų valdymo taisykles, kad abu poroje darniai jaustųsi.</li>
                              <li class="dot">Kaip panaikinti frustraciją renkantis pirkti ar nepirkti.</li>
                              <li class="dot">Nuo ko pradėti dometis apie pinigų įdarbinimą, kad pasiekti finansinį užtikrintumą/laisvę.</li>
                           </div>
                        </ul>
                        </div>
                      ';
                        break;
                      }
                  }
                  ?>
            </div>
         </div>
      </div>
      <div class="teacher">
         <div class="width">
            <img src="<?php echo $imgSrc; ?>" alt="">
            <div class="teacherInfo">
               <span>Mokymų vedėjas</span>
               <p class="teacherTitle"><?php echo $rengejas; ?></p>
               <p><?php echo $teacherDesc;?></p>
            </div>
         </div>
      </div>
      <div class="bookingDetail width">
      <div class="reservation">
         <div class="reservInfo">
            <div class="item">
               <img src="src/img/icons/location-pin.png" alt="">
               <p class="bold"><?php echo $bookPlace; ?></p>
            </div>
            <div class="item">
               <img src="src/img/icons/clock-circular-outline.png" alt="">
               <p class="bold"><?php echo $bookTime; ?></p>
            </div>
            <div class="custom-select">
               <img src="src/img/icons/calendar.png" alt="">
               <select>
                  <option value="04.20">2019.04.20 10:30</option>
               </select>
            </div>
         </div>
         <div class="buyPlace">
            <div>
               <p>Vietų skaičius</p>
               <p class="numberLarge"><?php echo $places; ?></p>
            </div>
            <div>
               <p>Bilieto kaina</p>
               <p class="numberLarge"><?php echo $price; ?></p>
            </div>
         </div>
         <div>
            <button class="btn btn-main bold">Pirkti dabar</button>
            <button class="btn btn-secondary bold">Pirkti pigiau</button>
         </div>
        </div>
        <div class="consultate">
            <p class="bold">ĮSIGYTI BILIETĄ</p>
            <div>
                <p class="bold">NORI PASIKONSULTUOTI?</p>
                <p class="secondaryCons">Reikia pagalbos būsto kredito klausimais? Pristatome sertifikuotus būsto kredito konsultantus. Juos sutiksi seminare, o kontaktus gali rasti šiame <a href="kontaktai.php">puslapyje</a></p>
            </div>
        </div>
      </div>
      </div>
      <script>
         var x, i, j, selElmnt, a, b, c;
         /*look for any elements with the class "custom-select":*/
         x = document.getElementsByClassName("custom-select");
         for (i = 0; i < x.length; i++) {
         selElmnt = x[i].getElementsByTagName("select")[0];
         /*for each element, create a new DIV that will act as the selected item:*/
         a = document.createElement("DIV");
         a.setAttribute("class", "select-selected bold");
         a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
         x[i].appendChild(a);
         /*for each element, create a new DIV that will contain the option list:*/
         b = document.createElement("DIV");
         b.setAttribute("class", "select-items select-hide bold");
         for (j = 1; j < selElmnt.length; j++) {
             /*for each option in the original select element,
             create a new DIV that will act as an option item:*/
             c = document.createElement("DIV");
             c.innerHTML = selElmnt.options[j].innerHTML;
             c.addEventListener("click", function(e) {
                 /*when an item is clicked, update the original select box,
                 and the selected item:*/
                 var y, i, k, s, h;
                 s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                 h = this.parentNode.previousSibling;
                 for (i = 0; i < s.length; i++) {
                 if (s.options[i].innerHTML == this.innerHTML) {
                     s.selectedIndex = i;
                     h.innerHTML = this.innerHTML;
                     y = this.parentNode.getElementsByClassName("same-as-selected");
                     for (k = 0; k < y.length; k++) {
                     y[k].removeAttribute("class");
                     }
                     this.setAttribute("class", "same-as-selected");
                     break;
                 }
                 }
                 h.click();
             });
             b.appendChild(c);
         }
         x[i].appendChild(b);
         a.addEventListener("click", function(e) {
             /*when the select box is clicked, close any other select boxes,
             and open/close the current select box:*/
             e.stopPropagation();
             closeAllSelect(this);
             this.nextSibling.classList.toggle("select-hide");
             this.classList.toggle("select-arrow-active");
             });
         }
         function closeAllSelect(elmnt) {
         /*a function that will close all select boxes in the document,
         except the current select box:*/
         var x, y, i, arrNo = [];
         x = document.getElementsByClassName("select-items");
         y = document.getElementsByClassName("select-selected");
         for (i = 0; i < y.length; i++) {
             if (elmnt == y[i]) {
             arrNo.push(i)
             } else {
             y[i].classList.remove("select-arrow-active");
             }
         }
         for (i = 0; i < x.length; i++) {
             if (arrNo.indexOf(i)) {
             x[i].classList.add("select-hide");
             }
         }
         }
         /*if the user clicks anywhere outside the select box,
         then close all select boxes:*/
         document.addEventListener("click", closeAllSelect);
      </script>
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
      <?php include 'src/content/footer.inc.php'; ?>