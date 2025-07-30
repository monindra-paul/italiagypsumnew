<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Italia Gypsum | Finest Quality</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/flaticon.min.css">

    <!-- Icomoon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/icomoon.min.css">

    <!-- Tractor icon CSS -->
    <link rel="stylesheet" href="assets/css/vendor/tractor-icon.min.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">

    {{-- remixicon css --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">



    <!-- Revolution Slider CSS -->
    <link href="assets/revolution/css/settings.css" rel="stylesheet">
    <link href="assets/revolution/css/navigation.css" rel="stylesheet">
    <link href="assets/revolution/custom-setting.css" rel="stylesheet">


</head>



    @include('frontend.common.header')

    @yield('content')

    @include('frontend.common.footer')

 
 
 
 
 <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="assets/js/vendor/popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper.min.js"></script>

    <!-- Tippy JS -->
    <script src="assets/js/plugins/tippy.min.js"></script>

    <!-- Light gallery JS -->
    <script src="assets/js/plugins/lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="assets/js/plugins/lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="assets/js/plugins/waypoints.min.js"></script>

    <!-- Counter up JS -->
    <script src="assets/js/plugins/counterup.min.js"></script>

    <!-- Appear JS -->
    <script src="assets/js/plugins/appear.min.js"></script>

    <!-- Gmap3 JS -->
    <script src="assets/js/plugins/gmap3.min.js"></script>

    <!-- Isotope JS -->
    <script src="assets/js/plugins/isotope.min.js"></script>

    <!-- Mailchimp JS -->
    <script src="assets/js/plugins/mailchimp-ajax-submit.min.js"></script>


    <!-- Main JS -->
    <script src="assets/js/main.js"></script>




    {{-- google chart --}}


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Popularity'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>




    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD79MY72taVRlZVX2DU6L5PXOh3ezUUKMc&amp;callback=initMap"></script>

    <!-- Map JS -->
    <script>
        jQuery(document).ready(function($) {

            var gmMapDiv = $("#google-map-one");

            (
                function($) {

                    if (gmMapDiv.length) {

                        var gmHeight = gmMapDiv.attr("data-height");
                        var gmWidth = gmMapDiv.attr("data-width");
                        var gmZoomEnable = gmMapDiv.attr("data-zoom_enable");
                        var gmZoom = gmMapDiv.attr("data-zoom");
                        gmMapDiv.width(gmWidth).height(gmHeight);
                        gmMapDiv.gmap3({
                            action: "init",
                            marker: {
                                values: [{
                                    address: "40.7590615,-73.969231",
                                    data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                    options: {
                                        icon: "",
                                        visible: false,
                                    }
                                }],
                                events: {
                                    click: function(marker, event, context) {
                                        if (context.data == 0) {
                                            return;
                                        }
                                        var map = $(this).gmap3("get");
                                        infowindow = $(this).gmap3({
                                            get: {
                                                name: "infowindow"
                                            }
                                        });
                                        if (infowindow) {
                                            infowindow.open(map, marker);
                                            infowindow.setContent(context.data);
                                        } else {
                                            $(this).gmap3({
                                                infowindow: {
                                                    anchor: marker,
                                                    options: {
                                                        content: context.data
                                                    }
                                                }
                                            });
                                        }
                                    }
                                }

                            },
                            overlay: {
                                values: [{
                                    address: "40.7590615,-73.969231",
                                    data: "<div class=\"gmap-marker-wrap\"><h5 class=\"gmap-marker-title\">New Jersey Office<\/h5><div class=\"gmap-marker-content\"><i class=\"ion-android-pin\" aria-hidden=\"true\"><\/i> 799-701 Ballantyne Rd<br \/>\nSyracuse, NY 13207<\/div><\/div>",
                                    options: {
                                        content: '<div><div class="animated-dot">' +
                                            '<div class="middle-dot"><i class="ion-android-pin"></i></div>' +
                                            '<div class="signal"></div>' +
                                            '<div class="signal2"></div>' + '</div></div>',
                                    }
                                }],
                                events: {
                                    click: function(overlay, event, context) {
                                        if (context.data == 0) {
                                            return;
                                        }
                                        var map = $(this).gmap3("get");
                                        infowindow = $(this).gmap3({
                                            get: {
                                                name: "infowindow"
                                            }
                                        });
                                        if (infowindow) {
                                            infowindow.open(map, overlay);
                                            infowindow.setContent(context.data);
                                        } else {
                                            $(this).gmap3({
                                                infowindow: {
                                                    anchor: overlay,
                                                    options: {
                                                        content: context.data
                                                    }
                                                }
                                            });
                                        }
                                    }
                                }
                            },
                            map: {
                                options: {
                                    zoom: parseInt(gmZoom),
                                    zoomControl: true,
                                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                                    mapTypeControl: false,
                                    scaleControl: false,
                                    scrollwheel: gmZoomEnable == 'enable' ? true : false,
                                    streetViewControl: false,
                                    draggable: true,
                                    styles: [{
                                            "featureType": "landscape.man_made",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                "color": "#f7f1df"
                                            }]
                                        },
                                        {
                                            "featureType": "landscape.natural",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                "color": "#d0e3b4"
                                            }]
                                        },
                                        {
                                            "featureType": "landscape.natural.terrain",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "poi",
                                            "elementType": "labels",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "poi.business",
                                            "elementType": "all",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "poi.medical",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                "color": "#fbd3da"
                                            }]
                                        },
                                        {
                                            "featureType": "poi.park",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                "color": "#bde6ab"
                                            }]
                                        },
                                        {
                                            "featureType": "road",
                                            "elementType": "geometry.stroke",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "road",
                                            "elementType": "labels",
                                            "stylers": [{
                                                "visibility": "off"
                                            }]
                                        },
                                        {
                                            "featureType": "road.highway",
                                            "elementType": "geometry.fill",
                                            "stylers": [{
                                                "color": "#ffe15f"
                                            }]
                                        },
                                        {
                                            "featureType": "road.highway",
                                            "elementType": "geometry.stroke",
                                            "stylers": [{
                                                "color": "#efd151"
                                            }]
                                        },
                                        {
                                            "featureType": "road.arterial",
                                            "elementType": "geometry.fill",
                                            "stylers": [{
                                                "color": "#ffffff"
                                            }]
                                        },
                                        {
                                            "featureType": "road.local",
                                            "elementType": "geometry.fill",
                                            "stylers": [{
                                                "color": "black"
                                            }]
                                        },
                                        {
                                            "featureType": "transit.station.airport",
                                            "elementType": "geometry.fill",
                                            "stylers": [{
                                                "color": "#cfb2db"
                                            }]
                                        },
                                        {
                                            "featureType": "water",
                                            "elementType": "geometry",
                                            "stylers": [{
                                                "color": "#a2daf2"
                                            }]
                                        }
                                    ]


                                }
                            }
                        });
                    }
                }
            )(jQuery);
        });
    </script>


    <!-- Revolution Slider JS -->
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/revolution/revolution-active.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <!--=====  End of JS files ======-->

</body>


</html>