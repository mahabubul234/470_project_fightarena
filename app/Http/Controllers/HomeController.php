<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Fighter;



class HomeController extends Controller

{

    public function __construct(AdminController $adminController)
    {
        $this->adminController = $adminController;
    }
    public function index()
    {
        return view('home.userpage');
    }

    public function scheduletab()
    {
        return view('home.scheduletab');
    }

    public function contacts()
    {
        return view('home.contacts');
    }

    
    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function product1()
    {
        // Create a new instance of AdminController
      
        $products = Product::all();

        // You can also fetch category data if needed
      

        return view('home.product1', compact('products'));
    }


    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='3')
        {
            return view('admin.home');
        }
        
       
       

        else{

            return view('home.userpage');
        }


    }


    public function fighter()
    {
        $fighter=Fighter::all();
        return view('home.fighter',compact('fighter'));
    }

    
  
    public function combatshop()
    {
        return view('home.combatshop');
    }





    public function redirect()
    {
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            return view('admin.home');
        }

        else{

            return view('home.userpage');
        }


    }
}
