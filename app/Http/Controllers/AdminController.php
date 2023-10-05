<?php

namespace App\Http\Controllers;

// Import the Auth facade for user authentication
use Illuminate\Support\Facades\Auth;

// Import the Request class for handling HTTP requests
use Illuminate\Http\Request;

// Import the models for working with data
use App\Models\User;
use App\Models\Food;
use App\Models\Breakfast;
use App\Models\Lunch;
use App\Models\Dinner;
use App\Models\Reservation;
use App\Models\Foodchef;



class AdminController extends Controller{


   
    public function user(){
        // Check whether the user is authenticated.
        if(Auth::id() )
        {
            // Get the user type of the authenticated user.
            $usertype= Auth::user()->usertype;

            // Check if the user type is '1'(admin).
            if($usertype=='1'){
                // Retrieve all users and pass the data to the "admin.users" view.
                $data=user::all();
                return view("admin.users",compact("data"));
            }
            else{
                // Return a 403 Forbidden error for unauthorized access.
                return abort(403,'Unauthorized Access');
            }
        }
        else{
            // Redirect the user to the login page if not authenticated.
            return redirect('login');
        } 
    }



    // Adding a new user to the database.
    public function adduser(Request $request){

        $data = new user;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->usertype=$request->usertype;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->dob=$request->dob;
        $data->password=$request->password;
        

        // Save the data to the database
        $data->save();

        // Redirect or respond as needed
        return redirect()->back();
    } 



    // Deletes a user with the given ID.
    public function deleteuser($id){

        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }







    // Retrieves and displays a list of cake items if the admin is authenticated.
    public function foodmenu()
    {
        if(Auth::id())
        {
            // Get the user type of the authenticated user.
            $usertype= Auth::user()->usertype;

            // Check if the user type is '1'(admin).
            if($usertype=='1'){
                $data = food::all();
                return view("admin.foodmenu",compact("data"));
            }
            else{
                // Return a 403 Forbidden error for unauthorized access.
                return abort(403,'Unauthorized Access');
            }
        }
        else{
            return redirect('login');
        } 
    }



    // Retrieves and displays a list of breakfast menu items if the admin is authenticated.
    public function breakfastmenu()
    {
        if(Auth::id())
        {
            // Get the user type of the authenticated user.
            $usertype= Auth::user()->usertype;

            // Check if the user type is '1'(admin).
            if($usertype=='1'){
                $data = breakfast::all();
                return view("admin.breakfastmenu",compact("data"));
            }
            else{
                // Return a 403 Forbidden error for unauthorized access.
                return abort(403,'Unauthorized Access');
            }
        }
        else{
            return redirect('login');
        } 
    }



    // Retrieves and displays a list of breakfast menu items if the admin is authenticated.
    public function lunchmenu()
    {
        if(Auth::id())
        {
            // Get the user type of the authenticated user.
            $usertype= Auth::user()->usertype;

            // Check if the user type is '1'(admin).
            if($usertype=='1'){
                $data = lunch::all();
                return view("admin.lunchmenu",compact("data"));
            }
            else{
                // Return a 403 Forbidden error for unauthorized access.
                return abort(403,'Unauthorized Access');
            }
        }
        else{
            return redirect('login');
        } 
    }



     // Retrieves and displays a list of breakfast menu items if the admin is authenticated.
     public function dinnermenu()
     {
        if(Auth::id())
        {
            // Get the user type of the authenticated user.
            $usertype= Auth::user()->usertype;

            // Check if the user type is '1'(admin).
            if($usertype=='1'){
                $data = dinner::all();
                return view("admin.dinnermenu",compact("data"));
            }
            else{
                // Return a 403 Forbidden error for unauthorized access.
                return abort(403,'Unauthorized Access');
            }
        }
        else{
            return redirect('login');
        } 
     }






    
    // Uploads a new cake item to the database.
    public function upload(Request $request){


        // Create a new instance of the 'Food' model
        $data = new food;

        // Get the uploaded file
        $image = $request->file('image');
    
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $image = $request->file('image');
    
            // Generate a unique filename based on the current timestamp and file extension
            $imagename = time() . '.' . $image->getClientOriginalExtension();
    
            // Move the uploaded file to a storage location
            $image->move('foodimage', $imagename);
    
            // Assign values to the model properties
            $data->image = $imagename;
        }
        
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        

        // Save the data to the database
        $data->save();

