<nav class="w3-col l2 w3-card w3-light-grey w3-sidebar w3-bar-block w3-large w3-roboto-body w3-animate-left" style="z-index: 1; top: 69px;">
    <!-- Display Options -->
    <div id = 'display-options-section' class="w3-bar-item w3-button w3-round w3-hover-blue-grey"  onclick="dropDown('display-options');"> <strong><i class="fa fa-caret-down"></i>&nbsp; DISPLAY OPTIONS </strong></div>
    <div id='display-options' class="w3-hide w3-white w3-card w3-animate-left">
      <!-- Basemap Style -->
      <div id = 'map-style-dropdown' class="w3-border w3-border-gray w3-bar-item">
        <label for="map style"> <strong> Basemap Style </strong> </label>
          <select id="map-style" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setStyle();">
            <!-- <option selected hidden>Select style</option> -->
            <option value="mapbox://styles/mapbox/streets-v11">Streets</option>
            <option value="mapbox://styles/mapbox/outdoors-v11">Outdoors</option>
            <option value="mapbox://styles/mapbox/dark-v9">Dark</option>
            <option value="mapbox://styles/mapbox/satellite-v9" selected>Satellite</option>
            <option value="mapbox://styles/mapbox/satellite-streets-v10">Satellite With Streets</option>
          </select>
      </div>
      <!-- Zoom Level-->
      <div id = 'zoom-dropdown' class="w3-bar-item w3-border w3-border-gray">
        <label for="map style"> <strong> Zoom Level </strong> </label>
          <select id="map-style" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setZoom(this.value);">
            <!-- <option selected hidden>Select style</option> -->
            <option value='{"level":"1", "magnification":"39k m/px"}'>Zoom: Continental View</option>
            <option value='{"level":"4", "magnification":"4.9k m/px"}' selected>Zoom: Neighbors View</option>
            <option value='{"level":"7", "magnification":"611 m/px"}'>Zoom: Regional View</option>
            <option value='{"level":"8", "magnification":"305 m/px"}'>Zoom: Regional/Near City View</option>
            <option value='{"level":"10", "magnification":"76 m/px"}' >Zoom: Near City View</option>
            <option value='{"level":"12", "magnification":"19 m/px"}'>Zoom: City View</option>
            <option value='{"level":"16", "magnification":"1 m/px"}'>Zoom: Street View</option>
          </select>
      </div>
    </div>
    <!-- Location -->
    <div id = 'location-section' class="w3-bar-item w3-button w3-round w3-hover-blue-grey"  onclick="dropDown('location-dropdown');"> <strong> <i class="fa fa-caret-down"></i>&nbsp; LOCATION SETTING </strong></div>
    <div id='location-dropdown' class="w3-hide w3-white w3-card w3-animate-left">
      <!-- PH Area -->
      <div id = 'disease-section' class=" w3-bar-item w3-round">
          <label for="disease-dropdown"> <strong> Philippines</strong> </label>
          <select id="locations" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setMap(this.value);">
            <option selected hidden> Select area </option>
            <option value="0">NCR: Manila</option>
            <option value="1">Ilocos: San Fernando</option>
            <option value="2">Cagayan: Tuguegarao</option>
            <option value="3">Central Luzon: San Fernando</option>
            <option value="4">Calabarzon: Calamba</option>
            <option value="5">Bicol: Legazpi</option>
            <option value="6">Western Visayas: Iloilo</option>
            <option value="7">Central Visayas: Cebu</option>
            <option value="8">Eastern Visayas: Tacloban</option>
            <option value="9">Zamboanga: Pagadian</option>
            <option value="10">North Mindanao: Cagayan de Oro</option>
            <option value="11">Davao: Davao</option>
            <option value="12">Soccskargen: Koronadal</option>
            <option value="13">Bangsamoro: Cotabato</option>
            <option value="14">CAR: Baguio</option>
            <option value="15">Caragan: Butuan</option>
            <option value="16">MIMAROPA: Calapan</option>
          </select>
      </div>
    </div>
    <!-- Layers -->
    <div id = 'layers-section' class="w3-bar-item w3-button w3-round w3-hover-blue-grey"  onclick="dropDown('layers-dropdown');"> <strong> <i class="fa fa-caret-down"></i>&nbsp; SATELLITE LAYERS </strong></div>
    <div id='layers-dropdown' class="w3-hide w3-white w3-card w3-round w3-animate-left">
      <!-- Layer 1 -->
      <div id = 'layer1-section' class="w3-bar-item w3-border w3-border-gray">
          <label for="layer1-dropdown"> <strong> Layer 1 </strong> </label>
            <select id="layer1" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setLayer('layer1', 'satellite-layer-1', this.value);">
              <option selected hidden>Select layer</option> 
              <?php include('layers.php'); ?>
            </select>
      </div>
      <!-- Layer 2 -->
      <div id = 'layer2-section' class="w3-bar-item w3-border w3-border-gray">
          <label for="layer2-dropdown"> <strong> Layer 2 </strong> </label>
            <select id="layer2" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setLayer('layer2', 'satellite-layer-2', this.value);">
              <option selected hidden>Select layer</option>
              <?php include('layers.php'); ?>
            </select>
      </div>
    </div>
    <!-- Outbreak Data -->
    <div id = 'layers-section' class="w3-bar-item w3-button w3-round w3-hover-blue-grey"  onclick="dropDown('disease-dropdown')"> <strong><i class="fa fa-caret-down"></i>&nbsp; OUTBREAK DATA </strong></div>
    <div id='disease-dropdown' class="w3-hide w3-white w3-card w3-animate-left">
      <!-- Disease -->
      <div id = 'disease-section' class=" w3-bar-item w3-round">
          <label for="disease-dropdown"> <strong> Select Disease </strong> </label>
            <select id="disease" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setLayers();">
              <!-- <option selected hidden>Select style</option> -->
              <option value="">Dengue</option>
              <option value="">COVID-19</option>
            </select>
      </div>
    </div>
</nav>