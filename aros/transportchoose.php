<?php
    include("../snippets/htmlstart.php");
    start("Culture Explorer | Botanisk Have", "Welcome to the Botanical Garden");
?>
<div class="top-image aros">
    <article>
        <h2><span class="blackbg">ARoS Art Museum</span></h2>
        <h3><span class="blackbg">ARoS is the house of art where our guests can be pleased, enlightened and challanged. The architecture is of international class and so is the art.</span></h3>
        <a href="http://aros.dk/"><p><span class="blackbg">See More...</span></p></a>
    </article>   
</div>
 <div id="floating-panel">
      <select id="start">
        <option value="56.128753,10.1611203">Viby Torv</option>
      </select>
      <select id="end">
        <option value="56.1538174,10.2000701">ARoS</option> 
        <option value="Moesgaard museum">Moesgaard Museum</option>
        <option value="56.1535527,10.2120222">DOKK1</option>
        <option value="botanisk have, aarhus">Botanical Garden</option>
      </select>
        <select id="method">
            <option value="DRIVING">Drive</option>
            <option value="BICYCLING">Bike</option>
            <option value="TRANSIT">Public transport</option>
            <option value="WALKING">Walk</option>
        </select>
        
    <form id="buttons">
            <input type="radio" name="button" value="DRIVING" class="car" id="car">
            <input type="radio" name="button" value="TRANSIT" class="public" id="public">
            <input type="radio" name="button" value="BICYCLING" class="bike" id="bike">
            <input type="radio" name="button" value="WALKING" class="walk" id="walk">
            <label for="car"><i class="fa fa-car" aria-hidden="true"></i><p id="durationCar"></p></label>
            <label for="public"><i class="fa fa-bus" aria-hidden="true"></i><p id="durationPublic"></p></label>
            <label for="bike"><i class="fa fa-bicycle" aria-hidden="true"></i><p id="durationBike"></p></label>
            <label for="walk"><i class="fa fa-male" aria-hidden="true"></i><p id="durationWalk"></p></label>
        </form>
    </div>
    <!-- <div id="right-panel"></div> -->
    <div id="map"></div>
<?php
    include ("../snippets/htmlend.php");
?>