<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{'asset/css/style.css'}}">
    <script src="{{'asset/js/min.js'}}"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
</head>



<!--  -->
    <script>
        $(document).ready(function () {
            $('.testimonal').owlCarousel({
                loop: true,
                margin: 50,
                nav: false,
                // autoplay:true,
                // autoplayTimeout:8000,
                dots: true,
                stagePadding: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                },
                onInitialized: function (event) {
                    $(event.target).find('.item').eq(0).addClass('loaded');
                },
                onChanged: function (event) {
                    $(event.target).find('.item').removeClass('loaded');
                    $(event.target).find('.owl-item.active').eq(0).find('.item').addClass('loaded');
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.doctor-slider-2').owlCarousel({
                loop: true,
                margin: 50,
                nav: false,
                // autoplay:true,
                // autoplayTimeout:8000,
                dots: false,
                stagePadding: 10,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                },
                onInitialized: function (event) {
                    $(event.target).find('.item').eq(0).addClass('loaded');
                },
                onChanged: function (event) {
                    $(event.target).find('.item').removeClass('loaded');
                    $(event.target).find('.owl-item.active').eq(0).find('.item').addClass('loaded');
                }
            });
        });
    </script>


<script>
    function isInView(element) {
const rect = element.getBoundingClientRect();
return (
  rect.top >= 0 &&
  rect.left >= 0 &&
  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
);
}

// Function to add 'in-view' class to elements
function checkAnimation1() {
const elements = document.querySelectorAll('.animated-element');
elements.forEach(element => {
  if (isInView(element)) {
    element.classList.add('in-view');
  }
});
}

// Function to add 'in-view-2' class to elements
function checkAnimation2() {
const elements = document.querySelectorAll('.animated-element-2');
elements.forEach(element => {
  if (isInView(element)) {
    element.classList.add('in-view-2');
  }
});
}

// Listen for scroll events
window.addEventListener('scroll', checkAnimation1);
window.addEventListener('scroll', checkAnimation2);

// Initial check on page load
checkAnimation1();
checkAnimation2();
</script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
    <!-- Include Owl Carousel JS after jQuery -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> 




<body>
    <header>
       
            
        <section class="navigation">
            <div class="nav-container">
                <div class="brand">
                    <a href="#!"><img src="{{'asset/images/logo.png'}}" alt="" srcset="" width="200px"></a>
                </div>
                <nav>
                    <div class="nav-mobile">
                        <a id="navbar-toggle" href="#!">
                            <span></span>
                        </a>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{url('/about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{url('/gallery')}}">Gallery</a>
                        </li>
                        <li>
                            <a href="#!">Portfolio</a>
                        </li>
                        <li>
                            <a href="#!">Category</a>
                            <ul class="navbar-dropdown">
                                <li>
                                    <a href="#!">Sass</a>
                                </li>
                                <li>
                                    <a href="#!">Less</a>
                                </li>
                                <li>
                                    <a href="#!">Stylus</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </header>
<br>
    <div class="container-fluid p-0 m-0">
        @yield('content')
    </div>

    
    <div class="container-fluid p-0">
        @include('front.footer')
    </div>
  
</body>
    </html>