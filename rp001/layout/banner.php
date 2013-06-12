<div id="simpleGallery" class="royalSlider clearfix">
    <div class="royalLoadingScreen"><p>Loading slider&hellip;</p></div>
    <ul class="royalSlidesContainer dragme">  
        <li class="royalSlide" data-thumb="img/galleryAssets/1_thumb.jpg" style="background-image:url(img/galleryAssets/1.jpg)">
            <div class="royalCaption" style="bottom:14px; text-align:center; width:100%;">
                <div class="royalCaptionItem royalMidText" data-show-effect="fade">Teste de slide
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.</div>                                                    
            </div>                                                         	
        </li>                       	
        <li class="royalSlide" data-thumb="img/galleryAssets/2_thumb.jpg" style="background-image:url(img/galleryAssets/2.jpg)">    
            <div class="royalCaption" style="top:405px; text-align:center; width:100%;">
                <div class="royalCaptionItem royalMidText" data-show-effect="fade">Bird Photography by <a href="http://www.flickr.com/photos/johnfish/">John&amp;Fish</a><br></div>   
                <div class="royalCaptionItem" data-show-effect="fade" style="font-size:0.6em;">not included in download pack</div>
            </div>             	
        </li>
        <li class="royalSlide" data-thumb="img/galleryAssets/3_thumb.jpg" style="background-image:url(img/galleryAssets/3.jpg)"></li>
        <li class="royalSlide" data-thumb="img/galleryAssets/4_thumb.jpg" style="background-image:url(img/galleryAssets/4.jpg)"></li>
        <li class="royalSlide" data-thumb="img/galleryAssets/5_thumb.jpg" style="background-image:url(img/galleryAssets/5.jpg)"></li>
        <li class="royalSlide" data-thumb="img/galleryAssets/6_thumb.jpg" style="background-image:url(img/galleryAssets/6.jpg)"></li>
    </ul> 
</div> <!-- Gallery End -->





<script src="js/libs/jquery-1.5.1.min.js"></script>
<script src="js/libs/jquery.easing.1.3.min.js"></script>
<script src="js/mylibs/royal-slider-1.0.min.js"></script>  

<script>	
	$(function() {		
		
		var mySlider = new RoyalSlider("#simpleGallery", {
			captionShowEffects:["fade"],
			controlNavThumbs:true,
			directionNavAutoHide: true
		});			
		
	});		  
</script>
