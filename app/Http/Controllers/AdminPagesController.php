<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\productImage;
use Image;

class AdminPagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function create()
    {
        return view('admin.pages.product.index');
    }

    public function product_create()
    {
        return view('admin.pages.product.create');
    }

    
    public function product_store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:160',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

    	$product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        
        $product->slug = str_slug($request->title);
        $product->category_id = 1;
        $product->brand_id = 1;
        $product->admin_id = 1;
        $product->save();
        
        //productImage model insert image
        
        // if ($request->hasfile('pic')) {
        // 	//insert image
        // 	$image = $request->file('pic');
        // 	$filename = time() . '.' . $image->getClientOriginalExtension();
        // 	$location = public_path('images/products/' .$filename);
        // 	Image::make($image)->save($location);
        
        // 	$product_image = new productImage;
        // 	$product_image->product_id = $product->id;
        // 	$product_image->image = $filename;
        // 	$product_image->save();
        // }

        if ( count($request->pic) > 0) {
            foreach ($request->pic as $image) {
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/products/' .$filename);
                Image::make($image)->save($location);

                $product_image = new productImage;
                $product_image->product_id = $product->id;
                $product_image->image = $filename;
                $product_image->save();
            }
        }




        return redirect()-> route('admin.product.create');


    }

    public function manage_products()
    {
        $products =Product::orderby('id','desc')->get();
        return view('admin.pages.product.manage')->with('products', $products);
    }

    public function product_edit($id)
        {
            $product = Product::find($id);
            return view('admin.pages.product.edit')->with('product', $product);
        }

    public function product_update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|max:160',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        
        $product->save();
        
        return redirect()-> route('newsfeed');


    }        

    public function product_delete($id)
        {
            $product = Product::find($id);
            if (!is_null($product)) {
                $product->delete();
            }
            session()->flash('success', 'Product has deleted successfully!!');
             return back();
        }
}
