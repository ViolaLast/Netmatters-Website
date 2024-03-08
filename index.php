<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Violeta Last">
    <meta name="keywords" content="HTML, CSS, JavaScript,PHP,">
    <meta name="description" property="description" content="Full service, bespoke digital services,
      offering mobile app development, software & web development, software integration, digital marketing, IT, Telecoms & Cyber Security,
      Training for career in tech.">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="css/netstyle.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Poppins:ital,wght@0,100;0,400;0,600;1,400;1,600&display=swap" rel="stylesheet">
    <title>Full Service Digital Agency | Cambridgeshire & Norfolk | Netmatters</title>
<!--==================================================================Favicon==============================================-->   
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
<!--==================================================================SLICK==============================================-->
    <link rel="stylesheet" href="js/slick/slick/slick.css">
    <link rel="stylesheet" href="js/slick/slick/slick-theme.css">

    </head>

        <body>
        <?php error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php include("Netmatters Website/header.php")?>

            <!--============================================================================Consent Policy =======================-->
    <div class="cookie-settings">
        <div class="cookie-container">
            <button type="button" class="cookie-btn">Manage Consent</button>
        </div>
    </div>
<!--============================================================================Chat Button========-->
        <div class="chat-container">
            <span class="chat-btn"> 
                <a href="tel:07521026016">
                    <i class="icon-flight"></i>
                </a>
            </span>
        </div>
            <div class="content" >
                <div class="container">
        

<!--==============================================================================Cookies==============================================-->
        <div class="cookie-pop-up">
            <div class="cookie-content">
                <div class="cookie-header">
                    <div class="cookie-title">Cookies Policy</div>
                </div>

                    <div class="cookie-body">
                        <p>
                            Our website uses cookies. This helps us provide you with a good experience on our website. 
                            To see what cookies we use and what they do, and to opt-in on non-essential cookies click
                             "change settings". For a detailed explanation, click on "<a href="/privacy-policy">Privacy Policy</a>
                             " otherwise click "Accept Cookies" to enter.
                        </p>
                    </div>

                <div class="cookie-footer">
                    <div class="cookie-buttons">
                    
                            <div class="change-btn btn-change">
                                <a>
                                    Change Settings
                                </a>
                            </div>

                            <div class="change-btn btn-accept">
                                <a class="btn-acceptcookies">
                                    Accept Cookies
                                </a>
                            </div>
                
                    </div>
                </div>
            </div>
        </div>
<!--===============================================================================HEADER=========-->
    <div class="content-inner">
        <header id="myHeader" class="is-sticky">
            <div class="header-container">
                    <div class="inner general">
                
                        <div class="header-top m750 m970 w1200 general">

                            <div class="logo-container">
                                <a class="logo" href="#">
                                    <img src="https://www.netmatters.co.uk/assets/images/f-logo.png" alt="Netmatters Logo">
                                </a>
                            </div>
                            
                                    <span class="mobile">
                                        <span  id="phone"> 
                                        <a href="tel:07521026016">
                                            <span class="icon-phone-call"></span>
                                        </a>
                                        </span>     
                                    </span>

                            <div class="button-container-hidden">
                                <div class="buttons-hidden">

                                    <a id="support" href="#.screenconnect.com" class="btn-support hidden-b" target="_blank"><span class="icon-mouse"></span> Support </a>
                                    
                                    <a id="contact" class="btn-contact hidden-b" href="#.screenconnect.com" target="_blank"><span class="icon-paperplane"></span> Contact</a>
                            
                                    <form method="GET" action="#/search" class="search-form">

                                                <input class="form-control search-bar" placeholder="Search..." id="search-input" type="text" style="display: none;">
                                        
                                        <button class="btn-search hidden-bu" tabindex="0" type="submit">
                                            <span class="icon-search"></span>
                                        </button>
                                    </form>
                                    
                                    <div class="overlay" onclick="toggleSidebar()"></div>

                                    <button type="button" class="hamburger-button" onclick="toggleSidebar()">   
                                        <span class="hamburger-menu">
                                            <span class="ham-bar ham-top"></span>
                                            <span class="ham-bar ham-mid"></span>
                                            <span class="ham-bar ham-bottom"></span>
                                        </span>
                                    </button> 

                                </div>
                            </div>
                        </div>
            
                        <form class="search-barm">
                            <input type="search" placeholder="Search..." id="search-bar">
                            <button><span class="icon-search"></span></button>
                        </form>
                    </div> 
                </div>          
