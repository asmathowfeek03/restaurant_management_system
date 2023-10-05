<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
 
@include("admin.admincss");

 
</head>
<body>
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
<div class="container-fluid page-body-wrapper">


     <!-- left side bar -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar"  style="margin-right:20px;background-color:white" >
       <ul class="nav"   style="position:fixed">

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

     <!-- Right side bar -->
     <div class="main-panel" style="">
       <div class="content-wrapper">
         <div class="row">
           <div class="col-sm-12">
             <div class="home-tab">
         
                             <div class="table-responsive  mt-1">
                                  <h1 style="color:blue; margin-bottom:40px; text-align: center; font-weight:bold;font-size:20px">Manage Your User list</h1>
                                 <table class="table select-table" >
                                   <thead>
                                     <tr>
                                       <th style="font-size:15px; text-align:center;color:black;">Name</th>
                                       <th style="font-size:15px; text-align:center;color:black;" >Email</th>
                                       <th style="font-size:15px; text-align:center;color:black;">Action</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                    @foreach($data as $data )
                                     <tr>
                                       <td style="font-size:14px; text-align:center;color:black;">{{$data->name}}</td>
                                       
                                           
                                       <td style="font-size:14px; text-align:center;color:black;">{{$data->email}}</td>
                                      @if($data->usertype =="0")
                                       
                                       <td style="font-size:30px; text-align:center;color:black;"><div class="badge badge-opacity-warning" style="width:100px "><a href="{{url('/deleteuser',$data->id)}}"  style="color:red;font-size:14px;font-weight:bold">DELETE</a></div></td>
                                     @else
                                     <td style="font-size:30px; text-align:center;color:black;"><div class="badge badge-opacity-success" style="width:130px "><a href="" style="color:green;font-size:14px;font-weight:bold">NOT ALLOWED </a></div></td>
                                    </tr>
                                     @endif
                                     @endforeach
                                    

                                   </tbody>

                                 </table>
                               </div>
                               <br><br><br><br><br><br><br><br>  
                               
                               <div class="table-responsive  mt-1">
                                  <form action="{{url('/adduser')}}" method="POST" enctype="multipart/form-data"  style="  text-align: center">
                                    @csrf
                                   
                                    <h1 style="color:blue; margin-bottom:40px; text-align: center; font-weight:bold;font-size:20px">Add New Users</h1>
                                    
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Name<label> 
                                            <input style="color:blue; margin-left:90px; width:300px" type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Email<label>
                                            <input style="color:blue; margin-left:95px; width:300px" type="text" name="email" placeholder="Email" required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:60px">User Type<label>
                                            <input style="color:blue; margin-left:70px; width:300px" type="number" name="usertype" placeholder="User Type"   required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Phone Number<label>
                                            <input style="color:blue; margin-left:30px; width:300px" type="tel" name="phone" placeholder="Phone Number" required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Address<label>
                                            <input style="color:blue; margin-left:85px; width:300px" type="text" name="address" placeholder="Address" required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Date of Birth<label>
                                            <input style="color:blue; margin-left:50px; width:300px" type="date" name="dob"  required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Password<label>
                                            <input style="color:blue; margin-left:75px; width:300px" type="password" name="password" placeholder="Password" required>
                                    </div><br><br><br> 
                                    <div class="badge badge-opacity-success" style="width:150px; height:30px;margin-bottom:30px;">
                        
                                            <input style="color:blue;font-size:15px;font-weight:bold" type="submit" value="Upload">
                                    </div>
                                  
                                  </form>
                                </div>




                             </div>
                           </div>
                         </div>
                       </div>

                       
       <!-- content-wrapper ends -->
       <!-- partial:partials/_footer.html -->
       <footer class="footer">
         <div class="d-sm-flex justify-content-center justify-content-sm-between">
           <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Chow Restaurant</span>
           <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
         </div>
       </footer>
       <!-- partial -->
     </div>
     <!-- main-panel ends -->
   </div>
   <!-- page-body-wrapper ends -->
 </div>

</div>

  
@include("admin.adminscript");
 
</body>

</html>


