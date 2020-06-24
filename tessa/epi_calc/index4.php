<html>

<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="w3.css" />
  <link rel="stylesheet" href="slider.css" />
</head>

<div class="range-slider">
  Population
  <input class="input-range" type="range" value="250" min="1" max="500">
  <input type="text" class="range-value" />
</div>
<div class="range-slider">
  <input class="input-range" type="range" value="250" min="1" max="500">
  <input type="text" class="range-value" />
</div>
<div class="range-slider">
  <input class="input-range" type="range" value="250" min="1" max="500">
  <input type="text" class="range-value" />
</div>
<div class="range-slider">
  <input class="input-range" type="range" value="250" min="1" max="500">
  <input type="text" class="range-value" />
</div>

</html>

<script>
range = $('.range-slider > .input-range');
value = $('.range-slider > .range-value');

value.val(range.attr('value'));

range.on('input', function(){
  	//monparent=$(this).parent();
  monparent=this.parentNode;

  value=$(monparent).find('.range-value');
    $(value).val(this.value);
});

value.on('input', function(){
    monparent=this.parentNode;
  	range=$(monparent).find('.input-range');
    $(range).val(this.value);

});
</script>