<!--======================================================================HIDDEN NAV MENU=============-->                         
                    <nav class="ikon-nav-menu general">
                        <div class="nav-container general m970 w1200 ">

                                        <div class="nav-box">
                                            <div class="software nav-item" tabindex="1">
                                                <a href="#bespoke-software" class="ikon-a">
                                                    <span class="triangle"></span>
                                                    <span class="mi icon-laptop"></span>
                                                        <small>Bespoke</small>Software
                                                </a>
                                                
                                                    <div class="sub-nav-menu bs">
                                                    
                                                        <ul class="sub-container sub-menu general">
                                                            <li class="sub-menu-title">
                                                                Our Bespoke Software Services
                                                            </li>
                                                            
                                                                    <li class="sub-nav-item">
                                                                        <a href="#bespoke-crm">
                                                                            <span class="item-icon icon-cogs"></span>
                                                                            <span class="item-text">Bespoke CRM</span>
                                                                        </a>                                    
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#business-automation"><span class="item-icon icon-briefcase"></span>
                                                                            <span class="item-text">Business Automation</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#software-integrations"><span class="item-icon icon-arrow-shuffle"></span>
                                                                            <span class="item-text">Software Integrations</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#mobile-app-development"><span class="item-icon icon-mobile"></span>
                                                                            <span class="item-text">Mobile App Development</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#bespoke-databases"><span class="item-icon icon-folder-open"></span>
                                                                            <span class="item-text">Bespoke Databases</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#sharepoint-development"><span class="item-icon icon-transfer"></span>
                                                                            <span class="item-text">Sharepoint Development</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#operational-systems"><span class="item-icon icon-download"></span>
                                                                            <span class="item-text">Operational Systems</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#systems-integrations/microsoft-business-central"><span class="item-icon icon-users"></span>
                                                                            <span class="item-text">Business Central Implementation</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#internet-of-things" ><span class="item-icon icon-laptop"></span>
                                                                            <span class="item-text">Internet of Things (IoT) Software</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#intranet-development" ><span class="item-icon icon-cloud"></span>
                                                                            <span class="item-text">Intranet Development</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#customer-portal-development" ><span class="item-icon icon-cloud-download"></span>
                                                                            <span class="item-text">Customer Portal Development</span>
                                                                        </a>
                                                                    </li>

                                                                    <li class="sub-nav-item">
                                                                        <a href="#reporting-hub" ><span class="item-icon icon-earth"></span>
                                                                            <span class="item-text">Reporting Hub</span>
                                                                        </a>
                                                                    </li>

                                                        </ul>
                                                    </div>   
                                            </div>
                                        </div>

                    <div class="nav-box" tabindex="1">                                    
                        <div class="it-support nav-item">
                            <a href="#it-support" class="ikon-a">
                                <span class="triangle"></span>
                                <span class="mi icon-display"></span>
                                    <small>IT</small>Support
                            </a>
                            
                                <div class="sub-nav-menu it">
                                    <ul class="sub-container sub-menu">
                                        <li class="sub-menu-title">
                                            Our IT Support Services
                                        </li>

                                            <li class="sub-nav-item">
                                                <a href="#managed-it-support" >
                                                        <span class="item-icon icon-headphones"></span>
                                                    <span class="item-text">Managed IT Support</span>
                                                </a>
                                            </li>
                                            
                                            <li class="sub-nav-item">
                                                <a href="#business-it-support" >
                                                        <span class="item-icon icon-briefcase"></span>
                                                    <span class="item-text">Business IT Support</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#office-365-for-business" >
                                                        <span class="item-icon icon-laptop"></span>
                                                    <span class="item-text">Office 365 for Business</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#it-consultancy" >
                                                        <span class="item-icon icon-mortar-board"></span>
                                                    <span class="item-text">IT Consultancy</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#cloud-service-provider" >
                                                        <span class="item-icon icon-cloud"></span>
                                                    <span class="item-text">Cloud Service Provider</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#data-backup-disaster-recovery" >
                                                        <span class="item-icon icon-drive"></span>
                                                    <span class="item-text">Data Backup & Disaster Recovery</span>
                                                </a>
                                            </li>

                                    </ul>     
                                </div>   
                        </div>                                
                    </div>
                                                            <div class="nav-box" tabindex="1">
                                                                <div class="marketing nav-item">
                                                                    <a href="#Marketing" class="ikon-a">
                                                                        <span class="triangle"></span>
                                                                        <span class="mi icon-bar-graph"></span>
                                                                            <small>Digital</small>Marketing
                                                                    </a>
                                                                    
                                                                        <div class="sub-nav-menu dm">
                                                                            <ul class="sub-container sub-menu">
                                                                                <li class="sub-menu-title">
                                                                                    Our Digital Marketing Services
                                                                                </li>

                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#engine-optimisation" >
                                                                                                <span class="item-icon icon-search"></span>
                                                                                            <span class="item-text">Search Engine Optimisation (SEO)</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#digital-marketing/ppc" >
                                                                                                <span class="item-icon icon-money"></span>
                                                                                            <span class="item-text">Pay Per Click Advertising (PPC)</span>
                                                                                        </a>
                                                                                    </li>
                                        
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#conversion-marketing" >
                                                                                                <span class="item-icon icon-trending_up"></span>
                                                                                            <span class="item-text">Conversion Rate Optimisation (CRO)</span>
                                                                                        </a>
                                                                                    </li>
                                        
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#email-marketing" >
                                                                                                <span class="item-icon icon-envelope"></span>
                                                                                            <span class="item-text">Email Marketing</span>
                                                                                        </a>
                                                                                    </li>
                                        
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#social-media-marketing" >
                                                                                                <span class="item-icon icon-users"></span>
                                                                                            <span class="item-text">Social Media Marketing</span>
                                                                                        </a>
                                                                                    </li>
                                        
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#content-marketing" >
                                                                                                <span class="item-icon icon-pencil"></span>
                                                                                            <span class="item-text">Content Marketing</span>
                                                                                        </a>
                                                                                    </li>
                                    
                                                                            </ul>     
                                                                        </div>   
                                                                </div>  
                                                            </div>
                        <div class="nav-box">                                    
                            <div class="telecoms nav-item">
                                <a href="#telecoms-services" class="ikon-a" tabindex="1">
                                    <span class="triangle"></span>
                                    <span class="mi icon-phone-call"></span>
                                        <small>Telecoms</small> Services
                                </a>
                            
                                    <div class="sub-nav-menu ts">
                                        <ul class="sub-container sub-menu">
                                            <li class="sub-menu-title">
                                                Our Telecoms Services
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#business-mobile" >
                                                        <span class="item-icon icon-ticket"></span>
                                                    <span class="item-text">Business Mobile</span>
                                                </a>
                                            </li>
                                            
                                            <li class="sub-nav-item">
                                                <a href="#business-voip" >
                                                        <span class="item-icon icon-phone"></span>
                                                    <span class="item-text">Hosted VoIP Provider</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#business-voip" >
                                                        <span class="item-icon icon-phone-square"></span>
                                                    <span class="item-text">Business VoIP Systems</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#-broadband-provider" >
                                                        <span class="item-icon icon-dashboard"></span>
                                                    <span class="item-text">Business Broadband</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#leased-lines-provider" >
                                                        <span class="item-icon icon-handshake"></span>
                                                    <span class="item-text">Leased Lines Provide</span>
                                                </a>
                                            </li>

                                            <li class="sub-nav-item">
                                                <a href="#3cx-systems" >
                                                        <span class="item-icon icon-phone-call"></span>
                                                    <span class="item-text">3CX Systems</span>
                                                </a>
                                            </li>

                                        </ul>    
                                    </div>
                            </div>
                        </div>
                                                            <div class="nav-box">                                    
                                                                <div class="web nav-item">
                                                                    <a href="#web-design" class="ikon-a">
                                                                        <span class="triangle"></span>
                                                                        <span class="mi icon-embed"></span>
                                                                            <small>Web</small> Design
                                                                    </a>
                                                                
                                                                        <div class="sub-nav-menu wd">
                                                                            <ul class="sub-container sub-menu">
                                                                                <li class="sub-menu-title">
                                                                                    Our Web Design Services
                                                                                </li>

                                                                                <li class="sub-nav-item">
                                                                                    <a href="#bespoke-website-design" >
                                                                                            <span class="item-icon icon-pencil"></span>
                                                                                        <span class="item-text">Bespoke Website Design</span>
                                                                                    </a>
                                                                                </li>
                                                                                
                                                                                <li class="sub-nav-item">
                                                                                    <a href="#ecommerce-development" >
                                                                                            <span class="item-icon icon-cart"></span>
                                                                                        <span class="item-text">eCommerce Website Design</span>
                                                                                    </a>
                                                                                </li>
                                    
                                                                                <li class="sub-nav-item">
                                                                                    <a href="#pay-monthly-websites" >
                                                                                            <span class="item-icon icon-display"></span>
                                                                                        <span class="item-text">Pay Monthly Websites</span>
                                                                                    </a>
                                                                                </li>
                                    
                                                                                <li class="sub-nav-item">
                                                                                    <a href="#web-design/branding" >
                                                                                            <span class="item-icon icon-bullhorn"></span>
                                                                                        <span class="item-text">Branding & Design</span>
                                                                                    </a>
                                                                                </li>
                                    
                                                                                <li class="sub-nav-item">
                                                                                    <a href="#mobile-app-development" >
                                                                                            <span class="item-icon icon-mobile"></span>
                                                                                        <span class="item-text">Mobile App Development</span>
                                                                                    </a>
                                                                                </li>
                                    
                                                                                <li class="sub-nav-item">
                                                                                    <a href="#/web-hosting" >
                                                                                            <span class="item-icon icon-cloud"></span>
                                                                                        <span class="item-text">Web Hosting</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>    
                                                                        </div>
                                                                </div>
                                                            </div>
                        <div class="nav-box">                                    
                            <div class="cyber nav-item">
                                <a href="#security" class="ikon-a">
                                    <span class="triangle"></span>
                                    <span class="mi icon-security"></span>
                                        <small>Cyber</small> Security
                                </a>
                            
                                    <div class="sub-nav-menu cs">
                                        <ul class="sub-container sub-menu">
                                            <li class="sub-menu-title">
                                                Our Cyber Security Services
                                            </li>

                                                <li class="sub-nav-item">
                                                    <a href="#security-assessment" >
                                                            <span class="item-icon icon-paste"></span>
                                                        <span class="item-text">Cyber Security Assessment</span>
                                                    </a>
                                                </li>
                                                
                                                <li class="sub-nav-item">
                                                    <a href="#security-management" >
                                                            <span class="item-icon icon-clock"></span>
                                                        <span class="item-text">Cyber Security Management</span>
                                                    </a>
                                                </li>

                                                <li class="sub-nav-item">
                                                    <a href="#penetration-testing" >
                                                            <span class="item-icon icon-flask"></span>
                                                        <span class="item-text">Cyber Penetration Testing</span>
                                                    </a>
                                                </li>

                                                <li class="sub-nav-item">
                                                    <a href="#cyber-essentials-certification">
                                                            <span class="item-icon icon-mortar-board"></span>
                                                        <span class="item-text">Cyber Essentials Certification</span>
                                                    </a>
                                                </li>

                                                <li class="sub-nav-item">
                                                    <a href="#pci-compliance" >
                                                            <span class="item-icon icon-security"></span>
                                                        <span class="item-text">PCI Compliance</span>
                                                    </a>
                                                </li>

                                                <li class="sub-nav-item">
                                                    <a href="#hacker-prevention" >
                                                            <span class="item-icon icon-lock"></span>
                                                        <span class="item-text">Hacking Prevention</span>
                                                    </a>
                                                </li>

                                        </ul>    
                                    </div>
                            </div>
                        </div>
                                                            <div class="nav-box">                                    
                                                                <div class="developer nav-item">
                                                                    <a href="#course" class="ikon-a">
                                                                        <span class="triangle"></span>
                                                                        <span class="mi icon-graduation-cap"></span>
                                                                            <small>Developer</small>Course
                                                                    </a>
                                                                
                                                                        <div class="sub-nav-menu dc">
                                                                            <ul class="sub-container sub-menu">
                                                                                <li class="sub-menu-title">
                                                                                    Our Developer Course Services
                                                                                </li>

                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#train-for-a-career-in-tech">
                                                                                                <span class="item-icon icon-laptop"></span>
                                                                                            <span class="item-text">Train For A Career In Tech</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#skills-bootcamp">
                                                                                                <span class="item-icon icon-embed"></span>
                                                                                            <span class="item-text">Skills Bootcamp</span>
                                                                                        </a>
                                                                                    </li>
                                        
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#frequently-asked-questions">
                                                                                                <span class="item-icon icon-help"></span>
                                                                                            <span class="item-text">Scion Scheme Frequently Asked Questions</span>
                                                                                        </a>
                                                                                    </li>
                                        
                                                                                    <li class="sub-nav-item">
                                                                                        <a href="#scion-collaborators">
                                                                                                <span class="item-icon icon-handshake"></span>
                                                                                            <span class="item-text">Scion Collaborators</span>
                                                                                        </a>
                                                                                    </li>

                                                                            </ul>    
                                                                        </div>
                                                                </div>
                                                            </div>
                </div>
            </nav>
        </header>
