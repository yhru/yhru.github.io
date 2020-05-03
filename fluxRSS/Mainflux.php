<?php include("../include/includeHeader.php"); ?> 

    <strong><h1>Flux RSS</h1></strong>
    <p>Ci-dessous une liste de Flux RSS en rapport avec le monde de l'informatique et les différentes actualités sur le sujet</p>
    <br>

    <div class="ligne1">
        <div class="card-deck">
            <div class="card bg-light mb-3" style="max-width: 33%;">
                <div class="card-header">Actualités</div>
                <div class="card-body">
                <h5 class="card-title">01Net</h5>
                <p class="card-text">01net est un site web français d’information spécialisé dans les nouvelles technologies et l’actualité des produits high-tech.</p>
                <a href="#premierFlux" class="btn btn-primary">Accéder</a>
            </div>
        </div>
            <div class="card bg-light mb-3" style="max-width: 33%;">
                <div class="card-header">Technologie</div>
                <div class="card-body">
                <h5 class="card-title">ZDNet.fr</h5>
                <p class="card-text">ZDNet est un réseau de sites web spécialisés dans les nouvelles de technologie.</p>
                <a href="#deuxiemeFlux" class="btn btn-primary">Accéder</a>
            </div>
        </div>
            <div class="card bg-light mb-3" style="max-width: 33%;">
                <div class="card-header">Actualités</div>
                <div class="card-body">
                <h5 class="card-title">IT Pro News</h5>
                <p class="card-text">IT Media est un groupe de presse, communication et marketing informatique.</p>
                <a href="#troisiemeFlux" class="btn btn-primary">Accéder</a>
            </div>
        </div>
    </div>

    <div class="ligne2">
        <div class="card-deck">
            <div class="card bg-light mb-3" style="max-width: 33%;">
                <div class="card-header">Science informatique</div>
                <div class="card-body">
                <h5 class="card-title">Techniques de l'ingénieur</h5>
                <p class="card-text">Les Éditions Techniques de l'Ingénieur ou Éditions TI est un éditeur spécialisé dans l'information pour les professionnels techniques et scientifiques.</p>
                <a href="#quatriemeFlux" class="btn btn-primary">Accéder</a>
                </div>
            </div>
            <div class="card bg-light mb-3" style="max-width: 33%;">
                <div class="card-header">Actualités</div>
                <div class="card-body">
                <h5 class="card-title">TechRepublic</h5>
                <p class="card-text">TechRepublic est un site en ligne publiant des nouveautés et des conseils dans le monde de l'informatique.</p>
                <a href="#cinquiemeFlux" class="btn btn-primary">Accéder</a>
                </div>
            </div>
            <div class="card bg-light mb-3" style="max-width: 33%;">
                <div class="card-header">Sécurité</div>
                <div class="card-body">
                <h5 class="card-title">Cyber Security Hub</h5>
                <p class="card-text">Site internet publiant de nombreuses news en rapport avec le monde de la Cybersecurité.</p>
                <a href="#sixiemeFlux" class="btn btn-primary">Accéder</a>
                </div>
            </div>
        </div>
    </div>
    <br>

    <?php

        include_once('class.rss.php');

        echo "<div id=\"premierFlux\">";
            $feedlist = new rss("https://www.01net.com/rss/actualites/");
            echo $feedlist->displayFlux(10, "<h2>01net : </h2><br>");
            echo "<br>";
        echo "</div>";
        echo "<div id=\"deuxiemeFlux\">";
            $feedlist = new rss("https://www.zdnet.fr/feeds/rss/actualites/");
            echo $feedlist->displayFlux(10, "<h2>ZDNet.fr : </h2><br>");
            echo "<br>";
        echo "</div>";
        echo "<div id=\"troisiemeFlux\">";
            $feedlist = new rss("http://www.itpronews.fr/feed/rss/");
            echo $feedlist->displayFlux(10, "<h2>IT Pro News : </h2><br>");
            echo "<br>";
        echo "</div>";
        echo "<div id=\"quatriemeFlux\">";
            $feedlist = new rss("https://www.techniques-ingenieur.fr/actualite/thematique/informatique-et-numerique/feed/");
            echo $feedlist->displayFlux(10, "<h2>Techniques de l'ingénieur : </h2><br>");
            echo "<br>";
        echo "</div>";
        echo "<div id=\"cinquiemeFlux\">";
            $feedlist = new rss("https://www.techrepublic.com/rssfeeds/articles/");
            echo $feedlist->displayFlux(10, "<h2>TechRepublic : </h2><br>");
            echo "<br>";
        echo "</div>";
        echo "<div id=\"sixiemeFlux\">";
            $feedlist = new rss("https://www.techrepublic.com/rssfeeds/articles/");
            echo $feedlist->displayFlux(10, "<h2>Cyber Security Hub : </h2><br>");
        echo "</div>";

    ?>

<?php include("../include/includeFooter.php"); ?>

