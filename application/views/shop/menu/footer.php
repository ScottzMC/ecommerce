<!-- Begin Kenne's Footer Area -->
<div class="kenne-footer_area bg-smoke_color">
    <div class="footer-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="newsletter-area">
                        <div class="newsletter-logo">
                            <a href="javascript:void(0)">
                                <img src="<?php echo base_url('assets/images/footer/logo/1.png'); ?>" alt="Logo">
                            </a>
                        </div>
                        <!--<p class="short-desc">Subscribe to our newsleter, Enter your emil address</p>
                        <div class="newsletter-form_wrap">
                            <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div id="mc-form" class="mc-form subscribe-form">
                                        <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Enter email address" />
                                        <button class="newsletter-btn" id="mc-submit"><i
                                        class="ion-android-mail"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="row footer-widgets_wrap">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Shopping</h4>
                            </div>
                            <div class="footer-widgets">
                              <?php if($this->session->userdata('login')){ ?>
                                <ul>
                                    <li><a href="<?php echo site_url('ewallet'); ?>">E-wallet</li>
                                    <li><a href="<?php echo site_url('shopping/view_cart'); ?>">Shopping Cart</a></li>
                                    <li><a href="<?php echo site_url('shopping/wishlist'); ?>">Wishlist</a></li>
                                    <li><a href="<?php echo site_url('membership'); ?>">Membership</a></li>
                                </ul>
                              <?php }else{ echo ''; } ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Account</h4>
                            </div>
                            <div class="footer-widgets">
                              <ul>
                              <?php if($this->session->userdata('login')){ ?>
                                  <li><a href="<?php echo site_url('account/logout'); ?>">Logout</a></li>
                                <?php }else{ ?>
                                  <li><a href="<?php echo site_url('account/login'); ?>">Login</a></li>
                                  <li><a href="<?php echo site_url('account/register'); ?>)">Register</a></li>
                                <?php } ?>
                                  <li><a href="<?php echo site_url('shop/faq'); ?>">FAQ</a></li>
                                  <li><a href="<?php echo site_url('shop/policy'); ?>">Return Policy</a></li>
                                  <!--<li><a href="< ?php echo site_url('shop/about'); ?>">About Us</a></li>-->
                                  <li><a href="<?php echo site_url('shop/contact'); ?>">Contact Us</a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="footer-widgets_title">
                                <h4>Categories</h4>
                            </div>
                            <div class="footer-widgets">
                                <ul>
                                  <?php
                                    $menu = $this->db->query("SELECT DISTINCT type FROM menu")->result();
                                    if(!empty($menu)){ foreach($menu as $men){} ?>
                                    <?php
                                        $query = $this->db->query("SELECT DISTINCT category FROM menu WHERE type = '$men->type' ")->result();
                                        foreach($query as $qry){ ?>
                                    <li class=""><a href="<?php echo site_url('product/category/'.strtolower($men->type).'/'.strtolower($qry->category)); ?>">
                                      <?php echo str_replace('-', ' ', $qry->category); ?></a></li>
                                  <?php } }else{ echo ''; } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright">
                        <span>Copyright &copy; 2020 <a href="javascript:void(0)">UG Store.</a> All rights reserved.</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment">
                        <img src="<?php echo base_url('assets/images/footer/payment/1.png'); ?>" alt="Payment Method">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Footer Area End Here -->
<!-- Scroll To Top Start -->
<a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
<!-- Scroll To Top End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js'); ?>"></script>
<!-- Modernizer JS -->
<script src="<?php echo base_url('assets/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>
<!-- Popper JS -->
<script src="<?php echo base_url('assets/js/vendor/popper.min.js'); ?>"></script>
<!-- Bootstrap JS -->
<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js'); ?>"></script>

<!-- Slick Slider JS -->
<script src="<?php echo base_url('assets/js/plugins/slick.min.js'); ?>"></script>
<!-- Barrating JS -->
<script src="<?php echo base_url('assets/js/plugins/jquery.barrating.min.js'); ?>"></script>
<!-- Counterup JS -->
<script src="<?php echo base_url('assets/js/plugins/jquery.counterup.js'); ?>"></script>
<!-- Nice Select JS -->
<script src="<?php echo base_url('assets/js/plugins/jquery.nice-select.js'); ?>"></script>
<!-- Sticky Sidebar JS -->
<script src="<?php echo base_url('assets/js/plugins/jquery.sticky-sidebar.js'); ?>"></script>
<!-- Jquery-ui JS -->
<script src="<?php echo base_url('assets/js/plugins/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/jquery.ui.touch-punch.min.js'); ?>"></script>
<!-- Theia Sticky Sidebar JS -->
<script src="<?php echo base_url('assets/js/plugins/theia-sticky-sidebar.min.js'); ?>"></script>
<!-- Waypoints JS -->
<script src="<?php echo base_url('assets/js/plugins/waypoints.min.js'); ?>"></script>
<!-- jQuery Zoom JS -->
<script src="<?php echo base_url('assets/js/plugins/jquery.zoom.min.js'); ?>"></script>
<!-- Timecircles JS -->
<script src="<?php echo base_url('assets/js/plugins/timecircles.js'); ?>"></script>

<!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->

<script src="<?php echo base_url('assets/js/vendor/vendor.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/plugins/plugins.min.js'); ?>"></script>

<!-- Main JS -->
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

<!-- Begin Kenne's Google Map Area -->
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>

    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 12,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.740610, -73.935242), // New York
                // How you would like to style the map.
                // This is where you would paste any style found on
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };
            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('google-map');
            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(51.526380, 0.176099),
                map: map,
                title: 'UG Store',
                animation: google.maps.Animation.BOUNCE
            });
        }
    </script>
    <!-- Kenne's Google Map Area End Here -->
