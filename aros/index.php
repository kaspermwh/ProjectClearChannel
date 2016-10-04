<?php
    include("htmlstart.php");
    start("Culture Explorer | Botanisk Have", "Welcome to the Botanical Garden");
?>
        <div class="botaniskhave">
            <article>
                <h2><span class="blackbg">ARoS Art Museum</span></h2>
                <h3><span class="blackbg">ARoS is the house of art where our guests can be pleased, enlightened and challanged. The architecture is of international class and so is the art.</span></h3>
                 <a href="http://aros.dk/"><p><span class="blackbg">See More...</span></p></a>
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
    include ("htmlend.php");
?>