<div class="left-side-menu"> 
    <a href="{{WEBSITE_URL}}" class="logo text-center logo-light"> 
        <span class="logo-lg"> <img src="{{IMAGE_URL}}cs_logo-white.svg" alt="" height="50"> </span> 
        <span class="logo-sm"> <img src="{{IMAGE_URL}}cs_logo-white-sm.svg" alt="" height="50"> </span> 
    </a> 
    <a href="{{WEBSITE_URL}}" class="logo text-center logo-dark"> 
        <span class="logo-lg"> <img src="{{IMAGE_URL}}cs_logo-white.svg" alt="" height="50"> </span> 
        <span class="logo-sm"> <img src="{{IMAGE_URL}}cs_logo-white-sm.svg" alt="" height="50"> </span> 
    </a>
    <div class="h-100" id="left-side-menu-container" data-simplebar>
        <ul class="metismenu side-nav mt-3">
            <!--  <li class="side-nav-title side-nav-item">Navigation</li>-->
            <li class="side-nav-item"> <a href="{{WEBSITE_URL}}" class="side-nav-link"> <i class="uil-home-alt"></i> <span> Dashboards </span> </a> </li>
            <li class="side-nav-item"> <a href="#" class="side-nav-link"> <i class="uil-envelope"></i><span class="badge badge-danger float-right">4</span> <span> Messages </span> </a> </li>
            <li class="side-nav-item"> 
                <a href="javascript: void(0);" class="side-nav-link"> <i class="uil-users-alt"></i> <span> Clients </span> <span class="menu-arrow"></span> </a>
                <ul class="side-nav-second-level" aria-expanded="false">
                    <li> <a href="{{route('client.index')}}">All Client</a> </li>
                    <li> <a href="{{route('client.create')}}">Add Client</a> </li>
                </ul>
            </li>
            <li class="side-nav-item"> <a href="#" class="side-nav-link"> <i class="uil-chart-down"></i> <span> Reports </span> </a> </li>
            <li class="side-nav-item"> <a href="#" class="side-nav-link"> <i class="uil-document"></i> <span> Company Documents </span> </a> </li>
            <li class="side-nav-item"> <a href="#" class="side-nav-link"> <i class="uil-check-circle"></i> <span> Compliance </span> </a> </li>
        </ul>
        <div class="clearfix"></div>
	
    </div>
	
</div>