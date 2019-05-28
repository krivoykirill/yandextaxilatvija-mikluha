<?php
if ( (isset($_GET["utm_campaign"])) && (isset($_GET["utm_medium"])) && (isset($_GET["utm_source"])) ){
    $campaign = $_GET["utm_campaign"];
    $medium = $_GET["utm_medium"];
    $source = $_GET["utm_source"];
}
else {
    $campaign='';
    $medium='';
    $source='';
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Yandex.Taxi - PELNI LĪDZ 120€ DIENĀ AR SAVU AUTOMOBĪLI </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="is-preload">
        <header id="header">
            <img class="logo" alt="logo" src="images/logo.jpg"/><br/>
            <p>oficiālais <br/>partneris <span><span class="redSymbol">M</span>ikluha</span></p>
            <a class="lang" href="rindex.php?utm_source=<?php echo $source; ?>&utm_medium=<?php echo $medium; ?>&utm_campaign=<?php echo $campaign; ?>" alt="language">RU</a>
            <nav>
                <a class="number" href="#about"><img class="number" alt="phone_icon" src="images/trubas.png"/>+371 22836762</a><br/>
                <a class="number" href="#about"><img class="number" alt="phone_icon" src="images/trubas.png"/>+371 24987778</a>
            </nav>
        </header>
        <section id="banner">
            <div class="inner">
                <h1> PELNI LĪDZ 120€ DIENĀ</h1>
                <h2> AR SAVU AUTOMOBĪLI, STRĀDĀJOT KOPĀ AR Yandex.Taxi</h2>
                <button class="cta_button">SĀKT PELNĪT</button>
            </div>
        </section>
        <section class="wrapper">
            <div class="inner">
                <div class="highlights">
                    <section>
                        <div class="content">
                                
                            <img src="images/1adv.png" alt="Yandex Taxi advantage 1"/>
                            <h3>Bezmaksas<br/>reģistrācija</h3>
                            <p>Reģistrācija un apmācība aizņems 30 minūtes ofisā.</p>
                                
                        </div>
                    </section>
                    <section>
                        <div class="content">
                            <img src="images/2adv.png" alt="Yandex Taxi advantage 2"/>
                            <h3>Brīvs<br/>grafiks</h3>
                            <p>Iespēja izvēlēties jebkuru grafiku.</p>
                        </div>
                    </section>
                    <section>
                        <div class="content">
                            <img src="images/3adv.png" alt="Yandex Taxi advantage 3"/>
                            <h3>Peļņa līdz 120€<br/>dienā</h3>
                            <p>Minimālās pasūtījuma cenas garantija, peļņas palielinājums pieprasījuma pieauguma laikā.</p>
                        </div>
                    </section>
                    <section>
                        <div class="content">
                            <img src="images/4adv.png" alt="Yandex Taxi advantage 4"/>
                            <h3>Liels pasūtījumu<br/>skaits</h3>
                            <p>Yandex.Taxi – līderis Latvijā pēc izpildīto pasūtījumu skaita.</p>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        <section id="cta" class="wrapper">
            <div class="inner">
                <h1 class="step_header">KĀ TAS STRĀDĀ?</h1>
                <div id="step_grid">
                    <div id="first_row">
                        <p><img src="images/1.png" alt="first step"/><br/>Aizpildiet<br/>pieteikumu</p>
                        <div id="arrow_wrap"><img alt="right arrow" src="images/right_arrow.png"/></div>
                        <p><img src="images/2.png" alt="first step"/><br/>Ar Jums sazināsies menedžēris</p>
                    </div>
                    <div id="second_row">
                        <div id="arrow_wrap"><img alt="right arrow" src="images/right_arrow.png"/></div>
                        <p><img src="images/3.png" alt="first step"/><br/><br/>Apmācība</p>
                        <div id="arrow_wrap"><img alt="right arrow" src="images/right_arrow.png"/></div>
                        <p><img src="images/4.png" alt="first step"/><br/>Sāciet<br/>pelnīt</p>
                    </div>
                </div>
                <br/>
                <br/>
            </div>
        </section>
        <section id="faq" class="wrapper">
            <div class="inner">
                <h2>BIEŽĀK UZDOTIE JAUTĀJUMI</h2>
                <div class="faq_accordion">
                    <button class="accordion">Kur atrast apmācības materiālus?</button>
                    <div class="panel">
                        <div class="video_wrap">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/qjbwFj4EKJM" frameborder="0"  allowfullscreen></iframe>
                        </div>
                        <div class="video_wrap">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/04_z0qMfOGg" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <button class="accordion">Kāpēc labāk strādāt ar oficiālo partneri?</button>
                    <div class="panel">
                        <p>Samazinātās komisijas, diennakts tehniskais atbalsts, ātrs  jautājumu risinājums bez starpniekiem</p>
                    </div>

                    <button class="accordion">Kas nepieciešams, lai reģistrētos un uzsākt darbu?</button>
                    <div class="panel">
                        <p>Lai uzsāktu darbu vispirms jāsazinās ar mums, jāprecizē vai Jūsu auto atbilst darbam, veikt reģistrāciju un apmācību</p>
                    </div>
                    <button class="accordion">Vai pietiks pasūtījumu un labas peļņas visiem autovadītājiem?</button>
                    <div class="panel">
                        <p>Serviss nodrošina autovadītājus ar pietiekamu pasūtījumu skaitu</p>
                    </div>
                    <button class="accordion">Cik bieži autovadītājs saņem naudu ?</button>
                    <div class="panel">
                        <p>Norēķins ar autovadītājiem notiek katru nedēļu</p>
                    </div>
                    <button class="accordion">Labākas atrašanas vietas un darba laiks?</button>
                    <div class="panel">
                        <p>Labākais darba laiks un atrašanas vieta jānosaka patstāvīgi, atkarīgi no lielākas daļas klientu kustības virziena noteiktā laika periodā</p>
                    </div>
                </div>
                <h2>MĒS LABPRĀT ATBILDĒSIM UZ VISIEM ATLIKUŠAJIEM JAUTĀJUMIEM</h2>
                <button class="cta_button">Saņemt bezmaksas konsultāciju</button>
            </div>
        </section>
      
        <footer id="footer">
            <div class="inner">
                <div class="content">
                    <section id="about">
                        <h3>SIA MIKLUHA</h3>
                        <p>
                            Jēzusbaznīcas iela 7<br/>
                            Rīga<br/>
                            +371 22836762<br/>
                            +371 24987778
                        </p>
                    </section>
                        
                </div>
                <div class="copyright">
                    &copy; SIA "MIKLUHA"
                </div>
            </div>
        </footer>
        <section id="form">

            <div class="form-popup"  id="myForm">
                <form action="awhrest.php" method="post" class="form-container" onsubmit="return validateForm()">
                    <h1>AIZPILDIET PIETEIKUMU</h1>
                    <p>Mēs sazināsimies ar Jums, lai izstāstīt visu informāciju.</p>
                    <label for="name"><b>Vārds</b></label>
                    <input type="text" placeholder="Ievadiet vārdu" name="name" required>

                    <label for="number"><b>Telefona numurs</b></label>
                    <input id ="num" type="text" placeholder="Ievadiet telefona numuru" name="number" required>
                    <label for="car_choice"><b>Izvēlēties pareizo variantu:</b></label>
                    <select style="width:100%;margin-bottom:7px;background-color:#ddd;padding:4px" name="car_choice">
                                <option value="own">Es gribu strādāt ar savu mašīnu</option>
                                <option value="company">Es gribu strādāt ar firmas mašīnu</option>
                    </select>
                    <br/>
                    <input type="hidden" value="lv" name="lang">                        
                    <button type="submit" class="btn" id="submitBtn">NOSŪTĪT</button>
                    <input type="hidden" name="utm_campaign" value="<?php echo $campaign; ?>">
                    <input type="hidden" name="utm_source" value="<?php echo $source; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo $medium; ?>">
                    <br/>
                    <input type="checkbox" value="Iepazinos" required />
                    <label id="agreement">Piekritu datu apstrādāšanai <a href="terms.pdf">(privātuma politika)</a></label> 
                    
                    <button type="button" id="cancelBtn" class="btn cancel" onclick="closeForm()">+</button>
                        
                </form>
            </div>
        </section>
        <section id="numberPopup">
            <div>
                <a href="#about">
                    <img class="number" alt="phone_icon" src="images/trubas.png"/>
                    <p>+371 22836762<br/>
                    +371 24987778</p>
                </a>
            </div>
            
        </section>


        <!-- Scripts-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        


    </body>
</html>