<!--============================================================================Carousel====================================-->
    <section class="carousel" aria-label="Gallery">
        <ul class="carousel__viewport">

            <li id="carousel__slide1" class="carousel__slide slide1">
                <img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-YLei.png" alt="The East Of England's Leading Technology Company Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">>
            
                <div class="text-overlay m750 m970 w1200 general">
                    <h2 class="h2"><strong>The East Of England's Leading Technology Company</strong></h2>
                    <p>Performance-driven digital and technology services <br> with complete transparency.</p>
                    <a href="#why-choose-us"><span class="slider-button sl-1 ">Why choose us? &nbsp;<span class="icon-arrow-right"></span></span></a>
                </div>        
            </li>


            <li id="carousel__slide2" tabindex="0"  class="carousel__slide">
                <img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-O67Y.jpg" alt="Bespoke Software Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
               
                <div class="text-overlay m750 m970 w1200 general">
                    <h2 class="h2"><strong>Bespoke Software</strong></h2>
                    <p>Delivering expert bespoke software  <br> solutions across a range of industries.</p>
                    <a href="#Bespoke-Software"><span class="slider-button sl-2 ">Find out more &nbsp;<span class="icon-arrow-right"></span></span></a>
                </div>  
            </li>

            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                <img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-gay8.png" alt="IT Support Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
                
                <div class="text-overlay m750 m970 w1200 general">
                    <h2 class="h2"><strong>IT Support</strong></h2>
                <p>Fast and cost-effective IT support <br> services for your business.</p>
                <a href="#It-Support"><span class="slider-button sl-3">Find out more &nbsp;<span class="icon-arrow-right"></span></span></a>
                </div> 
            </li>

            <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                <img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-6yTp.png" alt="Digital Marketing Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
        
                <div class="text-overlay m750 m970 w1200 general">
                    <h2 class="h2"><strong>Digital Marketing</strong></h2>
                    <p>Generating your new business through <br> results-driven marketing activities.</p>
                <a href="#Digital-Marketing"><span class="slider-button sl-4 ">Find out more &nbsp;<span class="icon-arrow-right"></span></span></a>
                </div>  
            </li>


            <li id="carousel__slide5" tabindex="0" class="carousel__slide">
                <img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-J8Xx.png" alt="Telecoms Services Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">
        
                <div class="text-overlay m750 m970 w1200 general">
                    <h2 class="h2"><strong>Telecoms Services</strong></h2>
                    <p>A new approach to connectivity,<br> see how we can help your business.</p>
                    <a href="#Telecoms-Services"><span class="slider-button sl-5">Find out more &nbsp;<span class="icon-arrow-right"></span></span></a>
                </div>  
            </li>
            
            <li id="carousel__slide6" tabindex="0" class="carousel__slide">
                <img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-K0pn.jpg" alt="Web Design Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">

                <div class="text-overlay m750 m970 w1200 general">
                    <h2 class="h2"><strong>Web Design</strong></h2>
                    <p>For businesses looking to make a strong <br> and effective first impression.</p>
                    <a href="#Wed-Design"><span class="slider-button sl-1 ">Find out more &nbsp;<span class="icon-arrow-right"></span></span></a>
                </div>  
            </li>
            
            <li id="carousel__slide7" tabindex="0" class="carousel__slide">
                <img src="https://www.netmatters.co.uk/assets/images/thumbnails/full_height_slideshow/home-MSxH.png" alt="Cyber Security Norwich, Norfolk, Cambridge, North London, Essex, Hertfordshire, Enfield">

                <div class="text-overlay m750 m970 w1200 general">
                    <h2 class="h2"><strong>Cyber Security</strong></h2>
                    <p>Keeping businesses and their customers <br> sensitive information protected.</p>
                    <a href="#Cyber-Security"><span class="slider-button sl-7">Find out more &nbsp;<span class="icon-arrow-right"></span></span></a>
                </div>  
            </li>
        </ul>
    </section>
