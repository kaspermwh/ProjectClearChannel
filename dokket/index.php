<?php
    include("../snippets/htmlstart.php");
    start("Culture Explorer | Botanisk Have", "Welcome to the Botanical Garden");
?>
        <div class="top-image dokk">
            <article>
                <h2><span class="blackbg">Dokk1</span></h2>
                <h3><span class="blackbg">At Dokk1 you will have the chance for eperience and activity as well for tranquility and contemplation.</span></h3>
                 <a href="https://dokk1.dk/"><p><span class="blackbg">See More...</span></p></a>
            </article>   
        </div>
        <div class="transport_means">
            <article>
                <h2>Method of transportation</h2>
            </article>
            <nav class="transport_choose">
            <ul id="group">
                <li class="plate"><a href="transportchoose.php" onclick="calculateAndDisplayRoute()"><i class="fa fa-car" aria-hidden="true"></i></a></li>
                <li class="plate"><a href="transportchoose.php"><i class="fa fa-bus" aria-hidden="true"></i></a></li>
                <li class="plate"><a href="transportchoose.php"><i class="fa fa-bicycle" aria-hidden="true"></i></a></li>
                <li class="plate"><a href="transportchoose.php"><i class="fa fa-male" aria-hidden="true"></i></a></li>
            </ul>
            </nav>
        </div>
<?php
    include ("../snippets/htmlend.php");
?>