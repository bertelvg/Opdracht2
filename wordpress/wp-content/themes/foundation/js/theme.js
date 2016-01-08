      jQuery(document).ready(function($){

            $(document).foundation();  
      });

      /*Center slide-title*/

      var h = document.getElementById('orbitheight').clientHeight;
      var v = h/2.5;
      
      /*console.log(h);
      console.log(v);*/

      var slidetext = document.getElementById('slidetext1');
      slidetext.style.top=-v+"px";

      var slidetext2 = document.getElementById('slidetext2');
      slidetext2.style.top=-v+"px";

      var slidetext3 = document.getElementById('slidetext3');
      slidetext3.style.top=-v+"px";