<!--==================================================================================Main boxes=====================================================-->
                <main class="middle">
                    <div class="container-middle m750 m970 w1200 general">
                        <div class="our-service">

                                <div class="box-h">
                                    <h3 class="h4"><strong>Our Services</strong></h3>
                                
                                    <h3 class="dis-md">
                                        <a href="#/case-studies">View Our Work &nbsp;<span class="icon-arrow-right"></span></a>
                                    </h3>
                                </div>

                                <a class="col-icon m33" href="#bespoke-software">
                                    <span class="ikon-software c1 bespoke-software" id="bespoke">
                                        <span class="ikon-circles ikon sl-2 icon-laptop"></span>
                                        <span class="h6">Bespoke Software</span>
                                        <span class="p">Bespoke software solutions for all your business needs including integrations and reporting.</span>
                                        <span class="btn-middle sl-2 box-button">Read More</span>
                                    </span>
                                </a>

                                <a class="col-icon m33" href="/it-support">
                                    <span class="ikon-software c2" id="IT">
                                        <span class="ikon-circles ikon sl-3 icon-display"></span>
                                        <span class="h6">IT Support</span>
                                        <span class="p">Fully managed IT support and consultancy packages tailored to meet your exact business needs.</span>
                                        <span class="btn-middle sl-3 box-button">Read More</span>
                                    </span>
                                </a>

                                <a class="col-icon m33" href="/digital-marketing">
                                    <span class="ikon-software c3" id="digital">
                                        <span class="ikon-circles ikon sl-4 icon-bar-graph"></span>
                                        <span class="h6">Digital Marketing</span>
                                        <span class="p">Driven brand awareness &amp; ROI through creative digital marketing campaigns.</span>
                                        <span class="btn-middle sl-4 box-button">Read More</span>
                                    </span>
                                </a>

                                <a class="col-icon m50" href="/telecoms-services">
                                    <span class="ikon-software c4" id="telecoms">
                                        <span class="ikon-circles ikon sl-5 icon-phone-call"></span>
                                        <span class="h6">Telecoms Services</span>
                                        <span class="p">Business telephony solutions including mobile &amp; connectivity solutions.</span>
                                        <span class="btn-middle sl-5 box-button">Read More</span>
                                    </span>
                                </a>

                                <a class="col-icon m50" href="/web-design">
                                    <span class="ikon-software c5" id="Web">
                                        <span class="ikon-circles ikon sl-1 icon-embed"></span>
                                        <span class="h6">Web Design</span>
                                        <span class="p">User-centric design for businesses looking to make a lasting impression.</span>
                                        <span class="btn-middle sl-1 box-button">Read More</span>
                                    </span>
                                </a>

                                <a class="col-icon m50" href="/cyber-security">
                                    <span class="ikon-software c6" id="Cyber">
                                        <span class="ikon-circles ikon sl-7 icon-security"></span>
                                        <span class="h6">Cyber Security</span>
                                        <span class="p">Prevention, testing, consultancy &amp;;breach management services.</span>
                                        <span class="btn-middle sl-7 box-button">Read More</span>
                                    </span>
                                </a>

                                <a class="col-icon m50" href="/developer-training">
                                    <span class="ikon-software c7" id="Developer">
                                        <span class="ikon-circles ikon sl-5 icon-graduation-cap"></span>
                                        <span class="h6">Developer Training</span>
                                        <span class="p">Web design &amp;;software training courses designed to secure a job in tech.</span>
                                        <span class="btn-middle sl-5 box-button">Read More</span>
                                    </span>
                                </a>

                            
                    
                            <h3 class="our-work no-dis-sm">
                                <a href="/View-Our-Work">View Our Work &nbsp;<em class="icon-arrow-right"></em></a>
                            </h3>
                    </div>
                </div>
            </main>
<!--===========================================================================slider============================================-->  
                            <div class="slider autoplay">
                                <div class="slide-track sliding-partners autoplay">
                                    
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/google-partner.jpg" alt="Google Partners">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/future-50.jpg" alt="Future-50">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/iso_27001.jpg" alt="ISO-2013">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/qms.jpg" alt="ISO-2015">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/living_wage.png" alt="Living-wage">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/norfolk-carbon-charter.jpg" alt="Norfolk Carbon charter">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/PPC_logo.jpg" alt="PPC">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/princess-royal-training.jpg" alt="Princess-royal-training 2020">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/investing-in-future-growth.jpg" alt="Investing-in-future-growth">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/skills-of-tomorrow.jpg" alt="Skills-of-tomorrow">
                                    </div>
                                    <div class="slide">
                                        <img src="https://www.netmatters.co.uk/assets/images/accreditations/norfolk_prohelp.png" alt="Norfolk-Pro-help">
                                    </div>

                                </div>
                            </div>
