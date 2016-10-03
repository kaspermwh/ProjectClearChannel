<?php
    include("htmlstart.php");
    start("Culture Explorer | Botanisk Have", "Welcome to the Botanical Garden");
?>
        <div class="botaniskhave">
            <article>
                <h2><span class="blackbg">Aarhus Botanical Garden</span></h2>
                <h3><span class="blackbg">Botanical garden is one of Aarhus' largest parks. The garden contains a wealth of opportunities for eperiences - for all the senses, different interests and needs.</span></h3>
                 <a href="http://sciencemuseerne.dk/botanisk-have/"><p><span class="blackbg">See More...</span></p></a>
            </article>   
        </div>
        <div class="transport_means">
            <article>
                <h2>Method of transportation</h2>
            </article>
            <nav class="transport_choose">
                <ul>
                    <li class="group"><a href="transportchoose.php"><img src="img/buschoose.png" alt="See bus routes!"></a></li>
                    <li class="group"><a href="transportchoose.php"><img src="img/carchoose.png" alt="See car routes!"></a></li>
                    <li class="group"><a href="transportchoose.php"><img src="img/walkchoose.png" alt="See walking routes!"></a></li>
                    <li class="group"><a href="transportchoose.php"><img src="img/bikechoose.png" alt="See biking routes!"></a></li>
                </ul>
            </nav>
        </div>
<?php
    include ("htmlend.php");
?>