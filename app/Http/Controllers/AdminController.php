<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\User;

use App\Models\Fighter;

use App\Models\Product;

use App\Models\Gear;


class AdminController extends Controller
{
    public function view_category()
    {
        $data=category::all();


        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;

        $data->save();
        return redirect()->back()->with('message', 'Category Addition Successful');

    }

    public function delete_category($id)
    {
        $data=category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Category Deletion Successful');

    }



    public function show()
    {
       

        $data=user::all();

        return view('admin.user',compact('data'));
    }

    




    public function delete_user($id)
    {
        $data=user::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'User Deletion Successful');

    }

    public function view_fighters()
    {
        
        return view ('admin.fighters');
    }

    public function add_fighters(Request $request)
    {

        $fighters=new Fighter;
        $fighters->name=$request->name;
        $fighters->age=$request->age;
        $fighters->weight_category=$request->weight_category;
        $fighters->fight_record=$request->fight_record;
        $fighters->speciality=$request->speciality;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('fighters',$imagename);

        $fighters->image=$imagename;

        $fighters->save();

        

        

        return redirect()->back()->with('messasge','Fighter Addition Successful');
        
       
    }

    public function show_fighters(){

        $fighters=Fighter::all();
        return view('admin.show_fighters',compact('fighters'));
    }

    public function delete_fighers($id)
    {

        $fighters=Fighter::find($id);

        $fighters->delete();

        return redirect()->back()->with('message','Fighter Removed Sucessfully');

    }

    public function update_fighters($id)
    {
        $fighters=Fighter::find($id);

        return view('admin.update_fighters',compact('fighters'));



    }


    public function update_fighters_confirm(Request $request,$id)
    {
        
        $fighters=Fighter::find($id);

        $fighters->name=$request->name;

        $fighters->age=$request->age;

        $fighters->weight_category=$request->weight_category;

        $fighters->fight_record=$request->fight_record;

        $fighters->speciality=$request->speciality;

        $image=$request->image;

        if($image)

        {

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('fighters',$imagename);

            $fighters->image=$imagename;

        }

        

        $fighters->save();

        return redirect()->back()->with('message','Fighter Information Change Successful');



    }


    

    public function view_product()
    {
        $category=category::all();
        return view ('admin.product',compact('category'));
    }
    public function add_product(Request $request)
    {
         $product=new product;
         $product->title=$request->title;
         $product->description=$request->description;
         $product->price=$request->price;
         $product->quantity=$request->quantity;
         $product->discount_price=$request->dis_price;
         $product->category=$request->category;
         $image=$request->image;
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->image->move('product',$imagename);
         $product->image=$imagename;
         $product->save();
         return redirect()->back()->with('message','Product Added Successfully');
        
    }
    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product',compact('product'));
    }
    public function delete_product($id)
    {
        $product=product::find($id);

        $product->delete();

        return redirect()->back()->with('message','Product Deleted Successfully');

    }
    public function update_product($id)
    {
        $product=product::find($id);
        $category=category::all();
        return view('admin.update_product',compact('product','category'));

    }
    public function update_product_confirm(Request $request,$id)
    {
        $product=product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->category=$request->category;
        $product->quantity=$request->quantity;
        $image=$request->image;
        if ($image)
        {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('/product',$imagename);
        $product->image=$imagename;
        }
        $product->save();
        return redirect()->back()->with('message','Product updated successfully');
    }
    

    public function view_users()
    {
        $data=users::all();


        return view('admin.category',compact('data'));
    }
}




