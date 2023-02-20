<?php
header('Cache-Control: max-age=2592000'); // store cache for static assets to 30 days
include "include/config.php";
$uri = $_SERVER['REQUEST_URI'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--<link rel="stylesheet" href="landing/css/mystyle.css">-->
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
    <title><?php if(defined("TITLE")) { echo TITLE; }else { echo "Rapidex Worldwide - International Courier Company In Delhi";} ?></title>
    <meta name="description" content="<?php if(defined("DESCRIPTION")){ echo DESCRIPTION;}else{ echo "Rapidex Worldwide, Leading international courier and cargo service provider in Delhi NCR. The best deals for USA, UK, UAE, Europe, Canada, Australia, China, Singapore, Hongkong Shipping";} ?>"/>
    <meta name="keywords" content="<?php if(defined("KEYWORDS")){ echo KEYWORDS;}else{ echo "Internatinal Courier Service, International Courier Service Near Me, International Courier Company, International Courier Company near Me, International Courier Service Provider, International Courier Service Provider in Delhi, International Courier Service, International Courier Service in Delhi, Courier Services near Me, Courier Agency, International Shipping Services near me, International Courier Charges, International Air Cargo Company, International Air Courier Service near me, Fastest International Courier, Relaible International Courier, Cheap International Courier, Cheapest International Courier Service, Best International Courier Service, Top International Courier Service, Top 10 International Courier Service, Cheap International Courier Service, Cheapest International Courier Services, Best International Courier Services"; }?>"/>
    <meta name="robots" content="index, follow" />

    <link rel="canonical" href="https://<?= $_SERVER ["HTTP_HOST"] . $_SERVER ["REQUEST_URI"] ?>" />
    <link rel="alternate" href="https://<?= $_SERVER ["HTTP_HOST"] . $_SERVER ["REQUEST_URI"] ?>" hreflang="en-in" />
    <link rel="shortcut icon" href="favicon.ico" type="image/png">

    <meta property="og:url" content="https://www.facebook.com/rapidexworldwide">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Rapidex Worldwide Express">
    <meta property="og:description" content="Repidex Worldwide Express is a leading provider of end-to-end supply chain solutions demonstrating.">
    <meta property="og:image" content="https://scontent-iad3-1.xx.fbcdn.net/v/t39.30808-1/270030897_428797762230757_8103720291187235442_n.png?_nc_cat=100&ccb=1-7&_nc_sid=d36de4&_nc_ohc=v4Ck6AM2oMQAX8DvvTR&_nc_ht=scontent-iad3-1.xx&oh=00_AfB71RlEDKY1Jymae2SI2UTSe1i22uFIj_8VM8-5GsOufA&oe=63A8B0AE">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@rapidexworld">
    <meta name="twitter:title" content="Repidex Worldwide Express">
    <meta name="twitter:description" content="
    <?php if(defined("T_DESCRIPTION")) { echo T_DESCRIPTION; } else {echo "Rapidex Services is an enterprise of professional people came together with the commitment to achieving business objectives by delivering values and building long term relationships.";} ?>">
    <style type="text/css">
        .mysear ul{
            margin-top: 0px;
            background: #fff;
            color: #000;
        }
        .mysear li{
            padding: 5px;
            cursor: pointer;
            color: black;
            width: 223px;
        }
        .mysear li:hover{
            background: #f0f0f0;
        }


        .statelist::-webkit-scrollbar {
            width: 0.2em;
        }

        .statelist::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .statelist::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        .statelist{position:absolute;
            max-height: 144px;
            overflow-y: scroll;
            z-index:999999;
            background-color: #fff;
            cursor: pointer;
        }

        .state1list::-webkit-scrollbar {
            width: 0.2em;
        }

        .state1list::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .state1list::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        .state1list{position: absolute;
            max-height: 144px;
            overflow-y: scroll;
            z-index: 999999;
            background-color: #fff;
            width: fit-content;
            cursor: pointer;

        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        /*for google translate header top behind the rapidex header*/
        .skiptranslate > iframe {
            z-index: 1 !important;
        }

        .enquiry-form-select > option{
            color:black;
        }




    </style>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-72G8G2B0G1" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-72G8G2B0G1');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-200752622-1" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-200752622-1');
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J7ZYHLN5DC" defer></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J7ZYHLN5DC');
    </script>
    <!-- END Google tag (gtag.js) -->

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "WebSite",
            "name": "Courier Service in Delhi",
            "url": "https://www.rapidexworldwide.com"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ProfessionalService",
            "name": "Courier Service in Delhi",
            "image": "https://rapidexworldwide.com/assets/img/hero-slider/hero-slider1.jpg",
            "@id": "https://www.rapidexworldwide.com",
            "url": "https://www.rapidexworldwide.com",
            "telephone": "+91-9311979812",
            "priceRange": "$100-$500",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "New Delhi",
                "addressLocality": "Delhi",
                "postalCode": "110059",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 28.619570,
                "longitude": 77.088104
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "10:00",
                "closes": "09:59"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://www.rapidexworldwide.com",
                    "name": "Courier Service in Delhi"
                }
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "name": "Courier Service in Delhi",
            "url": "https://www.rapidexworldwide.com",
            "image": "https://rapidexworldwide.com/assets/img/hero-slider/hero-slider1.jpg",
            "sameAs": [
                "https://twitter.com/rapidexworld",
                "https://www.linkedin.com/company/rapidex-worldwideexpress/",
                "https://www.facebook.com/rapidexworldwide",
                "https://www.instagram.com/rapidexworldwide/"
            ],
            "jobTitle": "Courier Service at https://rapidexworldwide.com/assets/img/hero-slider/hero-slider1.jpg",
            "worksFor": {
                "@type": "Organization",
                "name": "https://rapidexworldwide.com/assets/img/hero-slider/hero-slider1.jpg"
            }
        }
    </script>

    <span itemscope itemtype="http://schema.org/Service">
			<meta itemprop="serviceType" content="Courier Service" />
			<span itemscope itemtype="http://schema.org/LocalBusiness">
				<span itemprop="name" content="Courier Service | Rapidex Worldwide | 9311979812">
					<span itemprop="telephone" content="9311979812">
						<span itemprop="image" content="https://rapidexworldwide.com/assets/img/hero-slider/hero-slider1.jpg"><span itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
								<span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
									<meta itemprop="name" content="7"></span>
    </span>
    <span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
								<meta itemprop="ratingValue" content="9.6">
								<meta itemprop="bestRating" content="10">
								<meta itemprop="worstRating" content="3">
								<meta itemprop="ratingCount" content="365">
							</span>

    <meta itemprop="url" content="https://www.rapidexworldwide.com">
    <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
								<meta itemprop="streetAddress" content="New Delhi">
								<meta itemprop="addressLocality" content="New Delhi">
								<meta itemprop="addressRegion" content="Delhi">
								<meta itemprop="addressCountry" content="India">
							</span>
    <span itemprop="review" itemscope itemtype="http://schema.org/Review">
								<span itemprop="author" itemscope itemtype="http://schema.org/Person">
									<meta itemprop="name" content="courier Service in Delhi">
								</span>
    <meta itemprop="datePublished" content="01-01-2016">
    </span>
    <meta itemprop="priceRange" content="$100-$500">
    </span>
    </span>
    </span>
    </span>
    </span>


