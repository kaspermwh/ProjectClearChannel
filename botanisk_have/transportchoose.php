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
            <input type="radio" name="button" value="DRIVING" checked class="car" id="car" onClick="">
            <input type="radio" name="button" value="TRANSIT" class="public" id="public">
            <input type="radio" name="button" value="BICYCLING" class="bike" id="bike">
            <input type="radio" name="button" value="WALKING" class="walk" id="walk">
            <label for="car"><i class="fa fa-car" aria-hidden="true"></i></label>
            <label for="public"><i class="fa fa-bus" aria-hidden="true"></i></label>
            <label for="bike"><i class="fa fa-bicycle" aria-hidden="true"></i></label>
            <label for="walk"><i class="fa fa-male" aria-hidden="true"></i></label>
        </form>
    </div>
    <!-- <div id="right-panel"></div> -->
    <div id="map"></div>
<?php
    include ("htmlend.php");
?>