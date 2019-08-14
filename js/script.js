$(window).on('scroll', () => {
  if ($(window).scrollTop()) {
    $('nav').addClass('black');
  } else {
    $('nav').removeClass('black');
  }
});

// jQuery for Read More 
 $('article').readmore({speed: 500});
 
 //Continuous carousel
 $(function(){
  var $slider = $('#continuous-slider--list');
  var sizeImage = 200;
  var items = $slider.children().length;
  var itemswidth = (items * sizeImage); // 140px width for each client item 
  $slider.css('width',itemswidth);
  
  var rotating = true;
  var sliderspeed = 0;
  var seeitems = setInterval(rotateSlider, sliderspeed);
  
  $(document).on({
    mouseenter: function(){
      rotating = false; // turn off rotation when hovering
    },
    mouseleave: function(){
      rotating = true;
    }
  }, '#continuous-slider');
  
  function rotateSlider() {
    if(rotating != false) {
      var $first = $('#continuous-slider--list li:first');
      $first.animate({ 'margin-left': '-'+sizeImage+'px' }, 2000, "linear", function() {
        $first.remove().css({ 'margin-left': '0px' });
        $('#continuous-slider--list li:last').after($first);
      });
    }else{
      $first.stop();
    }
  }
});
//Scroll
var jump=function(e)
{
   if (e){
       e.preventDefault();
       var target = $(this).attr("href");
   }else{
       var target = location.hash;
   }

   $('html,body').animate(
   {
       scrollTop: $(target).offset().top-160
   },2000,function()
   {
       location.hash = target;
   });

}

$('html, body').hide();

$(document).ready(function()
{
    $('a[href^=#]').bind("click", jump);

    if (location.hash){
        setTimeout(function(){
            $('html, body').scrollTop(0).show();
            jump();
        }, 0);
    }else{
        $('html, body').show();
    }
});

$(document).ready(function(){
    $('#category').on('change', function() {
      if ( this.value == 'services')
      {
        $("#quote-services").show();
        $("#quote-training").hide();
      }
      else if (this.value == 'trainings')
      {
        $("#quote-training").show();
        $("#quote-services").hide();
      }
      else
      {
        $("#quote-training").hide();
        $("#quote-services").hide();       
      }
    });
});