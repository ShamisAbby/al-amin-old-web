<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

    <title></title>

    <style>

       

.brands {
    width: 100%;
    padding-top: -90px;
    padding-bottom: 90px
}

.brands_slider_container {
    height: 150px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    padding-left: 20px;
    padding-right: 20px;
    background: #fff
}

.brands_slider {
    height: 100%;
    
}

.brands_item {
    height: 100%
}

.brands_item img {
    max-width: 100%
}

.brands_nav {
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%);
    padding: 5px;
    cursor: pointer
}

.brands_nav i {
    color: #e5e5e5;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.brands_nav:hover i {
    color: #676767
}

.brands_prev {
    left: 40px
}

.brands_next {
    right: 40px
}

.justify-content-center img{
    width: 50px;
    height: 150px;
}

.brands_item img{
   border-radius: 18px;
}

.oo{
    margin-top:90px;
}
        

    </style>

</head>
<body>

<div class="brands">
    <div class="container">
        <div class="section-title">
          <center><p class="oo">OUR <span style="color: ">SPONSORS</span></p></center>
           <h6>HUMAN SERVICE ORGANIZATIONS PROMOTE VOLUNTEERISM AND PROVIDE WIDE RANGE OF DIRECT SERVICES IN THE COMMUNITIES</h6>
          </div>
            <div class="col">
                <div class="brands_slider_container">
                    <div class="owl-carousel owl-theme brands_slider">
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_1.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_2.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_3.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_4.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_5.png" alt=""></div>
                        </div>
                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_6.png" alt=""></div>
                        </div>

                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_7.png" alt=""></div>
                        </div>

                        <div class="owl-item">
                            <div class="brands_item d-flex flex-column justify-content-center"><img src="team/support/logo_8.png" alt=""></div>
                        </div>
                        
                        
                    </div> <!-- Brands Slider Navigation -->
                    
                </div>
            </div>
        </div>
    </div>
</div>





<script>
    $(document).ready(function(){

if($('.brands_slider').length)
{
var brandsSlider = $('.brands_slider');

brandsSlider.owlCarousel(
{
loop:true,
autoplay:true,
autoplayTimeout:5000,
nav:false,
dots:false,
autoWidth:true,
items:8,
margin:42
});

if($('.brands_prev').length)
{
var prev = $('.brands_prev');
prev.on('click', function()
{
brandsSlider.trigger('prev.owl.carousel');
});
}

if($('.brands_next').length)
{
var next = $('.brands_next');
next.on('click', function()
{
brandsSlider.trigger('next.owl.carousel');
});
}
}


});
</script>