</head>
<body>
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
</div>
<header class="header-area">

    <?php if(trim(isset($page_name))!=="rate-calculator"):?>
        <div class="tpy-banner-wrap">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-11" style="width: 96%;">
                        <div class="col-md-11 flagCountry">
                            <ul id="popularflag" class="flagScoll d-flex align-items-center">
                                <!--<li> <a href="javascript:void" id="google_translate_element"></a> </li>-->
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/usa.php" title="Courier to USA"><img lazy alt="Courier to USA" title="Courier to USA" src="../assets/img/flag/USA.png"><span>USA</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/canada.php" title="Courier to Canada"><img lazy alt="Courier to Canada" title="Courier to Canada" src="../assets/img/flag/Canada.png"><span>Canada</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/australia.php" title="Courier to Australia"><img lazy alt="Courier to Australia" title="Courier to Australia" src="../assets/img/flag/Australia.png"><span>Australia</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/singapore.php" title="Courier to Singapore"><img lazy alt="Courier to Singapore" title="Courier to Singapore" src="../assets/img/flag/singapore.png"><span>Singapore</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/hong-kong.php" title="Courier to Hongkong"><img lazy alt="Courier to Hongkong" title="Courier to Hongkong" src="../assets/img/flag/hongkong.png"><span>Hongkong</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/uk.php" title="Courier to U.K"><img lazy alt="Courier to U.K" title="Courier to U.K" src="../assets/img/flag/U.K.png"><span>U.K</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/germany.php" title="Courier to Germany"><img lazy alt="Courier to Germany" title="Courier to Germany" src="../assets/img/flag/Germany.png"><span>Germany</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/france.php" title="Courier to France"><img lazy alt="Courier to France" title="Courier to France" src="../assets/img/flag/France.png"><span>France</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/uae.php" title="Courier to UAE"><img lazy alt="Courier to UAE" title="Courier to UAE" src="../assets/img/flag/uae.png"><span>UAE</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/oman.php" title="Courier to Oman"><img lazy alt="Courier to Oman" title="Courier to Oman" src="../assets/img/flag/Oman.png"><span>Oman</span></a>
                                </li>
                                <li>
                                    <a href="https://rapidexworldwide.com/international-courier-service-delhi/kuwait.php" title="Courier to Kuwait"><img lazy alt="Courier to Kuwait" title="Courier to Kuwait" src="../assets/img/flag/Kuwait.png"><span>Kuwait</span></a>
                                </li>


                                <!-- <li><a href="" title="Courier to Thailand"><img lazy alt="Courier to Thailand" title="Courier to Thailand" src="assets/img/flag/Thailand.png"><span>Thailand</span></a></li> -->
                                <!-- <li><a href="" title="Courier to Indonesia"><img lazy alt="Courier to Indonesia" title="Courier to Indonesia" src="assets/img/flag/Indonesia.png"><span>Indonesia</span></a></li> -->
                                <!-- <li><a href="" title="Courier to Netherlands"><img lazy alt="Courier to Netherlands" title="Courier to Netherlands" src="assets/img/flag/Netherlands.png"><span>Netherlands</span></a></li> -->


                                <!-- <li><a href="" title="Courier to Belgium"><img lazy alt="Courier to Belgium" title="Courier to Belgium" src="assets/img/flag/Belgium.png"><span>Belgium</span></a></li> -->

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-1 allCountryIcon" >
                        <ul class="">
                            <li><a href="https://rapidexworldwide.com/destinations.php" title=""><i class="fa fa-angle-double-right" style="font-size: 20px;color: #005490;font-weight: bold;"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4 col-sm-6">
                    <ul class="right-info">

                        <li>
                            <a href="https://www.facebook.com/rapidexworldwide" title="Follow us on Facebook" target="_blank"> <i class='bx bxl-facebook'></i> </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/rapidexworld" title="Twitte Us on Twitter" target="_blank"> <i class='bx bxl-twitter'></i> </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/rapidex-worldwideexpress/" title="Connect with Us" target="_blank"> <i class='bx bxl-linkedin'></i> </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCfRV69VE83EUwhHgJkpVsbQ" title="Like us on Youtube" target="_blank"> <i class='bx bxl-youtube'></i> </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/rapidexworldwide/" title="Follow us on Instagram" target="_blank"> <i class='bx bxl-instagram'></i> </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-8 col-sm-12 text-center">
                    <ul class="left-info">
                        <li> <strong>Call Now:</strong> <a href="tel:01141003020"> 011-4100 3020, </a>
                            <a href="tel:9311979812">  +91-9311979812 </a> </li>
                        <li><a href="#" data-toggle="modal" data-target="#LoginModal"><i class="fa fa-user"></i> &nbsp; Login / Signup</a></li>
                    </ul>
                </div>


            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="ferry-responsive-nav">
            <div class="container">
                <div class="ferry-responsive-menu">
                    <div class="logo">
                        <a href="/" title="Rapidex Worldwide Express"> <img lazy src="<?php if($source==true){echo "../assets/img/logo.png";}else {echo "assets/img/logo.png"; }?>" alt="Rapidex Worldwide Express" width="200" height="auto"> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ferry-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/" title="Rapidex Worldwide Express"> <img lazy src="<?php if(isset($source)==true){echo "../assets/img/logo.png";}else {echo "assets/img/logo.png"; }?>" alt="Rapidex Worldwide Express"> </a>
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a href="/" title="Rapidex Worldwide Express" class="nav-link active"> Home  </a></li>
                            <li class="nav-item"> <a href="about.php" title="About Us" class="nav-link"> About Us </a> </li>
                            <li class="nav-item"> <a href="services.php" title="Our Services" class="nav-link"> Services <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="international-courier-services.php" title="International Courier Services in Delhi">International Courier Services</a></li>
                                    <li><a class="dropdown-item" href="air-cargo-services.php" title="Air Cargo Services in Delhi">Air Cargo Services</a></li>
                                    <li><a class="dropdown-item" href="sea-cargo-services.php" title="Sea Cargo Services in Delhi">Sea Cargo Services</a></li>
                                    <li><a class="dropdown-item" href="express-document-services.php" title="Express Document Services in Delhi">Express Document Services</a></li>
                                    <li><a class="dropdown-item" href="medicine-delivery-services.php" title="Medicine Delivery Services in Delhi">Medicine Delivery Services</a></li>
                                    <li><a class="dropdown-item" href="express-import-services.php" title="Express Import Services in Delhi">Express Import Services</a></li>
                                    <li><a class="dropdown-item" href="food-items-delivery.php" title="Food Items Delivery In Delhi">Food Items Delivery</a></li>
                                    <li><a class="dropdown-item" href="excess-baggage-delivery.php" title="Excess Baggage Delivery in Delhi">Excess Baggage Delivery</a></li>
                                    <li><a class="dropdown-item" href="household-items-delivery.php" title="Household Items Delivery in Delhi">Household Items Delivery</a></li>
                                    <li><a class="dropdown-item" href="express-export-services.php" title="Express Export Services in Delhi">Express Export Services</a></li>
                                    <li><a class="dropdown-item" href="commercial-shipment.php" title="Commercial Shipment in Delhi">Commercial Shipment</a></li>
                                    <li><a class="dropdown-item" href="cosmetics-delivery-services.php" title="Cosmetics Delivery Services">Cosmetics Delivery Services</a></li>
                                </ul>


                            </li>



                            <!--<li class="nav-item"> <a href="tracking.php" title="Track your Order" class="nav-link">Tracking</a></li>-->
                            <li class="nav-item"><a href="javascript:void(0)" class="nav-link">Shipping Charges <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li > <a href="rate-calculator.php" title="Rate Calculator" class="dropdown-item"> Rate Calculator</a> </li>
                                    <li > <a href="inoffer-usa.php" title="Special Offers" class="dropdown-item"> Special Offers</a> </li>


                                </ul>

                            </li>

                            <li class="nav-item"> <a href="javascript:void(0)" class="nav-link"> Resources <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>

                                <ul class="dropdown-menu">

                                    <!--<li class="nav-item "> <a href="our-channel-partner.php" title="Our Channel Partners" class="nav-link"> Our Channel Partners </a></li>

           <li class="nav-item"> <a href="fuel-surcharges.php" title="Fuel Surcharges" class="nav-link">Fuel Surcharges</a> </li>-->
                                    <li> <a class="dropdown-item" href="pay-now.php" title="Pay Now" >Pay Now</a></li>
                                    <li><a class="dropdown-item" href="volumetric-weight-calculator.php" title="Volumetric Weight Calculator">Volumetric Weight Calculator</a></li>
                                    <li><a class="dropdown-item" href="currency-converter.php" title="Currency Converter">Currency Converter</a></li>
                                    <li><a class="dropdown-item" href="https://www.simplyduty.com/import-calculator" target="__blank" title="Volumetric Weight Calculator">Calculate Duty/Taxes </a></li>
                                    <li class="nav-item"> <a href="https://www.timeanddate.com/worldclock/" title="World Clock" target="_blank" class="nav-link">World Clock</a> </li>
                                    <li><a class="dropdown-item" href="download-document.php" title="Download Document">Download Document</a></li>
                                    <li><a class="dropdown-item" href="dangerous-restricted-item.php" title="Dangerous & Restricted Item">Dangerous & Restricted Item </a></li>
                                    <li><a class="dropdown-item" href="https://rapidexworldwide.com/term-and-condition.php" title="Dangerous & Restricted Item">Terms & Condition </a></li>
                                </ul>

                            </li>

                            <li class="nav-item"> <a href="https://rapidexworldwide.com/contact-us.php" class="nav-link" title="Contact Us">Contact Us</a> </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