        // Redirect or respond as needed
        return redirect()->back();

    } 


    // Uploads a new breakfast menu item to the database.
    public function uploadbreakfast(Request $request){

    // Create a new instance of the 'Breakfast' model
    $data = new breakfast;

    // Get the uploaded file
    $image = $request->file('bimage');

    if ($request->hasFile('bimage')) {
        // Get the uploaded file
        $image = $request->file('bimage');

        // Generate a unique filename based on the current timestamp and file extension
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded file to a storage location
        $image->move('breakfastimage', $imagename);

        // Assign values to the model properties
        $data->bimage = $imagename;
    }
    
    $data->btitle=$request->btitle;
    $data->bprice=$request->bprice;
    $data->bdescription=$request->bdescription;
    

    // Save the data to the database
    $data->save();

    // Redirect or respond as needed
    return redirect()->back();

} 



// Uploads a new lunch menu item to the database.
public function uploadlunch(Request $request){


    // Create a new instance of the 'Lunch' model
    $data = new lunch;

    // Get the uploaded file
    $image = $request->file('limage');

    if ($request->hasFile('limage')) {
        // Get the uploaded file
        $image = $request->file('limage');

        // Generate a unique filename based on the current timestamp and file extension
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded file to a storage location
        $image->move('lunchimage', $imagename);

        // Assign values to the model properties
        $data->limage = $imagename;
    }
    
    $data->ltitle=$request->ltitle;
    $data->lprice=$request->lprice;
    $data->ldescription=$request->ldescription;
    

    // Save the data to the database
    $data->save();

    // Redirect or respond as needed
    return redirect()->back();
} 



