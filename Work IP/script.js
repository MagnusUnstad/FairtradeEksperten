let i = 0; //Teller for byttBilde
const bildeArr = ["../Bilder/oragemilkchocolate.png", "../Bilder/cafeDirectCostaRica.png", "../Bilder/darkchocolate.png"]; //Første bilde bør være samme som er lenket i HTML

//Scrolling når man trykker på pilen
$(document).ready(function() {
    $("#pil").click(function() {
        $('html, body').animate({
            scrollTop: $("#side1").offset().top //scroll hvor
        }, 700); //Her justerer vi hvor fort den scroller
    });


    //Buttons
    $("#rightButton").click(function() {
        clearInterval(intervall);
        intervall = setInterval(function() {
            byttBilde()
        }, 8000);
        byttBilde();
        aktivSirkel();
    });
    $("#leftButton").click(function() {
        clearInterval(intervall);
        intervall = setInterval(function() {
            byttBilde()
        }, 8000);
        forrigeBilde();
        aktivSirkel();
    });

	$( "#navbarButton" ).click(function() {
		$("#mobilNavbar").toggleClass("hiddenOnPhone");
		$("#fairtradelogo").toggleClass("hiddenOnPhone");
		
	});
	
    //Sirkelselektor
    var sirkler = [];

    function lagSirkler() {
        for (let i = 0; i < bildeArr.length; i++) {
            sirkler.push('<i class="fa fa-circle-o"></i>&nbsp;')
        }
        document.getElementById("sirkelselektor").innerHTML = sirkler.join(',');
    }
    aktivSirkel();

    function aktivSirkel() {
        sirkler = [];
        lagSirkler();
        sirkler[i] = '<i class="fa fa-circle"></i>&nbsp;';
        document.getElementById("sirkelselektor").innerHTML = sirkler.join("");
    }


    //Bildekarusell
    var intervall = setInterval(function() {
        byttBilde()
    }, 4000); //Her justerer vi hvor lenge bildet blir stående (i millisekunder)

    i = 0; //Teller for byttBilde
    function byttBilde() {
        fadeOut();

        i++;
        aktivSirkel();
        if (i >= bildeArr.length) {
            i = 0;
        }
        aktivSirkel();
        setTimeout(function() {
            fadeIn();
            $("#forsideBilde").attr("src", bildeArr[i]);


        }, 500);
    }


    function forrigeBilde() {
        fadeOut();
        i--;
        if (i < 0) {
            i = bildeArr.length - 1;
        }

        setTimeout(function() {
            fadeIn();
            $("#forsideBilde").attr("src", bildeArr[i]);

        }, 500);
    }

    function fadeOut() {
        $("#forsideBilde").removeClass("fadeInLeft");
        $("#forsideBilde").addClass("fadeOutRight");
    }

    function fadeIn() {
        $("#forsideBilde").removeClass("fadeOutRight");
        $("#forsideBilde").addClass("fadeInLeft");
    }



});