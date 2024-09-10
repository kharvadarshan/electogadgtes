<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\productRating;
use Illuminate\Support\Facades\Auth;
use Flasher\Laravel\Facade\Flasher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Stripe;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::where('usertype','user')->get()->count();
        $product = Product::all()->count();
        $order = Order::all()->count();
        $delivered = Order::where('status','Delivered')->get()->count();
        return  view('admin.index',compact('user','product','order','delivered'));
    }


    public function home()
    {   
        $product = Product::all();
        if(Auth::id()){
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id',$userid)->count();
        }
        else{
            $count='';
        }
        return view('home.index',compact('product','count'));
    }

    public function login_home()
    {
        $product = Product::all();
        if(Auth::id()){
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
            }
            else{
                $count='';
            }
        return view('home.index',compact('product','count'));
    }

    public function products_detail($id)
    {   $product = Product::all();
        $data = Product::find($id);
        $rating = productRating::where('product_id',$id)->get();
        $count_ratings = productRating::where('product_id',$id)->get()->count();
        if(Auth::id()){
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();
            }
            else{
                $count='';
            }
        return view('home.product_details',compact('data','product','count','rating','count_ratings'));
    }

    public function add_cart($id)
    {
       $product_id = $id;
       $user = Auth::user();
       $user_id = $user->id;
        
       $data = new Cart;

       $data->user_id = $user_id;
       $data->product_id = $product_id;

       $data->save();
       Flasher::addSuccess('Product Added to Cart Successfully.');
       return redirect()->back();

    }

    public function add_to_cart(Request $request,$id)
    {  
        $product_id = $id;
       $user = Auth::user();
       $user_id = $user->id;
        
       $data = new Cart;

       $data->user_id = $user_id;
       $data->product_id = $product_id;
       $data->quantity = $request->qty;
       $data->save();
       Flasher::addSuccess('Product Added to Cart Successfully.');

        return redirect()->back();
    }

    public function mycart()
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();

            $cart = Cart::where('user_id',$userid)->get();
        }
        
        return view('home.mycart',compact('count','cart'));
    }

    public function delete_cart($id)
    {   
        $data = Cart::find($id);
        if($data)
        {
            $data->delete();
            Flasher::addSuccess('Cart item deleted Successfully.');
        }
        else{
            Flasher::addError('Cart item not found.');
        }
        return redirect()->back();
    }

    public function confirm_order(Request $request)
    {   
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;

        $userid = Auth::user()->id;
        $cart = Cart::where('user_id',$userid)->get();
        $total=10;
        foreach($cart as $carts)
        {
            $order = new Order();
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->quantity = $carts->quantity;
            $order->total_amount = $carts->product->price*$carts->quantity;
            $total += $carts->product->price*$carts->quantity;
            $order->user_id = $userid;
            $order->product_id = $carts->product_id;
            $order->save();
        }
    
        $cart_remove = Cart::where('user_id',$userid)->get();

        foreach($cart_remove as $remove)
        {
            $data = Cart::find($remove->id);
            $data->delete();
        }
         
        
         if($request->has('pmode'))
         {
            Flasher::addSuccess('Order Placed Successfully.');
            return redirect()->back();   
         }
         else{
              return  view('home.stripe',compact('total'));
         }
         
            
    }

    public  function  myorders()
    {
        $user = Auth::user()->id;
        $count = Cart::where('user_id',$user)->get()->count();
        $order = Order::where('user_id',$user)->get();

        return view('home.order',compact('count','order'));
    }
   
    public function save_rating(Request $request,$id)
    {
          $validator = Validator::make($request->all(),[
             'name' => 'required|min:5',
             'email' => 'required|email',
             'comment' => 'required|min:10',
             'rating' => 'required'
          ]);

          if($validator->fails()){
            return response()->json([
                'status'=>false,
                'errors' =>$validator->errors()
            ]);
          }

          $count = productRating::where('email',$request->email)->count();
           if($count > 0){
            Flasher::addError('You already rated this product.');
            return response()->json([
                'status'=>true,
                'errors' =>$validator->errors()
            ]);
           }
          $productRating = new productRating();
          $productRating->product_id = $id;
          $productRating->username = $request->name;
          $productRating->email = $request->email;
          $productRating->comment = $request->comment;
          $productRating->rating = $request->rating;
          $productRating->status = 0;
          $productRating->save();
          Flasher::addSuccess('Thanks for your rating.');
          return response()->json([
            'status'=>true,
            'message' =>'Thanks for your rating.',
            'success' => 'Thanks for your rating.'
        ]);

       // Flasher::addSuccess('Order Placed Successfully.');

    }

    public function contact()
    {   
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Cart::where('user_id',$userid)->count();

            
        }
        return view('home.comment',compact('count'));
    }
    public function stripe(Request $request)
    {
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;

        $userid = Auth::user()->id;
        $cart = Cart::where('user_id',$userid)->get();
        $total=10;
        foreach($cart as $carts)
        {
            $order = new Order();
            $order->name = $name;
            $order->rec_address = $address;
            $order->phone = $phone;
            $order->quantity = $carts->quantity;
            $order->total_amount = $carts->product->price*$carts->quantity;
            $total += $carts->product->price*$carts->quantity;
            $order->user_id = $userid;
            $order->product_id = $carts->product_id;
            $order->save();
        }
    
        $cart_remove = Cart::where('user_id',$userid)->get();

        foreach($cart_remove as $remove)
        {
            $data = Cart::find($remove->id);
            $data->delete();
        }
         
        
         if($request->has('pmode'))
         {
            Flasher::addSuccess('Order Placed Successfully.');
            return redirect()->back();   
         }
         else{
              return  view('home.stripe',compact('total'));
         }
         
    }
    
    public function stripe_post(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $request->payAmount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
        
         Session::flash('success', 'Payment successful.');
              
        return back();
    }
}