// Uploads a new dinner menu item to the database.
public function uploaddinner(Request $request){


    // Create a new instance of the 'Dinner' model
    $data = new dinner;

    // Get the uploaded file
    $image = $request->file('dimage');

    if ($request->hasFile('dimage')) {
        // Get the uploaded file
        $image = $request->file('dimage');

        // Generate a unique filename based on the current timestamp and file extension
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded file to a storage location
        $image->move('dinnerimage', $imagename);

        // Assign values to the model properties
        $data->dimage = $imagename;
    }
    
    $data->dtitle=$request->dtitle;
    $data->dprice=$request->dprice;
    $data->ddescription=$request->ddescription;
    

    // Save the data to the database
    $data->save();

    // Redirect or respond as needed
    return redirect()->back();

} 






    // Deletes a  cake item with the given ID.
    public function deletemenu($id){

        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    // Deletes a breakfast menu item with the given ID.
    public function deletebmenu($id){

        $data=breakfast::find($id);
        $data->delete();
        return redirect()->back();
    }

    // Deletes a lunch menu item with the given ID.
    public function deletelmenu($id){

        $data=lunch::find($id);
        $data->delete();
        return redirect()->back();
    }

    // Deletes a dinner menu item with the given ID.
    public function deletedmenu($id){

        $data=dinner::find($id);
        $data->delete();
        return redirect()->back();
    }




    



    // Displays a form to edit a specific cake item.
    public function updateview($id){

    $data=food::find($id);
    return view("admin.updateview",compact("data"));
    }


    // Displays a form to edit a specific breakfast menu.
    public function updatebview($id){

    $data=breakfast::find($id);
    return view("admin.updatebview",compact("data"));
    }    


    // Displays a form to edit a specific lunch menu.
    public function updatelview($id){

    $data=lunch::find($id);
    return view("admin.updatelview",compact("data"));
    }    


    // Displays a form to edit a specific dinner menu.
    public function updatedview($id){

    $data=dinner::find($id);
    return view("admin.updatedview",compact("data"));
    } 






    // Updates a cake item with the data from the form.
    public function update(Request $request,$id){

        $data=food::find($id);
         // Get the uploaded file
         $image = $request->file('image');
    
         if ($request->hasFile('image')) {
             // Get the uploaded file
             $image = $request->file('image');
     
             // Generate a unique filename based on the current timestamp and file extension
             $imagename = time() . '.' . $image->getClientOriginalExtension();
     
             // Move the uploaded file to a storage location
             $image->move('foodimage', $imagename);
     
             // Assign values to the model properties
             $data->image = $imagename;
         }
       
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        
        $data->save();

        return redirect()->back();

    
    }


    // Updates a breakfast menu item with the data from the form.
    public function updateb(Request $request,$id){

        $data=breakfast::find($id);
        // Get the uploaded file
        $image = $request->file('bimage');
    
        if ($request->hasFile('bimage')) {
            // Get the uploaded file
            $image = $request->file('bimage');
    
            // Generate a unique filename based on the current timestamp and file extension
            $imagename = time() . '.' . $image->getClientOriginalExtension();
    
            // Move the uploaded file to a storage location
            $image->move('breakfastimage', $imagename);
    
            // Assign values to the model properties
            $data->bimage = $imagename;
        }
        $data->btitle=$request->btitle;
        $data->bprice=$request->bprice;
        $data->bdescription=$request->bdescription;
        
        $data->save();

        return redirect()->back();

    
    }

    // Updates a lunch menu item with the data from the form.
    public function updatel(Request $request,$id){

        $data=lunch::find($id);

        // Get the uploaded file
        $image = $request->file('limage');
    
        if ($request->hasFile('limage')) {
            // Get the uploaded file
            $image = $request->file('limage');
    
            // Generate a unique filename based on the current timestamp and file extension
            $imagename = time() . '.' . $image->getClientOriginalExtension();
    
            // Move the uploaded file to a storage location
            $image->move('lunchimage', $imagename);
    
            // Assign values to the model properties
            $data->limage = $imagename;
        }
       
        $data->ltitle=$request->ltitle;
        $data->lprice=$request->lprice;
        $data->ldescription=$request->ldescription;
        
        $data->save();

        return redirect()->back();

    
    }

    // Updates a dinner menu item with the data from the form.
    public function updated(Request $request,$id){

        $data=dinner::find($id);

         // Get the uploaded file
         $image = $request->file('dimage');
    
         if ($request->hasFile('dimage')) {
             // Get the uploaded file
             $image = $request->file('dimage');
     
             // Generate a unique filename based on the current timestamp and file extension
             $imagename = time() . '.' . $image->getClientOriginalExtension();
     
             // Move the uploaded file to a storage location
             $image->move('dinnerimage', $imagename);
     
             // Assign values to the model properties
             $data->dimage = $imagename;
         }
       
        $data->dtitle=$request->dtitle;
        $data->dprice=$request->dprice;
        $data->ddescription=$request->ddescription;
        
        $data->save();

        return redirect()->back();

    }







    // Creates a new reservation entry in the database.
    public function reservation(Request $request){


        $data = new reservation;
        
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;

       
        $data->save();

       
        return redirect()->back();

    } 



    // Retrieves and displays a list of reservations if the admin is authenticated.
    public function viewreservation()
    {
        if(Auth::id())

        {
             // Get the user type of the authenticated user.
             $usertype= Auth::user()->usertype;

             // Check if the user type is '1'(admin).
             if($usertype=='1'){
                $data=reservation::all();
                return view("admin.adminreservation",compact("data"));
             }
             else{
                 // Return a 403 Forbidden error for unauthorized access.
                 return abort(403,'Unauthorized Access');
             }
            
        }

        else{
            return redirect('login');
        }
    }





    

    // Retrieves and displays a list of chefs if the admin is authenticated.
    public function viewchef()
    {
        if(Auth::id())

        {
            $usertype= Auth::user()->usertype;

             // Check if the user type is '1'(admin).
             if($usertype=='1'){
                $data=foodchef::all();
                return view("admin.adminchef",compact("data"));
             }
             else{
                 // Return a 403 Forbidden error for unauthorized access.
                 return abort(403,'Unauthorized Access');
             }
        }

        else{
            return redirect('login');
        } 
    }



    // Uploads a new chef profile to the database.
    public function uploadchef(Request $request)
    {
        $data = new foodchef;
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('chefimage', $imagename);
        $data->image = $imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $data->save();

       
        return redirect()->back();   
       
    }



   // Displays a form to edit a specific chef's profile.
    public function updatechef($id)
    {
         $data=foodchef::find($id);
        return view("admin.updatechef",compact("data"));
    }



    // Updates a chef's profile with the data from the form.
    public function updatefoodchef(Request $request, $id)
    {
         $data=foodchef::find($id);
         $image = $request->file('image');

         if ($image) {
         $imagename = time() . '.' . $image->getClientOriginalExtension();
         $image->move('chefimage', $imagename);
         $data->image = $imagename;
        }
         
        $data->name=$request->name;
        $data->speciality=$request->speciality;

        $data->save();
        return redirect()->back();   

    }


    // Deletes a chef's profile with the given ID.
    public function deletechef($id){

        $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
}
