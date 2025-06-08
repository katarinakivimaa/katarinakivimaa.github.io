<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index()
    {
        $products = Product::take(4)->get();
        return view('pages.index', compact('products'));
    }

    public function donate()
    {
        return view('pages.donate');
    }

    public function shop(Request $request)
    {
        $query = Product::query();

        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->min_price);
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $products = $query->get();

        $categories = Category::all();

        return view('pages.shop', compact('products', 'categories'));
    }

    public function product(Product $product)
    {
        return view('pages.detail', compact('product'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function mail()
    {
        Mail::to('katarina.kivimaa@gmail.com')->send(new ContactUs(
            request()->input('subject'),
            request()->input('email'),
            request()->input('message'),
            request()->input('name')
        ));
        return redirect()->back()->with('success', 'Mail was sent successfully!');
    }
}
