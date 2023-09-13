<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="icon" type="image/x-icon" href="https://stimg.cardekho.com/pwa/img/favicon/cd-favicon-48x48.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <!-- Header -->
    <header class="header" data-track-component="Header" data-gssticky="1">
        <div class="topArea">
            <div class="gsc_container">
                <div class="gsc_row">
                    <div class="logo gsc_col-sm-3">
                        <a title="CarDekho.com - Best place to buy New and Used Cars in India" href="/">
                            <img width="174" height="42" src="https://stimg.cardekho.com/pwa/img/carDekho-newLogo.svg"
                                loading="eager" alt="CarDekho.com - Best place to buy New and Used Cars in India" />
                        </a>
                    </div>
                    <div class="searchArea gsc_col-sm-5">
                        <div class="container">
                            <div data-track-component="SearchBox">
                                <form data-type="searchformall" action="/searchresult" data-track-section="menu_bar">
                                    <span class="backArrow">
                                        <span data-arrow-left="true"></span>
                                    </span>
                                    <div class="ReactTypeahead  inputfield gs_ta  " data-gsmtl-container="true">
                                        <label for="cardekhosearchtext" class=" "></label>
                                        <input type="text" id="cardekhosearchtext" data-id="cardekhosearchtext"
                                            name="qfd21eb5d055c2" maxLength="50" value="" data-gsv-type="required"
                                            data-gsv-min-length="50" data-gsf-name="q"
                                            placeholder="Search Cars eg. Honda Elevate" data-type="q"
                                            aria-label="Select City" data-move-top="0" autoComplete="new-password"
                                            class="" />
                                    </div>
                                    <button class="searchbtn" type="submit" value="search">
                                        <i></i>
                                    </button>
                                    <div id="searchlistheader"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="gsc_col-sm-4 loginAreaRight">
                        <ul>
                            <li class="LangProfileBox">
                                <div class="LangProfile" data-track-section="headertop">
                                    English<span class="downArrow"></span>
                                </div>
                            </li>
                            <li>
                                <span class="shortlist-icon">
                                    <i class="icon icon-cd-heart_empty"></i>
                                    <span class="heartCount count hide"></span>
                                </span>
                            </li>
                            <li class="">
                                <span class="username">
                                    <i class="userIcon icon-cd_my-account"></i>
                                    Login / Register
                                </span>
                                <div class="showuserInfo">
                                    <div class="myaccountdropdown ">
                                        <div class="myaccount" data-track-section="myaccount">
                                            <ul>
                                                <li>
                                                    <a title="My Orders" href="/my-orders">
                                                        <i class="icon-my-order-new"></i>
                                                        My Orders
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="Shortlisted Vehicles" href="/my-shortlisted-vehicles">
                                                        <i class="icon-cd-heart_empty"></i>
                                                        Shortlisted Vehicles
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="My Activity" href="/my-questions-for-you">
                                                        <i class="icon-time"></i>
                                                        My Activity
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="My Vehicles" href="/my-usedcar.htm">
                                                        <i class="icon-my-vehical-new"></i>
                                                        My Vehicles
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="My Garage" href="/my-garage">
                                                        <i class="icon-mycar"></i>
                                                        My Garage
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="Profile Settings" href="/my-profile-setting">
                                                        <i class="icon-setting-new"></i>
                                                        Profile Settings
                                                    </a>
                                                </li>
                                                <li>
                                                    <a title="Logout" href="#">
                                                        <i class="icon-logout"></i>
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomArea">
            <div class="gsc_container">
                <div class="gsc_row">
                    <nav class="gsc_col-sm-12 gsc_col-md-12">
                        <ul class="" data-track-section="MainMenu">
                            <li data-slug="#" class=" mainMenu ">
                                <a title="New Cars" href="#">
                                    <span data-lazy="true" class="innerSpan">
                                        NEW CARS <i></i>
                                    </span>
                                </a>
                                <ul class="subMenu newSubMenu" data-track-section="SubMenu">
                                    <li data-slug="/newcars" class="  ">
                                        <a title="Explore New Cars" href="/newcars">
                                            <span data-lazy="true" class="innerSpan">Explore New Cars</span>
                                        </a>
                                    </li>
                                    <li data-slug="/electric-cars" class="  new">
                                        <a title="Electric Cars" href="/electric-cars">
                                            <span data-lazy="true" class="innerSpan">Electric Cars</span>
                                        </a>
                                    </li>
                                    <li data-slug="/upcomingcars" class="  ">
                                        <a title="Upcoming Cars" href="/upcomingcars">
                                            <span data-lazy="true" class="innerSpan">Upcoming Cars</span>
                                        </a>
                                    </li>
                                    <li data-slug="/latestcars" class="  ">
                                        <a title="New Launches" href="/latestcars">
                                            <span data-lazy="true" class="innerSpan">New Launches</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://tata-aig.cardekho.com/?utm_source=cardekho&amp;utm_medium=website&amp;utm_campaign=navigation"
                                        class="  ">
                                        <a href="#" target="_blank" rel="noopener">
                                            <span data-lazy="true" class="innerSpan">
                                                Car Insurance
                                                <span class='sponsoredmenu'>
                                                    <p>Ad</p>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li data-slug="/compare-cars" class="  ">
                                        <a title="Compare To Buy The Right Cars" href="/compare-cars">
                                            <span data-lazy="true" class="innerSpan">Compare To Buy The Right
                                                Cars</span>
                                        </a>
                                    </li>
                                    <li data-slug="/car-deals-discount-offers.htm" class="  ">
                                        <a title="New Car Offers &amp; Discounts" href="/car-deals-discount-offers.htm">
                                            <span data-lazy="true" class="innerSpan">New Car Offers &Discounts</span>
                                        </a>
                                    </li>
                                    <li data-slug="#" class=" mainMenu ">
                                        <a title="Popular Brands" href="#">
                                            <span data-lazy="true" class="innerSpan">
                                                Popular Brands <i></i>
                                            </span>
                                        </a>
                                        <ul class="subMenuDeep" data-track-section="SubMenu">
                                            <li data-slug="/maruti-suzuki-cars" class="  ">
                                                <a title="Maruti Suzuki Cars India" href="/maruti-suzuki-cars">
                                                    <span data-lazy="true" class="innerSpan">Maruti Suzuki Cars</span>
                                                </a>
                                            </li>
                                            <li data-slug="/cars/Citroen" class="  ">
                                                <a title="Citroen Cars India" href="/cars/Citroen">
                                                    <span data-lazy="true" class="innerSpan">Citroen Cars</span>
                                                </a>
                                            </li>
                                            <li data-slug="/cars/Hyundai" class="  ">
                                                <a title="Hyundai Cars India" href="/cars/Hyundai">
                                                    <span data-lazy="true" class="innerSpan">Hyundai Cars</span>
                                                </a>
                                            </li>
                                            <li data-slug="/cars/Tata" class="  ">
                                                <a title="Tata Cars India" href="/cars/Tata">
                                                    <span data-lazy="true" class="innerSpan">Tata Cars</span>
                                                </a>
                                            </li>
                                            <li data-slug="/cars/Mahindra" class="  ">
                                                <a title="Mahindra Cars India" href="/cars/Mahindra">
                                                    <span data-lazy="true" class="innerSpan">Mahindra Cars</span>
                                                </a>
                                            </li>
                                            <li data-slug="/cars/Kia" class="  ">
                                                <a title="Kia Cars India" href="/cars/Kia">
                                                    <span data-lazy="true" class="innerSpan">Kia Cars</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-slug="/mostpopularcars" class=" mainMenu ">
                                        <a title="Popular Cars" href="/mostpopularcars">
                                            <span data-lazy="true" class="innerSpan">
                                                Popular Cars <i></i>
                                            </span>
                                        </a>
                                        <ul class="subMenuDeep" data-track-section="SubMenu">
                                            <li data-slug="/mahindra/scorpio-n" class="  ">
                                                <a title="Scorpio-N" href="/mahindra/scorpio-n">
                                                    <span data-lazy="true" class="innerSpan">Mahindra Scorpio-N</span>
                                                </a>
                                            </li>
                                            <li data-slug="/maruti/swift" class="  ">
                                                <a title="Swift" href="/maruti/swift">
                                                    <span data-lazy="true" class="innerSpan">Maruti Swift</span>
                                                </a>
                                            </li>
                                            <li data-slug="/citroen/c3" class="  ">
                                                <a title="C3" href="/citroen/c3">
                                                    <span data-lazy="true" class="innerSpan">Citroen C3</span>
                                                </a>
                                            </li>
                                            <li data-slug="/renault/kiger" class="  ">
                                                <a title="Renault Kiger" href="/renault/kiger">
                                                    <span data-lazy="true" class="innerSpan">Renault Kiger</span>
                                                </a>
                                            </li>
                                            <li data-slug="/kia/seltos" class="  ">
                                                <a title="Seltos" href="/kia/seltos">
                                                    <span data-lazy="true" class="innerSpan">Kia Seltos</span>
                                                </a>
                                            </li>
                                            <li data-slug="/renault/triber" class="  ">
                                                <a title="Triber" href="/renault/triber">
                                                    <span data-lazy="true" class="innerSpan">Renault Triber</span>
                                                </a>
                                            </li>
                                            <li data-slug="/skoda/octavia" class="  ">
                                                <a title="Octavia" href="/skoda/octavia">
                                                    <span data-lazy="true" class="innerSpan">Skoda Octavia</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-slug="/cardealers" class="  ">
                                        <a title="Find Car Dealers" href="/cardealers">
                                            <span data-lazy="true" class="innerSpan">Find Car Dealers</span>
                                        </a>
                                    </li>
                                    <li data-slug="/electric-charging-station" class="  new">
                                        <a title="Find EV Charging Stations" href="/electric-charging-station">
                                            <span data-lazy="true" class="innerSpan">Find EV Charging Stations</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.rupyy.com/new-car-loan?utm_source=Cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header"
                                        class="  ">
                                        <a href="https://www.rupyy.com/new-car-loan?utm_source=Cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header"
                                            title="New Car Loan" target="_blank" rel="noopener">
                                            <span data-lazy="true" class="innerSpan">New Car Loan</span>
                                        </a>
                                    </li>
                                    <li data-slug="/car-loan-emi-calculator.htm" class="  ">
                                        <a title="EMI Calculator" href="/car-loan-emi-calculator.htm">
                                            <span data-lazy="true" class="innerSpan">EMI Calculator</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li data-slug="#" class=" mainMenu ">
                                <a href="#" title="Buy &amp; Sell Used cars">
                                    <span data-lazy="true" class="innerSpan">
                                        Buy &Sell Used cars <i></i>
                                    </span>
                                </a>
                                <ul class="subMenu newSubMenu" data-track-section="SubMenu">
                                    <li data-slug="#" class=" mainMenu ">
                                        <a href="#" title="Cars In Your City">
                                            <span data-lazy="true" class="innerSpan">
                                                Cars In Your City <i></i>
                                            </span>
                                        </a>
                                        <ul class="subMenuDeep" data-track-section="SubMenu">
                                            <li data-slug="/used-cars+in+ahmedabad" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+ahmedabad"
                                                    title="Used Cars In Ahmedabad">
                                                    <span data-lazy="true" class="innerSpan">Ahmedabad</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+bangalore" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+bangalore"
                                                    title="Used Cars In Bangalore">
                                                    <span data-lazy="true" class="innerSpan">Bangalore</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+chennai" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+chennai"
                                                    title="Used Cars In Chennai">
                                                    <span data-lazy="true" class="innerSpan">Chennai</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+delhi-ncr" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+delhi-ncr"
                                                    title="Used Cars In Delhi NCR">
                                                    <span data-lazy="true" class="innerSpan">Delhi NCR</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+hyderabad" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+hyderabad"
                                                    title="Used Cars In Hyderabad">
                                                    <span data-lazy="true" class="innerSpan">Hyderabad</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+jaipur" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+jaipur"
                                                    title="Used Cars In Jaipur">
                                                    <span data-lazy="true" class="innerSpan">Jaipur</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+kolkata" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+kolkata"
                                                    title="Used Cars In Kolkata">
                                                    <span data-lazy="true" class="innerSpan">Kolkata</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+mumbai" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+mumbai"
                                                    title="Used Cars In Mumbai">
                                                    <span data-lazy="true" class="innerSpan">Mumbai</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+pune" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+pune"
                                                    title="Used Cars In Pune">
                                                    <span data-lazy="true" class="innerSpan">Pune</span>
                                                </a>
                                            </li>
                                            <li data-slug="/used-cars+in+india?cityPopup=1" class="  ">
                                                <a href="https://www.cardekho.com/used-cars+in+india?cityPopup=1"
                                                    title="Used Cars In More Cities">
                                                    <span data-lazy="true" class="innerSpan">More Cities</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-slug="#" class=" mainMenu ">
                                        <a href="#" title="Sell Car In Your City">
                                            <span data-lazy="true" class="innerSpan">
                                                Sell Car In Your City <i></i>
                                            </span>
                                        </a>
                                        <ul class="subMenuDeep scroll" data-track-section="SubMenu">
                                            <li data-slug="/sell-used-car/agra" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/agra"
                                                    title="Sell Car In Agra">
                                                    <span data-lazy="true" class="innerSpan">Agra</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/ahmedabad" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/ahmedabad"
                                                    title="Sell Car In Ahmedabad">
                                                    <span data-lazy="true" class="innerSpan">Ahmedabad</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/bangalore" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/bangalore"
                                                    title="Sell Car In Bangalore">
                                                    <span data-lazy="true" class="innerSpan">Bangalore</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/chennai" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/chennai"
                                                    title="Sell Car In Chennai">
                                                    <span data-lazy="true" class="innerSpan">Chennai</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/faridabad" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/faridabad"
                                                    title="Sell Car In Faridabad">
                                                    <span data-lazy="true" class="innerSpan">Faridabad</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/ghaziabad" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/ghaziabad"
                                                    title="Sell Car In Ghaziabad">
                                                    <span data-lazy="true" class="innerSpan">Ghaziabad</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/gurugram" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/gurugram"
                                                    title="Sell Car In Gurugram">
                                                    <span data-lazy="true" class="innerSpan">Gurugram</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/hyderabad" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/hyderabad"
                                                    title="Sell Car In Hyderabad">
                                                    <span data-lazy="true" class="innerSpan">Hyderabad</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/jaipur" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/jaipur"
                                                    title="Sell Car In Jaipur">
                                                    <span data-lazy="true" class="innerSpan">Jaipur</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/kolkata" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/kolkata"
                                                    title="Sell Car In Kolkata">
                                                    <span data-lazy="true" class="innerSpan">Kolkata</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/lucknow" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/lucknow"
                                                    title="Sell Car In Lucknow">
                                                    <span data-lazy="true" class="innerSpan">Lucknow</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/ludhiana" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/ludhiana"
                                                    title="Sell Car In Ludhiana">
                                                    <span data-lazy="true" class="innerSpan">Ludhiana</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/mumbai" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/mumbai"
                                                    title="Sell Car In Mumbai">
                                                    <span data-lazy="true" class="innerSpan">Mumbai</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/newdelhi" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/newdelhi"
                                                    title="Sell Car In New Delhi">
                                                    <span data-lazy="true" class="innerSpan">New Delhi</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/noida" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/noida"
                                                    title="Sell Car In Noida">
                                                    <span data-lazy="true" class="innerSpan">Noida</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car/pune" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car/pune"
                                                    title="Sell Car In Pune">
                                                    <span data-lazy="true" class="innerSpan">Pune</span>
                                                </a>
                                            </li>
                                            <li data-slug="/sell-used-car?sellCarCityPopup=1" class="  ">
                                                <a href="https://www.cardekho.com/sell-used-car?sellCarCityPopup=1"
                                                    title="Sell Car In Other Cities">
                                                    <span data-lazy="true" class="innerSpan">Other cities</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li data-slug="/usedCars" class="  ">
                                        <a href="https://www.cardekho.com/usedCars" title="Buy Used Cars">
                                            <span data-lazy="true" class="innerSpan">Buy Used Cars</span>
                                        </a>
                                    </li>
                                    <li data-slug="/sell-used-car" class="  ">
                                        <a href="https://www.cardekho.com/sell-used-car" title="Sell Car">
                                            <span data-lazy="true" class="innerSpan">Sell Car</span>
                                        </a>
                                    </li>
                                    <li data-slug="/used-car-valuation.htm" class="  ">
                                        <a href="https://www.cardekho.com/used-car-valuation.htm"
                                            title="Used Car Valuation">
                                            <span data-lazy="true" class="innerSpan">Used Car Valuation</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.rupyy.com/used-car-loan?utm_source=Cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header"
                                        class="  ">
                                        <a title="Used Car Loan" target="_blank" rel="noopener"
                                            href="https://www.rupyy.com/used-car-loan?utm_source=Cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header">
                                            <span data-lazy="true" class="innerSpan">Used Car Loan</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.rupyy.com/refinance?utm_source=cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header"
                                        class="  ">
                                        <a href="https://www.rupyy.com/refinance?utm_source=cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header"
                                            title="Loan Against Car" target="_blank" rel="noopener">
                                            <span data-lazy="true" class="innerSpan">Loan Against Car</span>
                                        </a>
                                    </li>
                                    <li data-slug="/sell-used-car/scrap-cars" class="  ">
                                        <a href="https://www.cardekho.com/sell-used-car/scrap-cars"
                                            title="Scrap My Car">
                                            <span data-lazy="true" class="innerSpan">Scrap My Car</span>
                                        </a>
                                    </li>
                                    <li data-slug="/used-car-dealers" class="  ">
                                        <a href="/used-car-dealers" title="Used Car Dealers">
                                            <span data-lazy="true" class="innerSpan">Used Car Dealers</span>
                                        </a>
                                    </li>
                                    <li data-slug="/advisory-stories/car-selling-tips.htm" class="  ">
                                        <a href="https://www.cardekho.com/advisory-stories/car-selling-tips.htm"
                                            title="Car Selling Tips">
                                            <span data-lazy="true" class="innerSpan">Car Selling Tips</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.insurancedekho.com/car-insurance?track=carinsurance&amp;utm_source=cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header"
                                        class="  ">
                                        <a href="https://www.insurancedekho.com/car-insurance?track=carinsurance&amp;utm_source=cardekho&amp;utm_medium=internal&amp;utm_campaign=Menu_Header"
                                            title="Car Insurance" target="_blank" rel="noopener">
                                            <span data-lazy="true" class="innerSpan">Car Insurance</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li data-slug="#" class=" mainMenu ">
                                <a title="News, Reviews &amp; Videos" href="#">
                                    <span data-lazy="true" class="innerSpan">
                                        News, Reviews &Videos <i></i>
                                    </span>
                                </a>
                                <ul class="subMenu" data-track-section="SubMenu">
                                    <li data-slug="/india-car-news.htm" class="  ">
                                        <a title="News &amp; Top stories" href="/india-car-news.htm">
                                            <span data-lazy="true" class="innerSpan">News &Top stories</span>
                                        </a>
                                    </li>
                                    <li data-slug="/road-test.htm" class="  ">
                                        <a title="Car Expert Reviews" href="/road-test.htm">
                                            <span data-lazy="true" class="innerSpan">Car Expert Reviews</span>
                                        </a>
                                    </li>
                                    <li data-slug="/car-videos.htm" class="  ">
                                        <a title="Video Reviews" href="/car-videos.htm">
                                            <span data-lazy="true" class="innerSpan">Video Reviews</span>
                                        </a>
                                    </li>
                                    <li data-slug="/web-stories" class="  ">
                                        <a title="Visual Stories" href="/web-stories">
                                            <span data-lazy="true" class="innerSpan">Visual Stories</span>
                                        </a>
                                    </li>
                                    <li data-slug="/car-reviews.htm" class="  ">
                                        <a title="User Reviews" href="/car-reviews.htm">
                                            <span data-lazy="true" class="innerSpan">User Reviews</span>
                                        </a>
                                    </li>
                                    <li data-slug="/car-collection" class="  ">
                                        <a title="Car Collection" href="/car-collection">
                                            <span data-lazy="true" class="innerSpan">Car Collection</span>
                                        </a>
                                    </li>
                                    <li data-slug="/advisory-stories.htm" class="  ">
                                        <a title="Tips &amp; Advice" href="/advisory-stories.htm">
                                            <span data-lazy="true" class="innerSpan">Tips &Advice</span>
                                        </a>
                                    </li>
                                    <li data-slug="/automobile-industry-dashboard" class="  new">
                                        <a title="Car Sales Trends" href="/automobile-industry-dashboard">
                                            <span data-lazy="true" class="innerSpan">Car Sales Trends</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li data-slug="#" class=" mainMenu ">
                                <span>
                                    <span data-lazy="true" class="innerSpan">
                                        Car Services <i></i>
                                    </span>
                                </span>
                                <ul class="subMenu" data-track-section="SubMenu">
                                    <li data-slug="https://www.cardekho.com/services/detail/challan-pay-233.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                        class="  new">
                                        <a href="https://www.cardekho.com/services/detail/challan-pay-233.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                            title="Pay Pending Challan">
                                            <span data-lazy="true" class="innerSpan">Pay Pending Challan</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.cardekho.com/services/connected-cars-5.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                        class="  new">
                                        <a href="https://www.cardekho.com/services/connected-cars-5.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                            title="Connected Cars">
                                            <span data-lazy="true" class="innerSpan">Connected Cars</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.cardekho.com/services/detail/car-service-history-101.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                        class="  new">
                                        <a href="https://www.cardekho.com/services/detail/car-service-history-101.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                            title="Car Service History">
                                            <span data-lazy="true" class="innerSpan">Car Service History</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.cardekho.com/services/detail/vahan-check-202.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                        class="  new">
                                        <a href="https://www.cardekho.com/services/detail/vahan-check-202.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                            title="RTO Records">
                                            <span data-lazy="true" class="innerSpan">RTO Records</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.cardekho.com/services/detail/challan-check-203.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                        class="  new free">
                                        <a href="https://www.cardekho.com/services/detail/challan-check-203.htm?utm_source=website&amp;utm_medium=nav_menu&amp;utm_campaign=service_entry_point"
                                            title="Challan Check">
                                            <span data-lazy="true" class="innerSpan">Challan Check</span>
                                        </a>
                                    </li>
                                    <li data-slug="/services" class="  ">
                                        <a title="View All Services" href="/services">
                                            <span data-lazy="true" class="innerSpan">View All Services</span>
                                        </a>
                                    </li>
                                    <li data-slug="https://www.cardekho.com/emergency-response" class="  new">
                                        <a href="https://www.cardekho.com/emergency-response"
                                            title="Emergency Response">
                                            <span data-lazy="true" class="innerSpan">Emergency Response</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class="linkArea">
                            <i class="icon-cd-locationPin"></i>
                            <span data-selectcity="true">Select City</span>
                            <i data-icon-arrow-bottom="withoutfill"></i>
                        </span>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- ************  Banner Section *************** -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./Images/tata-nexon-car.webp" class="banner" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>2023 Nexon.ev</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./Images/Hyundai-car.webp" class="banner" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p>Hyundai I20 Facelift </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./Images/Personal-Loan.webp" class="banner" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="text-black">Personal Loan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./Images/Car-Service.webp" class="banner" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="text-black">Doorstep Service</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <div class="gsc_container homepage">
        <!--******* Contact From  ***********-->
        <section class="contact-form">
            <h2>Contact Us</h2>
            <form id="car-options-form" action="submit.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email ID:</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="4" required></textarea>

                <input type="submit" value="Submit">
            </form>
        </section>
        <!-- **********  The Most Searched Cars sections ********** -->
        <section data-track-section="" data-track-component="The most searched cars" data-type-autofit="height"
            class="ViewAllCard featuresSection cardViewAll contantVisable shadow24 marginBottom20 clearfix"
            data-type-tab="height" data-section="carsByBodyType">
            <h2>The most searched cars</h2>
            <div class="">
                <div class="gsc_ta_scroll  gsc_ta_scroll_move ">
                    <ul class="gsc-ta-clickWrap " data-track-section="tab">
                        <li title="SUV" class="gsc-ta-active">SUV</li>
                        <li title="Hatchback" class="">Hatchback</li>
                        <li title="Sedan" class="">Sedan</li>
                        <li title="MUV" class="">MUV</li>
                        <li title="Luxury" class="">Luxury</li>
                    </ul>
                </div>
                <div class="contentHold gsc_row  ">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <ul class="class=" clearfix gsc_main overXvisible"">
                                    <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                        <div class="card shadowWPadding posR ">
                                            <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                                style="min-height:auto">
                                                <div class="imageTransition" data-autofit="true">
                                                    <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volvo/C40-Recharge/9224/1693842924520/front-left-side-47.jpg?tr=w-264"
                                                        class="" alt="...">
                                                </div>

                                            </div>
                                            <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                                <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                    Nexon</a>
                                                <div class="price">
                                                    <span class="icon-cd_R">Rs</span>
                                                    8 - 14.60 Lakh<sup>*</sup>
                                                </div>
                                                <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                    <div class="primaryButton btn-dcb">Check September Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                        <div class="card shadowWPadding posR ">
                                            <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                                style="min-height:auto">
                                                <div class="imageTransition" data-autofit="true">
                                                    <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volvo/C40-Recharge/9224/1693842924520/front-left-side-47.jpg?tr=w-264"
                                                        class="" alt="...">
                                                </div>

                                            </div>
                                            <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                                <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                    Nexon</a>
                                                <div class="price">
                                                    <span class="icon-cd_R">Rs</span>
                                                    8 - 14.60 Lakh<sup>*</sup>
                                                </div>
                                                <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                    <div class="primaryButton btn-dcb">Check September Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                        <div class="card shadowWPadding posR ">
                                            <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                                style="min-height:auto">
                                                <div class="imageTransition" data-autofit="true">
                                                    <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volvo/C40-Recharge/9224/1693842924520/front-left-side-47.jpg?tr=w-264"
                                                        class="" alt="...">
                                                </div>

                                            </div>
                                            <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                                <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                    Nexon</a>
                                                <div class="price">
                                                    <span class="icon-cd_R">Rs</span>
                                                    8 - 14.60 Lakh<sup>*</sup>
                                                </div>
                                                <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                    <div class="primaryButton btn-dcb">Check September Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                        <div class="card shadowWPadding posR ">
                                            <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                                style="min-height:auto">
                                                <div class="imageTransition" data-autofit="true">
                                                    <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volvo/C40-Recharge/9224/1693842924520/front-left-side-47.jpg?tr=w-264"
                                                        class="" alt="...">
                                                </div>

                                            </div>
                                            <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                                <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                    Nexon</a>
                                                <div class="price">
                                                    <span class="icon-cd_R">Rs</span>
                                                    8 - 14.60 Lakh<sup>*</sup>
                                                </div>
                                                <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                    <div class="primaryButton btn-dcb">Check September Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                        <div class="card shadowWPadding posR ">
                                            <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                                style="min-height:auto">
                                                <div class="imageTransition" data-autofit="true">
                                                    <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volvo/C40-Recharge/9224/1693842924520/front-left-side-47.jpg?tr=w-264"
                                                        class="" alt="...">
                                                </div>

                                            </div>
                                            <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                                <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                    Nexon</a>
                                                <div class="price">
                                                    <span class="icon-cd_R">Rs</span>
                                                    8 - 14.60 Lakh<sup>*</sup>
                                                </div>
                                                <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                    <div class="primaryButton btn-dcb">Check September Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                        <div class="card shadowWPadding posR ">
                                            <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                                style="min-height:auto">
                                                <div class="imageTransition" data-autofit="true">
                                                    <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volvo/C40-Recharge/9224/1693842924520/front-left-side-47.jpg?tr=w-264"
                                                        class="" alt="...">
                                                </div>

                                            </div>
                                            <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                                <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                    Nexon</a>
                                                <div class="price">
                                                    <span class="icon-cd_R">Rs</span>
                                                    8 - 14.60 Lakh<sup>*</sup>
                                                </div>
                                                <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                    <div class="primaryButton btn-dcb">Check September Offers</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>


                            </div>


                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div data-view-index="0" class="BottomLinkViewAll">
                <a data-before="View All" class="link" title="Latest Cars" href="/latestcars">View All SUV Cars</a>
            </div>
        </section>
        <section data-track-section="" data-track-component="Latest Cars" data-type-autofit="height"
        class="ViewAllCard featuresSection cardViewAll contantVisable shadow24 marginBottom20 clearfix"
        data-type-tab="" data-section="latestcars">
        <h2>Latest Cars</h2>
        <div class="">
            <div class="contentHold gsc_row  ">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <ul class="class=" clearfix gsc_main overXvisible"">
                                <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                    <div class="card shadowWPadding posR ">
                                        <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                            style="min-height:auto">
                                            <div class="imageTransition" data-autofit="true">
                                                <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Aston-Martin/DB12/10185/1685084803601/front-left-side-47.jpg?tr=w-264"
                                                    class="" alt="...">
                                            </div>

                                        </div>
                                        <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                            <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                Nexon</a>
                                            <div class="price">
                                                <span class="icon-cd_R">Rs</span>
                                                8 - 14.60 Lakh<sup>*</sup>
                                            </div>
                                            <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                <div class="primaryButton btn-dcb">Check September Offers</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                    <div class="card shadowWPadding posR ">
                                        <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                            style="min-height:auto">
                                            <div class="imageTransition" data-autofit="true">
                                                <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Aston-Martin/DB12/10185/1685084803601/front-left-side-47.jpg?tr=w-264"
                                                    class="" alt="...">
                                            </div>

                                        </div>
                                        <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                            <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                Nexon</a>
                                            <div class="price">
                                                <span class="icon-cd_R">Rs</span>
                                                8 - 14.60 Lakh<sup>*</sup>
                                            </div>
                                            <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                <div class="primaryButton btn-dcb">Check September Offers</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                    <div class="card shadowWPadding posR ">
                                        <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                            style="min-height:auto">
                                            <div class="imageTransition" data-autofit="true">
                                                <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Aston-Martin/DB12/10185/1685084803601/front-left-side-47.jpg?tr=w-264"
                                                class="" alt="...">
                                            </div>

                                        </div>
                                        <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                            <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                Nexon</a>
                                            <div class="price">
                                                <span class="icon-cd_R">Rs</span>
                                                8 - 14.60 Lakh<sup>*</sup>
                                            </div>
                                            <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                <div class="primaryButton btn-dcb">Check September Offers</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                    <div class="card shadowWPadding posR ">
                                        <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                            style="min-height:auto">
                                            <div class="imageTransition" data-autofit="true">
                                                <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Aston-Martin/DB12/10185/1685084803601/front-left-side-47.jpg?tr=w-264"
                                                class="" alt="...">
                                            </div>

                                        </div>
                                        <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                            <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                Nexon</a>
                                            <div class="price">
                                                <span class="icon-cd_R">Rs</span>
                                                8 - 14.60 Lakh<sup>*</sup>
                                            </div>
                                            <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                <div class="primaryButton btn-dcb">Check September Offers</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                    <div class="card shadowWPadding posR ">
                                        <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                            style="min-height:auto">
                                            <div class="imageTransition" data-autofit="true">
                                                <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Aston-Martin/DB12/10185/1685084803601/front-left-side-47.jpg?tr=w-264"
                                                class="" alt="...">
                                            </div>

                                        </div>
                                        <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                            <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                Nexon</a>
                                            <div class="price">
                                                <span class="icon-cd_R">Rs</span>
                                                8 - 14.60 Lakh<sup>*</sup>
                                            </div>
                                            <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                <div class="primaryButton btn-dcb">Check September Offers</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="gsc_col-xs-12 gsc_col-sm-5 gsc_col-md-3">
                                    <div class="card shadowWPadding posR ">
                                        <div class="gsc_col-xs-12 paddingnone imgTopRound hover"
                                            style="min-height:auto">
                                            <div class="imageTransition" data-autofit="true">
                                                <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Aston-Martin/DB12/10185/1685084803601/front-left-side-47.jpg?tr=w-264"
                                                class="" alt="...">
                                            </div>

                                        </div>
                                        <div class="carousel-caption gsc_col-xs-12 holder truncate">
                                            <a title="Tata Nexon" class="title " href="/tata/nexon">Tata
                                                Nexon</a>
                                            <div class="price">
                                                <span class="icon-cd_R">Rs</span>
                                                8 - 14.60 Lakh<sup>*</sup>
                                            </div>
                                            <div class="BtnFull buttonHolder buttonHolder virtualNumberBtn ">
                                                <div class="primaryButton btn-dcb">Check September Offers</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>


                        </div>


                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <div data-view-index="0" class="BottomLinkViewAll">
            <a data-before="View All" class="link" title="Latest Cars" href="/latestcars">Latest Cars</a>
        </div>
    </section>
    </div>

   
    <!-- ****   Latest Car Section ************ -->
    <div>
      
    </div>

    </div>


    <!-- **************  Footer  Completed **************** -->
    <div class="footer_Start">
        <footer class="footer ">
            <!-- Footer Site Logo -->
            <div class="footer_Trafic gsc_container">
                <div class="gsc_row">
                    <div class="gsc_col-sm-3 ">
                        <span class="icon-india-no">

                        </span>
                        <div class="trafic_col">
                            <div class="title">India’s #1</div>
                            <p>Largest Auto portal</p>
                        </div>
                    </div>
                    <div class="gsc_col-sm-3 ">
                        <span class="icon-car-sold">

                        </span>
                        <div class="trafic_col ">
                            <div class="title">Car Sold</div>
                            <p>Every 4 minute</p>
                        </div>
                    </div>
                    <div class="gsc_col-sm-3 ">
                        <span class="icon-offers">

                        </span>
                        <div class="trafic_col">
                            <div class="title">Offers</div>
                            <p>Stay updated pay less</p>
                        </div>
                    </div>
                    <div class="gsc_col-sm-3 ">
                        <span class="icon-compare-car">

                        </span>
                        <div class="trafic_col">
                            <div class="title">Compare</div>
                            <p>Decode the right car</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Nav -->
            <nav class="footer_Nav">
                <div class="gsc_container">
                    <div class="gsc_row">
                        <div class="gsc_col-sm-3">
                            <div class="title">About CarDekho</div>
                            <ul>
                                <li class="undefined">
                                    <span>About</span>
                                </li>
                                <li class="undefined">
                                    <span>Careers With Us</span>
                                </li>
                                <li class="undefined">
                                    <span>Terms & Condition</span>
                                </li>
                                <li class="undefined">
                                    <span>Corporate Policies</span>
                                </li>
                                <li class="undefined">
                                    <span>Investors</span>
                                </li>
                                <li class="undefined">
                                    <span>FAQs</span>
                                </li>

                            </ul>
                        </div>
                        <div class="gsc_col-sm-3">
                            <div class="title">Connect With Us</div>
                            <ul>
                                <li class="undefined "><span>Feedback</span></li>
                                <li class="undefined "><span>Contact Us</span></li>
                                <li class="undefined "><span>Advertise with Us</span></li>
                            </ul>
                        </div>
                        <div class="gsc_col-sm-3">
                            <div class="title">Others</div>
                            <ul>
                                <li class="undefined "><span>Health Insurance</span></li>
                                <li class="undefined "> <span>Term Insurance</span></li>
                                <li class="undefined "><span>Life Insurance </span></li>
                                <li class="undefined "><span>Crack-ED </span></li>
                                <li class="undefined "><span>Personal loan </span></li>
                                <li class="undefined "><span>TyreDekho </span></li>
                                <li class="undefined "><span> BatteryDekho</span></li>
                                <li class="undefined "><span>Girnar Vision Fund </span></li>
                            </ul>
                        </div>
                        <div class="gsc_col-sm-3">
                            <div class="title">EXPERIENCE CARDEKHO APP</div>
                            <ul class="gsc_row appholder">
                                <li class="gsc_col-sm-6 ">
                                    <img src="https://stimg.cardekho.com/pwa/img/appstore.png">
                                </li>
                                <li class="gsc_col-sm-6 hidegpbtn">
                                    <img alt="Download CarDekho’s Free Android App"
                                        src="https://stimg.cardekho.com/pwa/img/playstore.png">
                                </li>
                            </ul>
                        </div>
                        <div class="innternal_Domain gsc_col-sm-3">
                            <div class="title">CarDekho Group Ventures</div>
                            <ul>
                                <li class="gsc_col-xs-6 gsc_col-sm-6">
                                    <img alt="BikeDekho" src="https://stimg.cardekho.com/pwa/img/footer-BdLogo.svg"
                                        class="imageTransition active">
                                </li>
                                <li class="gsc_col-xs-6 gsc_col-sm-6">
                                    <img alt="Rupyy" src="https://stimg.cardekho.com/pwa/img/footer-rupyyLogo.svg"
                                        class="imageTransition active">
                                </li>
                                <li class="gsc_col-xs-6 gsc_col-sm-6">
                                    <img alt="ZigWheels" src="https://stimg.cardekho.com/pwa/img/footer-zwLogo.svg"
                                        class="imageTransition active">
                                </li>
                                <li class="gsc_col-xs-6 gsc_col-sm-6">
                                    <img Insurance" alt="Car Insurance"
                                        src="https://stimg.cardekho.com/pwa/img/footer-IdLogo.svg"
                                        class="imageTransition active">
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- Footer Bottom -->
            <div class="footerbottom">
                <div class="gsc_container">
                    <div class="gsc_row">
                        <div class="gsc_col-xs-4">
                            <p class="copyRight">© 2023 Girnar Software Pvt. Ltd.</p>
                        </div>
                        <div class="gsc_col-xs-8">
                            <div class="SocialIcons">
                                <div class="title">Connect:</div>
                                <ul>
                                    <li><span class="icon-cd-fb-icon"></span></li>
                                    <li><span class="icon-cd_twitter"></span></li>
                                    <li><span class="icon-youtube"></span></li>
                                    <li><span class="icon-instagram"></span></li>
                                    <li><span class="icon-linkedin"></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>