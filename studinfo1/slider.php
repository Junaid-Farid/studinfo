<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="client/php/jquery/jquery-ui/jquery-ui.min.js"></script>
<style>
		#slideshow{
            margin:0 auto;
            width:600px;
            height:450px;
            overflow: hidden;
            position: relative;
			margin-bottom:100px;
        }

        #slideshow ul{
            list-style: none;
            margin:0;
            padding:0;
            position: absolute;
        }

        #slideshow li{
            float:left;
        }

        #slideshow a:hover{
            background: rgba(0,0,0,0.8);
            border-color: #000;
        }

        #slideshow a:active{
            background: #990;
        }

        .slideshow-prev, .slideshow-next{
            position: absolute;
            top:180px;
            font-size: 30px;
            text-decoration: none;
            color:#fff;
            background: rgba(0,0,0,0.5);
            padding: 5px;
            z-index:2;
        }
        
        .slideshow-prev{
            left:0px;
            border-left: 3px solid #fff;
        }

        .slideshow-next{
            right:0px;
            border-right: 3px solid #fff;
        }

    </style>
    
    
    <script>

        //an image width in pixels 
        var imageWidth = 600;
    

        //DOM and all content is loaded 
        $(window).ready(function() {
            
            var currentImage = 0;

            //set image count 
            var allImages = $('#slideshow li img').length;
            
            //setup slideshow frame width
            $('#slideshow ul').width(allImages*imageWidth);

            //attach click event to slideshow buttons
            $('.slideshow-next').click(function(){
                
                //increase image counter
                currentImage++;
                //if we are at the end let set it to 0
                if(currentImage>=allImages) currentImage = 0;
                //calcualte and set position
                setFramePosition(currentImage);

            });

            $('.slideshow-prev').click(function(){
                
                //decrease image counter
                currentImage--;
                //if we are at the end let set it to 0
                if(currentImage<0) currentImage = allImages-1;
                //calcualte and set position
                setFramePosition(currentImage);

            });
           
        });

        //calculate the slideshow frame position and animate it to the new position
        function setFramePosition(pos){
            
            //calculate position
            var px = imageWidth*pos*-1;
            //set ul left position
            $('#slideshow ul').animate({
                left: px
            }, 300);
        }

    </script>
   
<div id="slideshow">
 <a href="#" class="slideshow-prev">&laquo;</a> 
 <ul>
  <li><img src="slider/images/Ae.gif" /></li>
  <li><img src="slider/images/be.jpg" /></li>
  <li><img src="slider/images/be1.jpg" /></li>
  <li><img src="slider/images/be2.jpg" /></li>
  <li><img src="slider/images/be3.jpg" /></li>
  <li><img src="slider/images/be1.jpg" /></li>
</ul> 
 <a href="#" class="slideshow-next">&raquo;</a> 
 </div>


