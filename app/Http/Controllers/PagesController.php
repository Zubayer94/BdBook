<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Post;
use App\Comment;
use Auth;
use Image;

class PagesController extends Controller
{
	   public function index()
	    {
	    	return view('pages.index');
	    }
	    public function products()
	    {
	    	$products = Product::orderBy('id','desc')->get();
	    	return view('pages.product.index')->with('products', $products);
	    }


	    public function showproduct($id)
	    {
	    	$product = Product::find($id);
	    	return view('pages.product.showproduct')->with('product', $product);
	    }

	    // public function showproduct($slug)
	    // {
	    // 	$product = Product::where('slug', $slug)->first();
	    // 	return view('pages.product.showproduct', compact('product'));
	    // }



	    public function newsfeed()
	    {
	    	$posts = Post::all()->sortByDesc('id');
	    	return view('pages.newsfeed')->withPosts($posts);
	    }

	    public function newsfeed_store(Request $request)
	    {
	    	$request->validate([
	    		'title' => 'required|max:160|unique:posts',
	    		'body' => 'required|max:180',
	    		'category' => 'required',
	    		'posttype' => 'required',
	    	]);

	    	$post = new Post;
	    	$post->title = $request->title;
	    	$post->category = $request->category;
	    	$post->post_type = $request->posttype;
	    	$post->price = $request->bookprice;
	    	$post->body = $request->body;
	    	$post->user_id = Auth::user()->id;
	    	if ($request->hasFile('pic')) {
	    		$image = $request->file('pic');
	    		$filename = time() . '.' . $image->getClientOriginalExtension();
	    		$location = public_path('images/post_pic/' .$filename);
	    		Image::make($image)->save($location);
	    		$post->image = $filename;
	    	}

	    	$post->save();

	    	session()->flash('success', 'Post has been added!!');
	    	return back();
	    }

	    public function newsfeed_edit($id)
	    {
	    	$post = Post::find($id);
	    	return view('pages.editnewsfeed')->withPost($post);
	    }

	    public function newsfeed_update(Request $request, $id)
	    {
	    	$request->validate([
	    		'title' => 'required|max:160|unique:posts',
	    		'body' => 'required|max:180',
	    		'posttype' => 'required',
	    	]);

	    	$post = Post::find($id);
	    	$post->title = $request->title;
	    	$post->category = $request->category;
	    	$post->post_type = $request->posttype;
	    	$post->price = $request->bookprice;
	    	$post->body = $request->body;

	    	$post->save();

	    	return redirect()-> route('newsfeed');
	    }

	    public function newsfeed_delete($id)
        {
            $post = Post::find($id);
            if (!is_null($post)) {
                $post->delete();
            }
            session()->flash('success', 'Post has been deleted successfully!!');
             return back();
        }
        public function newsfeed_show($id)
        {
            $post = Post::find($id);
	    	return view('pages.showpost')->withPost($post);
        }

        public function post_comment(Request $request)
	    {
	    	$request->validate([
	    		'post_id' => 'exists:posts,id|numeric',
	    		'comment' => 'required|max:255',
	    	]);

	    	$comment = new Comment;
	    	$comment->comment = $request->comment;
	    	$comment->user_id = Auth::user()->id;
	    	$comment->post_id = $request->post_id;

	    	$comment-> save();

	    	session()->flash('success', 'Comment has been added!!');
	    	return redirect()->back();
	    }
}