<!--=========================================================================Welcome To Netmatters=================================================-->
                            <div class="welcome-to-netmatters">
                                <div class="welcome-container  m750 m970 w1200 general">

                                    <div class="welcome-selection">

                                        <h2 class="h3"><strong>Welcome To Netmatters</strong></h2>

                                        <p><strong>Netmatters is a leading <a href="#">Bespoke Software</a>,
                                            <a href="#it-support">IT Support</a>, and
                                            <a href="#digital-marketing">Digital Marketing</a> 
                                            company based in the East of England with offices in <a href="#london-office" 
                                            target="_blank">London</a>,&nbsp; <a href="#cambridge-office">Cambridge</a>,
                                            <a href="#wymondham-office">Wymondham</a>, and 
                                            <a href="#yarmouth-office">Great Yarmouth</a>.</strong></p>

                                        <p>We aren't tied into contracts with third-party providers, so you know that our recommendations
                                            for your business are based purely with one benefit in mind: to help improve your business with
                                            the most appropriate solutions.</p>
                                        <p>We pride ourselves on being an ethical business and have a unique business offering and cost model 
                                            that ensures you get the most from our relationship in an upfront manner.</p>
                                    
                                            <div class="inline">
                                                <a href="/why-choose-us" target="_blank" class="why-choose-us ref-button">why choose us? &nbsp;<em class="icon-arrow-right"></em></a>
                                                <a href="/our-culture" target="_blank" class="our-culture ref-button">our culture &nbsp;<em class="icon-arrow-right"></em></a>
                                            </div>
                                    </div>
                                    
                                        <div class="our-clients">

                                                <h2 class="h3"><strong>What Our Clients Think</strong></h2>

                                                <span class="stars">
                                                    <span class="icon-star-full"></span>
                                                    <span class="icon-star-full"></span>
                                                    <span class="icon-star-full"></span>
                                                    <span class="icon-star-full"></span>
                                                    <span class="icon-star-full"></span>
                                                </span>
            
                                                
                                                    <blockquote class="client-quote"><b>Netmatters stood out from the start. Great guys and very easy to work with. 
                                                        Both the build and digital marketing teams are clearly skilled -they know their stuff! 
                                                        They delivered a website to our (high!) expectations and went over and above to ensure we were satisfied clients 
                                                        - and we are!</b></blockquote>

                                                <p>
                                                    <span class="quote-author">Eleanor Bishop, Head of Marketing - 
                                                        <a href="#case-studies/ashcroft-partnership"><cite> Ashcroft Partnership LLP</cite></a>
                                                    </span>
                                                </p>
                                            
                                                <div class="review-btn">
                                                    <a href="https://www.google.com/search?sca_esv=591697910&q=Netmatters+reviews&uds=AMIYvT-X2YjRMuTBLL4gn8ZtOPYd1dvwnxS0RKhY5rVMaSvQH7O91HHMTf8MK4LG1MkUuSM11nGDVwuNXLKbxZnKRtrTcQJCOExuoO8RxjBwi0HrzZ3KEo4&sa=X&ved=2ahUKEwi466jNjpeDAxVXSUEAHdJdDXcQxKsJegQIFRAB&ictx=0&biw=1280&bih=939"
                                                    target="_blank" class="btn-google ref-button">Google Reviews &nbsp;<span class="icon-arrow-right"></span></a>
                                                    <a href="https://uk.trustpilot.com/review/www.netmatters.co.uk" target="_blank" 
                                                    class=" btn-pilot ref-button">TrustPilot Reviews &nbsp;<span class="icon-arrow-right"></span></a>
                                                </div>
                                        </div> 
                                </div>
                            </div>
<!--=====================================================================================Latest News================================================-->    
                    <div class="news-container m750 m970 w1200 general">

                            <div class="news-header ">
                                <span class="Latest-news ln-h4"><strong> Latest News </strong></span>

                                <div class="news-view-all dis-md">
                                    <h3 class="view-all"><a href="#/articles"><strong>View All &nbsp;</strong><span class="icon-arrow-right"></span></a></h3>
                                </div>
                            </div>

                        <section class="news-articles">

                            <div class="article-link">
                                <a class="a" href="#" target="_blank"></a>
                                    <div>
                                        <a href="#" class="news-pin pin-two" title="View all: Digital Marketing / News">News</a>
                                    </div>
                                        <img src="https://www.netmatters.co.uk/assets/images/thumbnails/thumb/east-anglian-air-1pHi.png" alt="East Anglian Air Ambulance (EAAA)">
                                    
                                        <div class="article-one ">
                                            <h3 class="h5 two">East Anglian Air Ambulance - Introducing a 3C...<span class="read-time"> - 4 minute read</span></h3>
                                                <p>The Client Championing ‘Your Local Life-Saving Charity’ the East Anglian Air Ambulance (EAAA) is a r...</p>
                                        <div class="btn-two">
                                            <a href="#">Read More</a>
                                        </div> 
                                            <div class="posted">

                                                <span class="mlogo">
                                                    <img src="https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png" alt="Netmatters mini logo">
                                                </span> 
                                                    <div class="details">
                                                        <strong>Posted by Netmatters</strong>
                                                        <p>2nd January 2024</p>
                                                    </div> 
                                            </div> 
                                    </div>   
                            </div>

                                            <article class="article-link">
                                                <a class="a" href="#" target="_blank"></a>
                                                    <div>
                                                        <a href="#" class="news-pin pin-one" title="View all: Digital Marketing / News">News</a>
                                                    </div>
                                                        <img class="" src="https://www.netmatters.co.uk/assets/images/thumbnails/thumb/jamie-slater-DJvi.png" alt="Jamie Slater Netmatters 5 year legend service award">
                                                    
                                                        <div class="article-one">
                                                            <h3 class="h5">Jamie Slater - Netmatters 5 Year Legend<span class="read-time"> - 3 minute read</span></h3>
                                                                <p>Today, we celebrate the brilliant accomplishments of Jamie Slater as he receives the Netmatters Long...</p>
                                                            <div class="btn-one">
                                                                <a href="#">Read More</a>
                                                            </div> 

                                                        <div class="posted">
                                                                <span class="mlogo"> 
                                                                    <img src="https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png" alt="Netmatters mini logo">
                                                                </span>
                                                                    <div class="details">
                                                                        <strong>Posted by Netmatters</strong>
                                                                        <p>15th December 2023</p>
                                                                    </div>
                                                        </div> 
                                                    </div>
                                            </article>
                                            
                                                <div class="article-link a3">
                                                    <a class="a" href="#" target="_blank"></a>
                                                        <div>
                                                            <a href="#" class="news-pin pin-two" title="View all: Digital Marketing / News">News</a>
                                                        </div>
                                                            <img src="https://www.netmatters.co.uk/assets/images/thumbnails/thumb/november-notables-2023-BKWa.png" alt="Samantha Lupton November Notable of the month">
                                                        
                                                        <div class="article-one ">
                                                            <h3 class="h5 two">November Notables  2023 <br><span class="read-time"> - 4 minute read</span></h3>
                                                                <p>At Netmatters, recognising and appreciating the hard work and achievements of our team members is a...</p>
                                                                    <div class="btn-two">
                                                                        <a href="#">Read More</a>
                                                                    </div> 
                                                                
                                                                <div class="posted">
                                                                        <span class="mlogo">
                                                                            <img src="https://www.netmatters.co.uk/assets/images/thumbnails/article_contact_thumb/netmatters-ltd-VXAv.png" alt="Netmatters mini logo">
                                                                        </span>
                                                                            <div class="details">
                                                                                <strong>Posted by Netmatters </strong>
                                                                                <p>9th December 2023</p>
                                                                            </div>
                                                                </div> 
                                                        </div>
                                                </div>
                                    </section>

                                                <div class="view-all-container no-dis-sm">
                                                    <h3 class="view-all no-dis-sm"><a href="#/articles" class="our-work">View All &nbsp;<span class="icon-arrow-right"></span></a></h3>
                                                </div>
                        </div>
