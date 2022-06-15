<nav class="my-nav navbar navbar-expand-md navbar-light bg-light sticky-top" id="navbar">

    <a href="<?= base_url()?>" class="navbar-brand"><img src="assets/img/logo.png"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="collapse_target">
        <ul class="navbar-nav ml-auto">
            <li class="f-nav-items ">
                <a href="home" >Home</a>
            </li>
            <li class="f-nav-items">
                <a href="news">News</a>
            </li>
            <li class="f-nav-items">
                <a href="about-us" >About</a>
            </li>
            <li class="dropdown f-nav-items-dropdown">
                <a class="dropdown-toggle f-items-x" data-toggle="dropdown"
                     role="button" style="cursor: pointer;">Services</a>
                <div class="dropdown-menu animate slideIn" style="margin: 0;">
                    <a class="dropdown-item" href="sea-air-service">Sea Air Service</a>
                    <a class="dropdown-item" href="air-freight-service">Air Freight Service</a>
                    <a class="dropdown-item" href="sea-freight-service">Sea Freight Service</a>
                    <a class="dropdown-item" href="ad-hoc-charter-service">Ad Hoc Charter Service</a>
                    <a class="dropdown-item" href="road-transport">Road Transport</a>
                    <a class="dropdown-item" href="custom-clearance">Custom Clearance</a>
                    <a class="dropdown-item" href="warehousing">Warehousing</a>
                </div>
            </li>
            <li class="dropdown f-nav-items-dropdown">
                <a class="dropdown-toggle f-items-x" data-toggle="dropdown" href="#" role="button">Schedule</a>
                <div class="dropdown-menu animate slideIn" style="margin: 0;">
                    <a class="dropdown-item" href="schedule-query">Schedule Query</a>
                    <a class="dropdown-item" href="rate-request">Rate Request</a>
                </div>
            </li>
           
            <li class="f-nav-items">
                <a href="offices">Offices</a>
            </li>
            <li class="f-nav-items">
                <a href="agents">Agents</a>
            </li>
            <li class="f-nav-items">
                <a href="contact-us">Contact</a>
            </li>
            <li class="f-nav-items">
                <a href="track-and-trace">Track & Trace</a>
            </li>
       
        </ul>
    </div>
</nav>
