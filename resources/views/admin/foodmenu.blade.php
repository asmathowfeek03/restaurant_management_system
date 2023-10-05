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

     <!-- Right side bar -->
     <div class="main-panel">
       <div class="content-wrapper">
         <div class="row">
           <div class="col-sm-12">
             <div class="home-tab">
         


                              <div class="table-responsive  mt-1">
                              <h1 style="color:blue; margin-bottom:30px; text-align: center; font-weight:bold;font-size:20px">Manage Cake Items</h1>
                            
                                 <table class="table select-table" >
                                   <thead>
                                     <tr>
                                       <th style="font-size:15px; text-align:center;color:black;">Food Name</th>
                                       <th style="font-size:15px; text-align:center;color:black;" >Price</th>
                                       <th style="font-size:15px; text-align:center;color:black;">Description</th>
                                       <th style="font-size:15px; text-align:center;color:black;">Image</th>
                                       <th style="font-size:15px; text-align:center;color:black;">Delete</th>
                                       <th style="font-size:15px; text-align:center;color:black;">Edit </th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                   
                                   @foreach($data as $data)
                                     <tr>
                                       <td style="font-size:14px; text-align:center;color:black;">{{$data->title}}</td>
                                       
                                           
                                       <td style="font-size:14px; text-align:center;color:red;font-weight:bold">{{$data->price}}</td>
                                     
                                       <td style="font-size:14px; text-align:center;color:black;">{{$data->description}}</td>

                                       <td style="font-size:14px; text-align:center;color:black;"><img src="/foodimage/{{$data->image}}"></td>
                                       <td style="font-size:30px; text-align:center;color:black;"><div class="badge badge-opacity-warning" style="width:100px "><a href="{{url('/deletemenu',$data->id)}}"  style="color:red;font-size:14px;font-weight:bold">DELETE</a></div></td>
                                     
                                       <td style="font-size:30px; text-align:center;color:black;"><div class="badge badge-opacity-success" style="width:100px "><a href="{{url('/updateview',$data->id)}}" style="color:green;font-size:14px;font-weight:bold">EDIT</a></div></td>
                                    </tr>
                                    @endforeach
                                    
                                   </tbody>

                                 </table>
                               </div> 
                                <br><br><br><br> <br><br><br><br>
            
                               <div class="table-responsive  mt-1">
                                  <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data"  style="  text-align: center">
                                    @csrf
                                   
                                    <h1 style="color:blue; margin-bottom:40px; text-align: center; font-weight:bold;font-size:20px">Add New Delights to the Cake Items</h1>
                                    
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Title<label> 
                                            <input style="color:blue; margin-left:90px; width:300px" type="text" name="title" placeholder="Food Name" required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:30px">Price<label>
                                            <input style="color:blue; margin-left:85px; width:300px" type="text" name="price" placeholder=" Price" required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:30px;margin-left:30px">Image<label>
                                            <input style="margin-left:79px " type="file" name="image"  required>
                                    </div>
                                    <div>
                                        <label style="color:black; margin-bottom:60px">Description<label>
                                            <input style="color:blue; margin-left:40px; width:300px" type="text" name="description" placeholder="Food Description"  required>
                                    </div>
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