<!--===================================================================================Clients============================================-->
                                <div class="clients-list sliding play">
                                    <div class="sliding-track sliding-partners play">
                                    
                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img" id="swan">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/black_swan_logo.png" alt="Black Swan Logo">                                                
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Black Swan Care Group</h3>
                                                    <p>Black Swan Care Group own and manage 21 high-quality care and residential homes with a focus on
                                                        putting the needs of their residents first.
                                                    </p>
                                                    <a href="#management-software" class="btn btn-gray">
                                                        View Our Case Study
                                                        <em class="icon-arrow-right"></em>
                                                    </a>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>

                                        
                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img" id="xupes">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/xupes_logo.png" alt="Xupes Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Xupes</h3>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/beat_logo.png" alt="Beat Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>BEAT</h3>
                                                    <p>The UK's eating disorder charity founded in 1989.</p>
                                                        <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>

                                        
                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/survey_solutions_logo.png" alt="Survey Solutions Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                        <h3>Survey Solutions</h3>
                                                        <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/girl_guides_anglia_logo.png" alt="Girl Guiding Anglia Logo">
                                                </picture>
                                                    <article class="tooltip-text hidden-box top">
                                                        <h3>Girl Guiding Anglia</h3>
                                                        <p>Girl Guiding Anglia is part of Girlguiding, the UK's leading charity for girls and young women in
                                                            the UK.</p>
                                                        <a href="#girl-guides-case-study" class="btn btn-blu">
                                                            View Our Case Study
                                                            <em class="icon-arrow-right"></em>
                                                        </a>
                                                                <span class="triangle-c"></span>
                                                    </article>
                                                </div>
                                            </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img hover-text">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/sweetzy_logo.png" alt="Sweetzy Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Sweetzy</h3>
                                                        <p>Sweetzy are an online sweets retailer, based in Wymondham.</p>
                                                    <a href="#case-study-sweetzy" class="btn btn-grn">
                                                        View Our Case Study
                                                        <em class="icon-arrow-right"></em>
                                                    </a>
                                                        <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/howespercivallogo.png" alt="Howes Percival Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Howes Percival</h3>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/girls_day_school_trust_logob.png" alt="GDST">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>GDST</h3>
                                                    <p>
                                                        The <a href="https://www.gdst.net/">Girls' Day School Trust (GDST)</a> is the UK's leading family
                                                        of 25 independent girls' schools.
                                                    </p>
                                                    <a href="#gdst-case-study" class="btn btn-grn">
                                                        View Our Case Study
                                                        <em class="icon-arrow-right"></em>
                                                    </a>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/ashcroftlogo_landscape_goldblack_DP60P-small.png" alt="Ashcroft Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Ashcroft Partnership LLP</h3>
                                                    <p>Originally founded in 2006 as Ashcroft Anthony, they became Ashcroft Partnership LLP in 2020 and
                                                        are one of the top chartered accountancy firms in Cambridge, advising entrepreneurs and
                                                        families.</p>
                                                    <a href="#ashcroft-partnership" class="btn btn-pur">
                                                        View Our Case Study
                                                        <em class="icon-arrow-right"></em>
                                                    </a>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/onetravellerlogo_white_figuire.png" alt="One Traveller Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>One Traveller</h3>
                                                    <p><a href="#onetraveller.co.uk/" target="_blank">One
                                                            Traveller</a>, founded in 2007, is a leading provider of solo holidays for over 50s.
                                                    </p>
                                                    <a href="#web-case-study" class="btn btn-pur">
                                                        View Our Case Study
                                                        <em class="icon-arrow-right"></em>
                                                    </a>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/searles_logo.jpg" alt="Searles Logo">
                                                </picture>
                                                
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Searles Leisure Resort</h3>
                                                    <p>Searles Leisure Resort, on the beautiful North Norfolk coast, is an award-winning UK holiday
                                                        resort for families.
                                                    </p>
                                                    <a href="#searles-leisure-resort" class="btn btn-grn">
                                                        View Our Case Study
                                                        <em class="icon-arrow-right"></em>
                                                    </a>
                                                    <span>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img busseys">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/busseys_logo.png" alt="Busseys Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Busseys</h3>
                                                    <p>
                                                        One of the UK's leading Ford dealerships.
                                                    </p>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>


                                        <div class="item">
                                            <div class="hover-img">
                                                <picture class="logo-img">
                                                    <img src="https://www.netmatters.co.uk/assets/images/clients/crane_logo.png" alt="Crane Logo">
                                                </picture>
                                                <article class="tooltip-text hidden-box top">
                                                    <h3>Crane Garden Buildings</h3>
                                                    <p>Leading manufacturer and supplier of high-end garden rooms, summerhouses, workshops and sheds in
                                                        the UK.
                                                    </p>
                                                    <span class="triangle-c"></span>
                                                </article>
                                            </div>
                                        </div>
                                
                                    </div>
                                </div>
<!--=================================================================================Newspaper=======================================-->
                            <div class="newspaper">
                                <div class="newspaper-container m750 m970 w1200 general">

                                    <h2 class="nh2">Email Newsletter <span class="nh2">Sign-Up</span></h2>

                                    <form method="POST" action="#newsletter-sign-up" accept-charset="UTF-8" id="sign-up" class="sign-up">
                                        <div class="form-container">

                                            <div class="input-news">
                                                <span class="form-input">
                                                    <label for="newsletter-name" class="n-name"><b>Your Name &nbsp;</b><i>*</i></label>
                                                    <input  type="text" id="newsletter-name" class="form-middle" name="name" required >
                                                </span>

                                                <span class="form-input">
                                                    <label for="newsletter-email" class="n-email"><b>Your Email &nbsp;</b><i>*</i></label>
                                                    <input type="email" name="email" id="newsletter-email" class="form-middle" required>
                                                </span> 
                                            </div>
                                                    <div class="tick" tabindex="3">
                                                            <div class="left-check">
                                                                <span class="checkbox" id="myCheckbox">
                                                                    <span class="checked" >
                                                                        <span class="icon-checkbox-checked"></span>
                                                                    </span>
                                                                </span>
                                                            </div>

                                                        <span class="policy"> 
                                                            <b>Please tick this box if you wish to receive marketing information from us.
                                                            Please see our <a href="#/privacy-policy" target="_blank">Privacy Policy</a>
                                                            for more information on how we keep your data safe.</b>
                                                        </span>   
                                                    </div>

                                                <button name="submit" class="submit">Subscribe</button>
                                        </div>       
                                    </form>
                                </div>
                            </div>
