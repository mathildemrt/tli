/**********************************************
/Fonctions gestion du formulaire d'inscription
***********************************************/

/**
 * Vérifie que les 2 adresses email conrrespondent 
 * @param input - La confirmation de l'email
 * @author PARISELLE PORTE
 */
function checkmail(input) {
    if (input.value !== document.getElementById('email_addr').value) {
        input.setCustomValidity('Les deux adresses e-mail ne correspondent pas.');
    } else {
        // le champ est valide : on réinitialise le message d'erreur
        input.setCustomValidity('');
    }
}

/**
 * Vérifie que les 2 mdp conrrespondent 
 * @param input - La confirmation du mdp
 * @author PARISELLE PORTE
 */
function checkmdp(input) {
    if (input.value !== document.getElementById('mot_de_passe').value) {
        input.setCustomValidity('Les deux mots de passe ne correspondent pas.');
    } else {
    // le champ est valide : on réinitialise le message d'erreur
        input.setCustomValidity('');
    }
}



/*******************************
/Fonctions gestion flux RSS
********************************/
var Nb_article = 4;

google.load("feeds", "1");

/**
 * Chargement et affichage du flux RSS
 * @author MAREITE
 */
function initialize() {
    var i;
    // URL du flux RSS
    var feed = new google.feeds.Feed("http://feeds.feedburner.com/TianShiAcupunctureBlog?format=xml");
    // Ici nous n'affichons que les quatres premiers articles du flux RSS
    feed.setNumEntries(Nb_article);

    feed.load(function (result) {
        if (!result.error) {
            // container : le div où on veut placcer les articles
            var container = document.getElementById("feed-actus"), rssoutput = "";
            
            for (i = 0; i < result.feed.entries.length; i += 1) {
                var entry = result.feed.entries[i];
                rssoutput += "<div class=\"article\" id=\"article" + i + "\"><h2> "  + entry.title + "</h2><p>( " + new Date(entry.publishedDate).toLocaleDateString() + " ) <p><a href=\"" + entry.link + "\">En savoir plus</a> " + "<p> " + entry.contentSnippet + "</p></div>";
            }
            rssoutput += "<div id=\"articlesPlus\" onclick=\"addArticle()\">+ d'articles</div>";
            rssoutput += "<div id=\"articlesMoins\" onclick=\"removeArticle()\">- d'articles</div>";
            container.innerHTML = rssoutput;
            for (i = 0; i < result.feed.entries.length; i += 1) {
                if (i > Nb_article) {
                    document.getElementById("article" + i).style.display = 'none';
                }
            }

        }
    });
}

/**
 * Chargement de 4 articles supplementaires 
 * @callback initialize()
 * @author MAREITE
 */
function addArticle() {
    Nb_article += 4;
    initialize();
}

/**
 * Supprression de 2 articles;
 * @callback initialize()
 * @author MAREITE
 */
function removeArticle() {
    if (Nb_article > 0) {
        Nb_article -= 2;
    }
    initialize();
}





/******************************************************
/Fonctions gestion affichage par pages des pathologies
******************************************************/
var Page_patho = 1;


/**
 * Chargement et affichage des pathologies
 * @param end - ?
 * @author CORNILLON
 */
function AffichagePatho(end) {
    
    var i,
        RegExpMeridien = new RegExp(document.getElementById("filtreMeridien").value),
        RegExpType = new RegExp(document.getElementById("filtrePatho").value + document.getElementById("filtreCarac").value);

    //Masquage des pathologies que l'on ne souhaite pas afficher
    var nb_patho_page = document.getElementById("nb_patho_page").value,
        nb_bas = nb_patho_page * Page_patho - nb_patho_page,
        nb_haut = nb_patho_page * Page_patho - 1,

        patho_correspondant = 0;
    for (i = 0; i < end; i += 1) {
        if (!RegExpMeridien.test(document.getElementById("patho" + i).className)
                ||  !RegExpType.test(document.getElementById("patho" + i).className)) {
            document.getElementById("patho" + i).style.display = "none";
        } else if (patho_correspondant < nb_bas) {
            document.getElementById("patho" + i).style.display = "none";
            patho_correspondant += 1;
        } else if (patho_correspondant >= nb_bas && patho_correspondant <= nb_haut) {
            document.getElementById("patho" + i).style.display = "block";
            patho_correspondant += 1;
        } else {
            document.getElementById("patho" + i).style.display = "none";
            patho_correspondant += 1;
        }
    }

    //Affichage du placement dans les pages dans le pager du haut
    nb_bas = nb_patho_page * Page_patho - nb_patho_page + 1;
    nb_haut = nb_patho_page * Page_patho;
    document.getElementById("CptPatho").innerHTML = "Pathologies " + nb_bas + "-" + nb_haut + " sur " + (patho_correspondant);
}
    
/**
 * 
 * @param end - 
 * @author CORNILLON
 */
function PageSuivante(end) {
    var nb_patho_page = document.getElementById("nb_patho_page").value;
    if (Page_patho < end / nb_patho_page) {
        Page_patho += 1;
    }
    AffichagePatho(end);
}

/**
 * 
 * @param end - 
 * @author CORNILLON
 */
function PagePrecedente(end) {
    if (Page_patho > 1) {
        Page_patho -= 1;
    }
    AffichagePatho(end);
}

/**
 * Autocompletion des mots clés
 * @param string_keyword - chaine de caractere contenant les mots clés.
 * @author CORNILLON MAREITE
 */
function autocompletion(string_keyword) {
    
    // String -> array 
    var list_keyword = string_keyword.split("*");
    
    // Utilisation de la fonction autocomplete de la librairie jQueryUI
    $('#keyword').autocomplete({
        source : list_keyword,
        minLength : 2
    });
}


	