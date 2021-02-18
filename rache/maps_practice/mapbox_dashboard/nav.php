<nav class="body w3-col l2 w3-card w3-sidebar w3-bar-block w3-animate-left" style="z-index: 1; top: 74px;">  

<!-- LOCATION -->
<div id = 'location' class="w3-bar-item w3-button w3-round w3-hover-dark-grey"  onclick="dropDown('location-dropdown');"> <strong> <i class="fa fa-caret-down"></i>&nbsp; LOCATION</strong></div>
    <div id='location-dropdown' class="w3-hide w3-white w3-card w3-round w3-animate-left">
      <!-- Fly to-->
      <div id = 'fly-to' class="w3-bar-item w3-border w3-border-gray">
          <label for="location-dropdown"> <strong> Philippines </strong> </label>
            <select id="fly-to-ph" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setLocation(this.value);">
            <option selected hidden> Fly to.. </option>
            <option value="0">NCR: Manila</option>
            <option value="1">Ilocos: San Fernando</option>
            <option value="2">Cagayan: Tuguegarao</option>
            <option value="3">Central Luzon: San Fernando</option>
            <option value="4">Calabarzon: Calamba</option>
            <option value="5">Bicol: Legazpi</option>
            <option value="">----CLEAR OUTPUT</option>
            </select>
      </div>
      </div>


<!-- EO -->
<div id = 'layers-section' class="w3-bar-item w3-button w3-round w3-hover-dark-grey"  onclick="dropDown('layers-dropdown');"> <strong> <i class="fa fa-caret-down"></i>&nbsp; EARTH OBSERVATIONS</strong></div>
    <div id='layers-dropdown' class="w3-hide w3-white w3-card w3-round w3-animate-left">
      <!-- Layer 1 -->
      <div id = 'layer1-section' class="w3-bar-item w3-border w3-border-gray">
          <label for="layer1-dropdown"> <strong> Satellite Data Product 1 </strong> </label>
            <select id="layer1" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setLayer('layer1', 'satellite-layer-1', this.value);">
              <option selected hidden>Select data product</option> 
              <?php include('layers.php'); ?>
            </select>
      </div>
      <!-- Layer 2 -->
      <div id = 'layer2-section' class="w3-bar-item w3-border w3-border-gray">
          <label for="layer2-dropdown"> <strong> Satellite Data Product 2 </strong> </label>
            <select id="layer2" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="setLayer('layer2', 'satellite-layer-2', this.value);">
              <option selected hidden>Select data product</option>
              <?php include('layers.php'); ?>
            </select>
      </div>
    </div>


<!-- ANCILLARY DATA -->
<div id = 'mapbox' class="w3-bar-item w3-button w3-round w3-hover-dark-grey"  onclick="dropDown('mapbox-dropdown');"> <strong> <i class="fa fa-caret-down"></i>&nbsp; ANCILLARY DATA</strong></div>
    <div id='mapbox-dropdown' class="w3-hide w3-white w3-card w3-round w3-animate-left">
      <!-- Choropleth-->
      <div id = 'choropleth-section' class="w3-bar-item w3-border w3-border-gray">
          <label for="choropleth-dropdown"> <strong> COINFORM </strong> </label>
            <select id="risk-index" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="display_risk(this.value);">
              <option selected hidden>Select risk parameter</option> 
		          <option value="1">Hazard</option>
		          <option value="2">Vulnerability</option>
	          	<option value="3">Lack of Coping Capacity</option>
		          <option value="4">COVID Risk Index</option>
              <option value="5">----CLEAR OUTPUT</option>
            </select>
      </div>

    <!-- Heatmap-->
    <div id = 'heatmap-section' class="w3-bar-item w3-border w3-border-gray">
          <label for="heatmap-dropdown"> <strong> Earthquake Frequency </strong> </label>
            <select id="earthquake" class="w3-bar-item w3-medium w3-button w3-border w3-select w3-round" onchange="display_heatmap('earthquake','heatmap',this.value);">
              <option selected hidden>Visualize heatmap</option> 
		          <option value="1">Earthquake</option>
              <option value="2">----CLEAR OUTPUT</option>
            </select>
      </div>
    </div>
    
    <!-- <div class="w3-dropdown-click">
    <button onclick="mapControls()"><i class='fas fa-layer-group'></i></button>
    <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
    <div id="light" class="w3-bar-item w3-button">Light</div>
    <div id="dark" class="w3-bar-item w3-button">Dark</div> -->

</nav>