<!--============================================================================Footer==================================================-->                        
                            <div class="footer-container">
                                <div class="footer-inner m750 m970 w1200 general">
                                        <div class="media-menu">
                                                <picture class="foot-logo">
                                                    <img id="logo2" src="https://www.netmatters.co.uk/assets/images/nm-logo-white-med.png" alt="Netmatters Logo">
                                                </picture> 
                                                        <h4>Follow us on:</h4>

                                            <div class="social-media-links">

                                                <a class="facebook media" href="#facebook.com/netmatters/" target="_blank">
                                                    <span class="icon-facebook"></span>
                                                </a>
                                            
                                                <a class="linkedin media" href="#linkedin.com/company/netmatters-ltd/" target="_blank">
                                                    <span class="icon-linkedin"></span>
                                                </a>
                                            
                                                <a class="twitter  media" href="#twitter.com/netmattersltd" target="_blank">
                                                    <span class="icon-twitter"></span>
                                                </a>
                                            
                                                <a class="instagram media" href="#instagram.com/netmattersltd/" target="_blank">
                                                    <span class="icon-instagram "></span>
                                                </a>
                                            </div>
                                        </div>

                                    <div class="footer-links">
                                    
                                        <div class="footer-about-netmatter fl">
                                            <h4>About Netmatters</h4>

                                            <ul class="about-list">
                                                <li><a href="#News">News</a></li>
                                                <li><a href="#Our-Careers">Our Careers</a></li>
                                                <li><a href="#Our-Team">Our Team</a></li>
                                                <li><a href="#Contact-Us">Contact Us</a></li>
                                                <li><a href="#Privacy-Policy">Privacy Policy</a></li>
                                                <li><a href="#Cookie-Policy">Cookie Policy</a></li>
                                                <li><a href="#Data-Retention-Disposal-Policy">Data Retention & Disposal Policy</a></li>
                                                <li><a href="#CCTV-Policy">CCTV Policy</a></li>
                                                <li><a href="#Environmental-Policy">Environmental Policy</a></li>
                                                <li><a href="#Terms-Conditions">Terms & Conditions</a></li>
                                            </ul>
                                        </div>    

                                        <div class="footer-Services fl">
                                            <h4>Our Services</h4>

                                            <ul class="service-list">
                                                <li><a href="#Bespoke-Software">Bespoke Software</a></li>
                                                <li><a href="#IT-Support">IT Support</a></li>
                                                <li><a href="#Digital-Marketing">Digital Marketing</a></li>
                                                <li><a href="#Telecoms-Services">Telecoms Services</a></li>
                                                <li><a href="#Web-Design">Web Design</a></li>
                                                <li><a href="#Cyber-Security">Cyber Security</a></li>
                                                <li><a href="#Developer-Training">Developer Training</a></li>
                                            </ul>
                                        </div>

                                        <div class="footer-Industries fl">
                                            <h4>Our Industries</h4>

                                            <ul class="Service-list">
                                                <li><a href="#Financial-Services">Financial Services</a></li>
                                                <li><a href="#Construction">Construction</a></li>
                                                <li><a href="#Retail-E-Commerce">Retail & E-Commerce</a></li>
                                                <li><a href="#Non-Profits">Non-Profits</a></li>
                                                <li><a href="#SME's">SME's</a></li>
                                                <li><a href="#Healthcare">Healthcare</a></li>
                                                <li><a href="#Education-Training">Education & Training</a></li>
                                                <li><a href="#Travel-Leisure">Travel & Leisure</a></li>
                                            </ul>
                                        </div>


                                        <div class="footer-location fl">
                                            <h4>Locations</h4>

                                            <ul class="Location-list">
                                                <li><a href="#London-Office">London Office</a></li>
                                                <li><a href="#Cambridge-Office">Cambridge Office</a></li>
                                                <li><a href="#Wymondham-Office">Wymondham Office</a></li>
                                                <li><a href="#Great-Yarmouth-Office">Great Yarmouth Office</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>        
                            </div> 

                                <footer>
                                    <div class="info general m750 m970 w1200">
                                        <span class="copy-info">&copy; Copyright Netmatters <?php echo date("Y"); ?> <br> All rights reserved. <br> 
                                            <a href="#Sitemap"><span class="sm">&nbsp;-&nbsp;&nbsp;</span>Sitemap</a>
                                        </span>     
                                    </div>              
                                </footer>
        </div>
    </div>  
</div>     

