<?php require_once( 'couch/cms.php' ); ?>
<!DOCTYPE html>

<head lang="NO">
    <meta charset="utf-8">
    <title>Fairtradeeksperten</title>
	<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.2.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="script.js">
    </script>




</head>


<body>
    <div id="navbarButton">
        <span> <!-- vises bare på mobil -->
		<cms:editable name='logo1' type='richtext'>
			<i class="fa fa-bars"></i><img src="Bilder/1fairtradeeksperten.png" alt="Fairtradeekspertens logo" >
		</cms:editable>
		</span>
    </div>

    <nav>


        <div class="hiddenOnPhone" id="mobilNavbar">
            <div class="Navbar">
                <ul>
                    <li class="Logo"><cms:editable name='logo2' type='richtext'><img src="Bilder/1fairtradeeksperten.png" alt="Fairtradeekspertens logo" id="fairtradelogo"></cms:editable>
                    </li>
                    <li class="Link"><a target="_blank" href="http://shop.friendsfairtrade.no/Shop/List/Bestselgere/73/1">NETTBUTIKK <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </li>
                    <li class="Link"><a href="#rightContent">OM FAIRTRADE <i class="fa fa-globe" aria-hidden="true"></i></a>
                    </li>
                    <li class="Link"><a href="#forhandlere">FORHANDLERE <i class="fa fa-briefcase" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="content">
        <div id="buttons">
            <i class="fa fa-arrow-left" id="leftButton"></i><span style="display:inline-block; width:15px;"></span>
            <i class="fa fa-arrow-right" id="rightButton"></i>
            <div id="sirkelselektor"></div>
            <i class="fa fa-arrow-down" aria-hidden="true" id="pil"></i>
        </div>


        <img src="Bilder/oragemilkchocolate.png" class="animated fadeInLeft" id="forsideBilde" alt="Divine Orange Milk Chocolate">


    </div>
	<cms:editable name='del1' type='richtext'>
    <div id="side1">
        <h2>
			FAIRTRADEEKSPERTEN
		</h2>

        <p>
            FairtradeEksperten driver med import, salg og distribusjon av de beste Fairtrade-produktene og er stolt norsk distributør av de to britiske Fairtrade pionerene: Divine Chocolate og CaféDirect. Vi har to nettbutikker: en for forhandlere og en for forbrukere (følg linkene over). Varene selges også av store og små forhandlere over hele Norge; butikker, kiosker, kaféer og restauranter som tilbyr disse flotte etiske produktene til sine fornøýde kunder.
        </p>
	</cms:editable>
    </div>

    <div id="contentContainer">
	<cms:editable name='venstre_side' type='richtext'>
        <div id="leftContent">
            <h2>
			HVA ER FAIRTRADE?
			</h2>

            <p>
                Fair Trade er et handelssystem som fremmer bærekraftig og klimavennlig utvikling. Gjennom Fair Trade har millioner av småbønder og småprodusenter fått tilgang til ett større marked med færre fordyrende mellomledd og med forbrukere som er villig til å betale en mer rettferdig pris. Deres ansatte har fått bedre betaling og vilkår, og millioner av mennesker i Sør har kommet seg ut av fattigdom og ser nå en helt ny fremtid for seg selv og sine barn. Fordi Fair Trade innebærer langsiktige avtaler med bedre priser og lønninger enn i markedet forøvrig, blir det mulig for partene å investere i miljøvennelig produksjon. Fair Trade støtter manuell produksjon, økologisk jordbruk, gjenbruk av materiale og ressurser, samt bærekraftig bruk av naturressurser og produksjonsmetoder som er lite kapital- og oljekrevende. Fair Trade er et handelssystem som vil skape rettferdighet når det gjelder sosiale forhold, økonomi og miljø i verden.
            </p>
            <p>Besøk vår Instagramside:</p>
            <a href="https://www.instagram.com/fairtradeeksperten/"><img src="Bilder/instagram.png" alt="Besøk oss på instagram" id="instagram">
            </a>
        </div>
	</cms:editable>
        <div id="rightContent">
		<cms:editable name='hoyre_side' type='richtext'>
            <!-- facebook! -->
            <div id="fbframe">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFairtradeEksperten%2F&tabs=timeline&width=500&height=700&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=132579716841917" width="500" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                <!-- facebook slutt -->

            </div>
		</div>
		</cms:editable>
    </div>
		<cms:editable name='forhandler_del' type='richtext'>
        <div id="forhandlere">
            <h1>FOR FORHANDLERE</h1>
			<p>Driver du butikk, kiosk, kafé eller restaurant, og bryr deg om andre? Å selge Fairtrade produkter viser samfunnsansvar og at du bryr deg om såvel kunder som produsenter.
			
			Vil du selge de populære produktene fra Divine og/eller CafeDirect, som begge er Fair Trade på sitt aller beste? Ta kontakt med oss så får du et godt tilbud og en forhandlerprisliste! Vi kan også tilby profileringsmateriell som displaystativer, flyers, postkort, plakater, etc.
			</p>
			<p>
			Du kan også registrere deg som forhandlerkunde i vår forhandlershop (en egen nettbutikk for forhandlere).
			Mange av produktene fra Divine ligger også tilgjengelige hos Asko, og mange av våre kunder kjøper inn Divine fra Asko og supplerer fra oss med de produktene som ennå ikke ligger hos Asko.
			</p>
			<p>Som forhandler kan du bestille varer via vår forhandlershop, en egen nettbutikk for forhandlere som krever innlogging.
			Forhandlere får varene tilsendt mot faktura og har 14 dagers kreditt.</p>
			
			<div id="forhandlerLink">
				<span><a target="_blank" href="https://fftforhandlere.mamutweb.com/Account/Logon?ReturnUrl=%2fShop%2fList">FORHANDLERSHOP <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></span>
			</div>
			
        </div>
		</cms:editable>
        <div id="side3">
            <h2>HER FINNER DU VÅRE PRODUKTER:</h2>
            <div id="kunder">
                <img class="img" src="kunder/asko.png" alt="Asko">
                <img class="img" src="kunder/jacobs.png" alt="Jacobs">
                <img class="img" src="kunder/scandic.png" alt="Scandic">
                <img class="img" src="kunder/waynes.png" alt="Waynes Coffee">
            </div>
        </div>

		<cms:editable name='bunntekst' type='richtext'>
        <div class="footer">
            <p class="leftFooter">
                &nbsp;Kontakt oss:&nbsp;&nbsp;
                <!-- mellomrom -->
                &nbsp;<a href="mailto:example@tutorialspark.com">post@fairtradeeksperten.no</a>
                <br> &nbsp;Tlf.: (+47) 928 60 927
            </p>


        </div>
		</cms:editable>


</body>
<?php COUCH::invoke(); ?>