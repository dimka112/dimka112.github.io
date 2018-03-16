
 document.getElementById('slider-right').onclick = sliderRight;
 var left = 0;
 function sliderRight(){
      var polosa = document.getElementById('polosa');
      left = left - 500;
      if (left < -4000){
      	  left = 0;
      }
      polosa.style.left = left + 'px'; 
 }

 var sliderLeft = document.getElementById('slider-left');
 
 sliderLeft.onclick = function () {
   var polosa = document.getElementById('polosa');
      left = left + 500;
      if (left > 0){
          left = 0;
      }
      polosa.style.left = left + 'px'; 
 }