<!--=====================================================================Hamburger menu side-bar=============================================-->
                                <div class="container"> 
                                    <div class="side-bar">

                                        <div class="main-mob-side none">
                                        
                                            <nav class="mobilesize">

                                                <ul>
                                                    <li class="mobile-sidebar mobile-side-but ">
                                                        <a href="#contact-us">Contact Us</a>
                                                    </li>

                                                    <li class="mobile-sidebar mobile-side-but ">
                                                        <a href="#bespoke-software">
                                                            <span class="mob icon-laptop"></span>
                                                        <span class=""><small>Bespoke</small>Software</span>
                                                        </a>
                                                    </li>
                                                </ul>
            <nav class="sub-menu">
                <ul class="mobile-sub">

                    <li><a href="#">Bespoke CRM</a></li>
                    <li><a href="#">Business Automation</a></li>
                    <li><a href="#">Software Integrations</a></li>
                    <li><a href="#">Mobile App Development</a></li>
                    <li><a href="#">Bespoke Databases</a></li>
                    <li><a href="#">Sharepoint Development</a></li>
                    <li><a href="#">Operational Systems</a></li>
                    <li><a href="#">Business Central Implementation</a></li>
                    <li><a href="#">Internet of Things (IOT) Software</a></li>
                    <li><a href="#">Intranet Development</a></li>
                    <li><a href="#">Customer Portal Development</a></li>
                    <li><a href="#">Reporting Hub</a></li>
                </ul>
            </nav>
                                                        <ul>
                                                            <li class="mobile-side-but">
                                                                <a href="#">
                                                                <span class="mob icon-display"></span>
                                                                    <small>IT</small>Support</a></li>
                                                        </ul>

                                                        <nav class="sub-menu ">
                                                            <ul class="mobile-sub">
                                                                <li><a href="#">Managed IT Support</a></li>
                                                                <li><a href="#">Business IT Support</a></li>
                                                                <li><a href="#">Office 365 for Business</a></li>
                                                                <li><a href="#">IT Consultancy</a></li>
                                                                <li><a href="#">Cloud Service Provider</a></li>
                                                                <li><a href="#">Data Backup & Disaster Recovery</a></li>
                                                            </ul>
                                                        </nav>
            <ul>                                           
                <li class="mobile-side-but "><a href="#">
                    <span class="mob icon-bar-graph"></span>
                        <small>Digital</small>Marketing</a></li>
            </ul>

            <nav class="sub-menu ">
                <ul class="mobile-sub">
                    <li><a href="#">Search Engine Optimisation (SEO)</a></li>
                    <li><a href="#">Pay Per Click Advertising (PPC)</a></li>
                    <li><a href="#">Conversion Rate Optimisation (CRO)</a></li>
                    <li><a href="#">Email Marketing</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Content Marketing</a></li>
                </ul>
            </nav>

                                                        <ul>
                                                            <li class="mobile-side-but"><a href="#">
                                                                <span class="mob icon-phone-call"></span>
                                                                    <small>Telecoms</small>Services</a></li>
                                                        </ul>

                                                        <nav class="sub-menu">
                                                            <ul class="mobile-sub">
                                                                <li><a href="#">Business Mobile</a></li>
                                                                <li><a href="#">Hosted Voip Provider</a></li>
                                                                <li><a href="#">Business Voip Systems</a></li>
                                                                <li><a href="#">Business Broadband</a></li>
                                                                <li><a href="#">Leased Lines Provider</a></li>
                                                                <li><a href="#">3CX Systems</a></li>
                                                            </ul>
                                                        </nav>
            <ul>
                <li class="mobile-side-but">
                    <a href="#">
                        <span class="mi icon-embed"></span>
                        <small>Web</small>Design</a>
                </li>
            </ul>

            <nav class="sub-menu">
                <ul class="mobile-sub">
                    <li><a href="#">Bespoke Website Design</a></li>
                    <li><a href="#">Ecommerce Website Design</a></li>
                    <li><a href="#">Pay Monthly Websites</a></li>
                    <li><a href="#">Branding & Design</a></li>
                    <li><a href="#">Mobile App Development</a></li>
                    <li><a href="#">Web Hosting</a></li>
                </ul>
            </nav>

                                                                    <ul>
                                                                        <li class="mobile-side-but">
                                                                            <a href="#">
                                                                                <span class="mob icon-security"></span>
                                                                                <small>Cyber</small>Security</a>
                                                                        </li>
                                                                    </ul>

                                                                    <nav class="sub-menu">
                                                                        <ul class="mobile-sub">
                                                                            <li><a href="#">Cyber Security Assessment</a></li>
                                                                            <li><a href="#">Cyber Security Management</a></li>
                                                                            <li><a href="#">Cyber Penetration Testing</a></li>
                                                                            <li><a href="#">Cyber Essentials Certification</a></li>
                                                                            <li><a href="#">PCI Compliance</a></li>
                                                                            <li><a href="#">Hacking Prevention</a></li>
                                                                        </ul>
                                                                    </nav>
            <ul>
                <li class="mobile-side-but">
                    <a href="#">
                        <span class="mob icon-graduation-cap"></span>
                        <small>Developer</small>Course</a>
                </li>
            </ul>

            <nav class="sub-menu">
                <ul class="mobile-sub">
                    <li><a href="#">Train for a career in Tech</a></li>
                    <li><a href="#">Skills Bootcamp</a></li>
                    <li><a href="#">Scion Scheme Frequently Asked Questions</a></li>
                    <li><a href="#">Scion Collaborators</a></li>
                </ul>
            </nav>
                                        </nav>
                                            </div>

                <div class="hightLight"> 
                        <ul class="new-subsection hidden ml">
                            <li class="side-titles">
                                <a href="#">Services</a>
                            </li>
                        </ul>

                    <nav class="lower-sub-menu hidden ml">
                        <ul class="submini-menu">
                            <li class="mini-menu"><a href="#">Bespoke Software</a></li>
                            <li class="mini-menu"><a href="#">IT Support</a></li>
                            <li class="mini-menu"><a href="#">Digital Marketing</a></li>
                            <li class="mini-menu"><a href="#">Telecoms Services</a></li>
                            <li class="mini-menu"><a href="#">Web Design</a></li>
                            <li class="mini-menu"><a href="#">Cyber Security</a></li>
                        </ul>
                    </nav>
                </div>
                                                        <div class="hightLight">
                                                            <ul>
                                                                <li class="side-titles">
                                                                    <a href="#">Our Work</a>
                                                                </li>
                                                            </ul>

                                                        <nav class="lower-sub-menu">
                                                            <ul class="submini-menu">
                                                                <li class="mini-menu"><a href="#">Case Studies</a></li>
                                                                <li class="mini-menu"><a href="#">Our Digital Marketing</a></li>
                                                                <li class="mini-menu"><a href="#">Our Website Clients</a></li>
                                                                <li class="mini-menu"><a href="#">Our IT Clients</a></li>
                                                                <li class="mini-menu"><a href="#">Our Bespoke Software Clients</a></li>
                                                                <li class="mini-menu"><a href="#">Our Telecoms Clients</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
        <div class="hightLight">                                            
            <ul>
                <li class="side-titles"><a href="#">Our Knowledge</a>
                </li>
            </ul>
                <ul class="submini-menu">
                    <li class="mini-menu"><a href="#">Technologies</a></li>
                    <li class="mini-menu"><a href="#">News</a></li>
                    <li class="mini-menu"><a href="#">Insights</a></li>
                </ul>
            </div>
                                                            <div class="hightLight">
                                                                <ul>
                                                                    <li class="side-titles"><a href="#">Training</a>
                                                                    </li>
                                                                </ul>

                                                                <ul class="submini-menu">
                                                                    <li class="mini-menu"><a href="#">Train for a career in tech</a></li>
                                                                    <li class="mini-menu"><a href="#">Skills Bootcamp</a></li>
                                                                    <li class="mini-menu"><a href="#">SCS Frequently asked Questions</a></li>
                                                                    <li class="mini-menu"><a href="#">Scion Collaborators</a></li>
                                                                </ul>
                                                            </div>
        <div class="hightLight">                                     
            <ul>
                <li class="side-titles"><a href="#">Our Company</a>
                </li>
            </ul>

            <ul class="submini-menu">
                <li class="mini-menu"><a href="#">Why Choose Us?</a></li>
                <li class="mini-menu"><a href="#">Our Culture</a></li>
                <li class="mini-menu"><a href="#">Our Team</a></li>
                <li class="mini-menu"><a href="#">Our Careers</a></li>
                <li class="mini-menu"><a href="#">Our Benefits</a></li>
            </ul>
        </div>                                                      
                                                                    <div class="hightLight">  
                                                                        <ul>
                                                                            <li class="side-titles"><a href="#">Contact Us</a>
                                                                            </li>
                                                                        </ul>
                                                                        <ul class="submini-menu">
                                                                            <li class="mini-menu"><a href="#">London Office</a></li>
                                                                            <li class="mini-menu"><a href="#">Cambridge Office</a></li>
                                                                            <li class="mini-menu"><a href="#">Wymondham Office</a></li>
                                                                            <li class="mini-menu"><a href="#">Great Yamouth Office</a></li>
                                                                        </ul>
                                                                    </div>
            <ul>
                <li class="side-titles sideSm"><a href="#">Covid Risk Assessments</a></li>
                <li class="side-titles none sideSm"><a href="#">Support</a></li>
            </ul>

        </div>
    </div>

        <script src="js/jquery-3.7.1.min.js" defer></script>
        <script src="js/slick/slick/slick.min.js" defer></script>
        <script src="js/scripts.js" defer></script>
        <script src="js/cookie.js" defer></script>
        <script src="js/StickyHeader.js" defer></script>
        <script src="js/sideMenu.js" defer></script>
    
    </body>
</html>