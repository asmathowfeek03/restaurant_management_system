<?php

namespace App\Http\Controllers;

// Import the Request class for handling HTTP requests
use Illuminate\Http\Request;

// Import the Auth facade for user authentication
use Illuminate\Support\Facades\Auth;

// Import the models for working with data
use App\Models\User;
use App\Models\Food;
use App\Models\Foodchef;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())

        {
         // If a user is logged in, redirect to the 'redirects' route
         return redirect('redirects');
        }
 
        else
        
        $data=food::all();
        $data2 = foodchef::all();
        // Return the 'home' view with data
        return view("home", compact("data","data2"));
    
    }

    public function redirects()
    {
        // Fetch all food items 
        $data=food::all();
        // Fetch all chef data
        $data2 = foodchef::all();

        
        $usertype= Auth::user()->usertype;
        if($usertype=='1')
        {
               // If the user is an admin (usertype '1'), return the admin dashboard view
               return view('admin.adminhome'); 
        }
        else
        {
            // If the user is not an admin (usertype '0'), return the 'home' view with data
            return view('home',compact('data',"data2"));
        }
    }
}
