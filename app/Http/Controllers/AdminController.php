<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use Flasher\Laravel\Facade\Flasher;

class AdminController extends Controller
{
    public function view_category()
    {   
        $data = Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category;

        $category->save();

        Flasher::addSuccess('Category Added Successfully');

        return redirect()->back();
    }

    public function add_product()
    {
        return view('admin.add_product');
    }

    public function upload_product(Request $request)
    {
        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $image = $request->image;

        if($image)
        {
               $imagename = time().'.'.$image->getClientOriginalExtension();
               $request->image->move('products',$imagename);
               $data->image = $imagename;
        }
        $data->price = $request->price;
        $data->quantity = $request->qty;

        $data->save();

        Flasher::addSuccess('Product Added Successfully');

        return redirect()->back();


    }


    public function view_product()
    {   
        $products = Product::paginate(4);
        return view('admin.view_product',compact('products'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);
        $image_path = public_path('products/'.$data->image);
        if(file_exists($image_path))
        {
            unlink($image_path);
        }
        $data->delete();
        Flasher::addSuccess('Product Deleted Successfully');
        return redirect()->back();
    }

    public function update_product($id)
    {
        $data = Product::find($id);
        return view('admin.update_page',compact('data'));
    }

    public function edit_product(Request $request,$id)
    {
        $data = Product::find($id);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->quantity = $request->qty;
        
        $image = $request->image;

        if($image)
        {
               $imagename = time().'.'.$image->getClientOriginalExtension();
               $request->image->move('products',$imagename);
               $data->image = $imagename;
        }

        $data->save();

        Flasher::addSuccess('Product Updated Successfully');

        return redirect('/view_product');
    }

    public function product_search(Request $request)
    {
       $search = $request->search;
       $products = Product::where('title','LIKE','%'.$search.'%')->paginate(4);
        return view('admin.view_product',compact('products'));
    }

    public function view_order()
    {    $data = Order::all();
        return view('admin.order',compact('data'));
    }

    public function on_the_way($id)
    {
        $data = Order::find($id);
        $data->status = 'On the way';
        $data->save();

        return redirect()->back();
    }

    public function delivered($id)
    {
        $data = Order::find($id);
        $data->status = 'Delivered';
        $data->save();

        return redirect()->back();
    }


    public function print_pdf($id)
    {   

        $data = Order::find($id);

        $pdf = Pdf::loadView('admin.invoice',compact('data'));
        return $pdf->download('invoice.pdf');
        
    }
}
