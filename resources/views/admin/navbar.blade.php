<div class="container-scroller">

 <!-- partial:partials/_navbar.html -->
 <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row" style="height:150px;background-color:white"> 
      
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start" style="height:150px;background-color:white">
          
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>

          <div>
            <a class="navbar-brand brand-logo" >
              <img src="admin/images/logo.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" >
              <img src="admin/images/logo-mini.svg" alt="logo" />
            </a>
          </div>
        </div>


        <li class="nav-item">
         <x-app-layout>
         </x-app-layout>
        </li> 
</nav>





 <!-- partial -->
 <div class="container-fluid page-body-wrapper" >


      <!-- left side bar -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar"  style="margin-right:20px;background-color:white" >
        <ul class="nav" style="position:fixed">

          <li class="nav-item" style="margin-top:10px; margin-bottom:20px;">
            <a class="nav-link" href="{{url('/users')}}">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>


          <li class="nav-item nav-category"> Menu</li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/breakfastmenu')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Breakfast</span>
            </a>
          </li>

        <li class="nav-item">
            <a class="nav-link" href="{{url('/lunchmenu')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Lunch</span>
            </a>
          </li>

         <li class="nav-item">
            <a class="nav-link" href="{{url('/dinnermenu')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Dinner</span>
            </a>
          </li>

          <li class="nav-item" style="margin-bottom:20px;">
            <a class="nav-link" href="{{url('/foodmenu')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Cake Items</span>
            </a>
          </li>


          <li class="nav-item" style="margin-bottom:20px;">
            <a class="nav-link" href="{{url('/viewchef')}}">
              <i class="menu-icon mdi mdi-layers-outline"></i>
              <span class="menu-title">Chefs</span>
            </a>
          </li>

          <li class="nav-item" style="margin-bottom:20px;">
            <a class="nav-link" href="{{url('/viewreservation')}}">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Reservation</span>
            </a>
          </li>

        </ul>
      </nav>
  </div>
</div>

   