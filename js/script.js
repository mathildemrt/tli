/*******************************************
/Fonctions gestion formulaire d'inscription
*******************************************/
    function checkmail(input) {
	  if (input.value != document.getElementById('email_addr').value) {
		input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}
	
	function checkmdp(input) {
	  if (input.value != document.getElementById('mot_de_passe').value) {
		input.setCustomValidity('Les deux mots de passe ne correspondent pas.');
	  } else {
		// le champ est valide : on réinitialise le message d'erreur
		input.setCustomValidity('');
	  }
	}



/*******************************
/Fonctions gestion flux RSSS
********************************/
var Nb_article = 0;
    function addArticle(){
        Nb_article += 4;
        initialize();
    }

    function initialize() {
      // Mettez l'URL de votre flux RSS
      var feed = new google.feeds.Feed("http://feeds.feedburner.com/TianShiAcupunctureBlog?format=xml");
      // Ici nous n'affichons que les quatres premiers articles du flux RSS
      feed.setNumEntries(Nb_article+4);
      
      feed.load(function(result) {
        if (!result.error) {
          // Remplacer au besoin le nom de l'élément "feed-actus" par celui que vous utilisez
          var container = document.getElementById("feed-actus");
          var rssoutput="";
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
            rssoutput+= "<div id=article" + i + " class=\"article\"><h2> "  + entry.title + "</h2>  ( " + new Date(entry.publishedDate).toLocaleDateString() + " ) <a href=\"" + entry.link + "\">En savoir plus</a> " + "<p> " + entry.contentSnippet + "</p></div>";
          }
          rssoutput += "<div id=\"articlesPlus\" onclick=\"addArticle()\">+ d'articles</div>";
          container.innerHTML=rssoutput;
            for (var i = 0; i < result.feed.entries.length; i++) {
                if(i<Nb_article || i>Nb_article+4)
                    document.getElementById("article"+i).style.display = "none";
            }
        
        }
      });
    }

    google.load("feeds", "1");
    google.setOnLoadCallback(initialize);


var Page_patho = 1;
/******************************************************
/Fonctions gestion affichage par pages des pathologies
******************************************************/
    function AffichagePatho(end){
       
        //Masquage des pathologies que l'on ne souhaite pas afficher
        var nb_patho_page = document.getElementById("nb_patho_page").value;
        var nb_bas = nb_patho_page*Page_patho - nb_patho_page + 1;
        var nb_haut = nb_patho_page*Page_patho;
        
        for (var i = 0; i < end; i++) {
            if(i >= nb_haut || i < nb_bas)
                document.getElementById("patho"+i).style.display = "none";
            else
                document.getElementById("patho"+i).style.display = "block";
        }
        
        //Affichage du placement dans les pages dans le pager du haut
        var nb_bas = nb_patho_page*Page_patho - nb_patho_page + 1;
        var nb_haut = nb_patho_page*Page_patho;
        document.getElementById("CptPatho").innerHTML = "Pathologies "+nb_bas+"-"+nb_haut+" sur "+end;
    }
    
    function PageSuivante(end){
        var nb_patho_page = document.getElementById("nb_patho_page").value;
        if(Page_patho < end/nb_patho_page)
            Page_patho++;
        AffichagePatho(end);
    }

    function PagePrecedente(end){
        if(Page_patho > 1)
            Page_patho--;
        AffichagePatho(end);
    }
    

	