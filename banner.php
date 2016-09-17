<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" >
    <ul>
      
      <li data-transition="fade" data-slotamount="7" data-masterspeed="300" > <img src="images/slider-bg2.png"  alt="slide-bg1-1140x600"  data-fullwidthcentering="on">
        
      </li>
      <li data-transition="fade" data-slotamount="7" data-masterspeed="300" > <img src="images/slider-bg3.png"  alt="slide-bg1-1140x600"  data-fullwidthcentering="on">
        
      </li>
    </ul>
  </div>
</div>
<script type="text/javascript">

								
				var revapi3;
				
				jQuery(document).ready(function() {
				
				if (jQuery.fn.cssOriginal != undefined)
					jQuery.fn.css = jQuery.fn.cssOriginal;
				
				if(jQuery('#rev_slider_3_1').revolution == undefined)
					revslider_showDoubleJqueryError('#rev_slider_3_1');
				else {
				   revapi3 = jQuery('#rev_slider_3_1').show().revolution(
					{
						delay:9000,
						startwidth:1140,
						startheight:350,
						hideThumbs:200,
						
						thumbWidth:100,
						thumbHeight:50,
						thumbAmount:3,
						
						navigationType:"bullet",
						navigationArrows:"solo",
						navigationStyle:"round",
						
						touchenabled:"on",
						onHoverStop:"on",
						
						navigationHAlign:"center",
						navigationVAlign:"bottom",
						navigationHOffset:0,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:10,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:10,
						soloArrowRightVOffset:0,
								
						shadow:0,
						fullWidth:"on",
						fullScreen:"off",

						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,

						shuffle:"off",
						
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						videoJsPath:"revslider/videojs/",
						fullScreenOffsetContainer: ""	
					});
					
					revapi3.revnext(function(){alert(0)});
				}
				});	//ready
				
				
			</script> 

<!-- END REVOLUTION SLIDER --> 