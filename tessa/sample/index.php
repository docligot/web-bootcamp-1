<!DOCTYPE HTML>

<html>


<head>
  <title>Sample Webapp</title>
  <link rel="stylesheet" href="styling.css" />
  <link rel="stylesheet" href="w3.css" />
</head>

<style>
.lds-ripple {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-ripple div {
  position: absolute;
  border: 4px solid #fff;
  opacity: 1;
  border-radius: 50%;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
  animation-delay: -0.5s;
}
@keyframes lds-ripple {
  0% {
    top: 36px;
    left: 36px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 0px;
    left: 0px;
    width: 72px;
    height: 72px;
    opacity: 0;
  }
}

</style>

<body>
  <header class="w3-top w3-padding w3-indigo">
    <div class="w3-large">Sample Web App</div>

  </header>


  <section>
    <img src="virus.png" style="width:100%; max-height: 300px"></img>
  </section>


 <section class="w3-padding-large w3-center">
  <h1> This is a sample website </h1>
 </section>

 <section class="w3-padding-large">
   <div class="w3-row">
   <div class="w3-half"><p>
 Lorem ipsum dolor sit amet,
 consectetur adipiscing elit. Mauris hendrerit pretium mollis.
 Mauris malesuada laoreet tincidunt. Praesent dictum efficitur leo, sit amet
 tincidunt
</p></div>

  <div class="w3-half">
  <p>Cursus eget nunc scelerisque viverra mauris. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Senectus et netus et malesuada fames ac turpis egestas maecenas. Risus nullam eget felis eget nunc lobortis mattis. Integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Tempor nec feugiat nisl pretium fusce. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Nunc scelerisque viverra mauris in. Tristique senectus et netus et malesuada fames. Cras pulvinar mattis nunc sed blandit libero volutpat. Pellentesque diam volutpat commodo sed egestas. Ut consequat semper viverra nam. Integer quis auctor elit sed vulputate. Neque gravida in fermentum et sollicitudin. Accumsan tortor posuere ac ut. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Orci ac auctor augue mauris augue neque gravida in. Amet tellus cras adipiscing enim eu turpis egestas pretium.
  </p>

  </div>
  </div>
  <div class="w3-center"><button class="w3-button w3-blue" onclick="show_hidden();">Toggle Hidden </button></div>
 </section>

<section id="hidden-section" class="w3-padding-large w3-center w3-black" style="display:none;">
  <div class="w3-xxlarge"> This is a hidden section </div>
</section>

 <section class="w3-padding-large" style="background-color:#FF0000;">
   <div class="w3-row">
     <div class="w3-third w3-padding">
     <p>
 Lorem ipsum dolor sit amet,
 consectetur adipiscing elit. Mauris hendrerit pretium mollis.
 Mauris malesuada laoreet tincidunt. Praesent dictum efficitur leo, sit amet
 tincidunt
</p></div>

  <div class="w3-third w3-padding">
  <p>Cursus eget nunc scelerisque viverra mauris. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Senectus et netus et malesuada fames ac turpis egestas maecenas. Risus nullam eget felis eget nunc lobortis mattis. Integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus. Ipsum dolor sit amet consectetur
  </p>
  </div>

  <div class="w3-third w3-padding">
    <p>Neque gravida in fermentum et sollicitudin. Accumsan tortor posuere ac ut. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Orci ac auctor augue mauris augue neque gravida in. Amet tellus cras adipiscing enim eu turpis egestas pretium.
    </div>
  </div>
 </section>



 <section class="w3-padding-large w3-dark-grey">
   <div class="w3-padding">
     <select id="food" class="w3-select" onchange="get_food();">
       <option value="">Select Product:</option>
       <option value="hamburger">Hamburger</option>
       <option value="cheeseburger">Cheeseburger</option>
       <option value="mcchicken">McChicken</option>
       <option value="big-mac">Big Mac</option>
     </select>
   </div>

   <div class="w3-row">
     <div id="food_facts" class="w3-third w3-padding">&nbsp; </div>
   <div class="w3-third w3-padding">
     <p>Neque gravida in fermentum et sollicitudin. Accumsan tortor posuere ac ut. Metus vulputate eu scelerisque felis imperdiet proin fermentum leo. Orci ac auctor augue mauris augue neque gravida in. Amet tellus cras adipiscing enim eu turpis egestas pretium. </p>
   </div>
   <div class="w3-third w3-padding">
     <p>Cursus eget nunc scelerisque viverra mauris. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Facilisi etiam dignissim diam quis enim lobortis scelerisque. Senectus et netus et malesuada fames ac turpis egestas maecenas. Risus nullam eget felis eget nunc lobortis mattis. Integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Tempor nec feugiat nisl pretium fusce. Maecenas accumsan lacus vel facilisis volutpat est velit egestas dui. Nunc scelerisque viverra mauris in. Tristique senectus et netus et malesuada fames. Cras pulvinar mattis nunc sed blandit libero volutpat. Pellentesque diam volutpat commodo sed egestas. Ut consequat semper viverra nam. Integer quis auctor elit sed vulputate.
     </p>
   </div>
 </div>
</section>


  <footer class="w3-bottom w3-red w3-padding">
    <div>&copy; Cirrolytix</div>
  </footer>

<script>
  function show_hidden() {
    var hidden_section = document.getElementById("hidden-section").style.display;
    if (hidden_section == 'none') {
      document.getElementById("hidden-section").style.display = 'block';
    } else {
      document.getElementById("hidden-section").style.display= 'none';
    }
  }


  function get_food() {
    var food = document.getElementById('food').value;
    console.log(food);
    if (food) {
      get_food_facts(food);
    }
  }




  function get_food_facts(food) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('food_facts').innerHTML = this.responseText;
      } else {
        document.getElementById('food_facts').innerHTML = '<div class="lds-ripple"><div></div><div></div></div>'
      }
    };
    xmlhttp.open("GET", "food.php?food=" + food, true);
    xmlhttp.send();
  }





</script>


</body>

</html>
