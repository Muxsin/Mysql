<!DOCTYPE html>
<html>
<head>
    <!-- Owl-carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />
    
    <!-- Styles -->
    <link rel="stylesheet" href="./CSS/style.css"/>

    <!-- Scripts -->
    <script src="js/scripts.js" defer></script>

    <script src="https://kit.fontawesome.com/23412c6a8d.js"></script>

    <!-- Mates -->
    <mate charset="UTF-8">
    <mate name="viewport" content="width=device-width,initial-scale=1.0">
    <mate http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title></title>
</head>
<body>
	
    <div class="container">
        <div class="panel">
            <div class="row">
                <div class="col liquid">
                    <h4><i class="fas fa-skull-crossbones"> Pirates</i></h4>

                    <!-- Owl-Carousel -->
                    <div class="owl-carousel owl-theme">
                        <img src="./assets/server_down_s4lk.svg" alt="" class="login_img">
                        <img src="./assets/fingerprint_swrc.svg" alt="" class="login_img">
                        <img src="./assets/authentication_fsn5.svg" alt="" class="login_img">
                    </div>

                    <div class="follow">
                        Follow us 
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                    </div>

                </div>
                <div class="col">
                    
                    <button type="button" class="btn btn-signup">Sign Up</button>
                    <form action="">
                        <h6>We keep everything</h6>
                        <h3>Ready to Login</h3>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" 
       integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                items: 1
            });
        });
    </script>
    
</body>
</html>