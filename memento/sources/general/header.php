<header>
    <h1> ToKeTa - <em>Memento</em> </h1>
    <nav id="bandeau">
        <div class="contour_a">
            <a class="element" href="../../index.php">ACCUEIL</a>
        </div>

        <?php
        switch ($nomGroupe){
            case "appli":
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=appli&nomPage=appli.html">LANGAGES SOFT</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=appli&nomPage=java.html">JAVA</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=appli&nomPage=kotlin.html">KOTLIN</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=appli&nomPage=android.html">ANDROID</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=appli&nomPage=python.html">PYTHON</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=appli&nomPage=c.html">C</a>';
                echo '</div>';
                break;
            case "outilsDev":
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=outilsDev&nomPage=outilsDev.html">OUTILS DEVELOPPEMENT</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=outilsDev&nomPage=git.html">GIT</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=outilsDev&nomPage=docker.html">DOCKER</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=outilsDev&nomPage=jetbeans.html">JETBEANS</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=outilsDev&nomPage=linux.html">LINUX</a>';
                echo '</div>';
                break;
            case "web":
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=web&nomPage=web.html">DEVELOPPEMENT WEB</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=web&nomPage=html.html">HTML</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=web&nomPage=css.html">CSS</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=web&nomPage=javascript.html">JAVASCRIPT</a>';
                echo '</div>';
                echo '<div class="contour_a">';
                    echo '<a class="element" href="../general/modelePage.php?nomGroupe=web&nomPage=php.html">PHP</a>';
                echo '</div>';
                break;
        }
        ?>      
    </nav>
</header>

<div class="sousHeader">
    <a class="elt_socialMedia" href="https://www.linkedin.com/" target="_blank"><img src="../../images/general/linkedin.png" alt="linkedin" width=30px style="margin:1%;"></a> 
    <a class="elt_socialMedia" href="https://twitter.com/" target="_blank"><img src="../../images/general/twitter.png" alt="twitter" width=30px style="margin:1%;"></a>
    <a class="elt_socialMedia" href="https://www.facebook.com/" target="_blank"><img src="../../images/general/facebook.png" alt="facebook" width=30px style="margin:1%;"></a>
    <a class="elt_socialMedia" href="https://www.youtube.com/" target="_blank"><img src="../../images/general/youtube.png" alt="youtube" width=30px style="margin:1%;"></a>
    <a class="elt_socialMedia" href="https://www.instagram.com/" target="_blank"><img src="../../images/general/instagram.jpeg" alt="instagram" width=30px style="margin:1%;"></a>
    <a class="elt_socialMedia" href="" target="_blank"><img src="../../images/general/email.jpeg" alt="email" width=30px style="margin:1%;"></a>
</div>