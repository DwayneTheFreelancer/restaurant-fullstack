<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodItem;
use App\FoodCategory;

class FoodItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $items = FoodItem::paginate(10);
        return view('admin/food-items/all', [
            'items' => $items
        ]);
    }
    
    public function create() {
        $categories = FoodCategory::all();
        return view('admin/food-items/create', [
            'categories' => $categories,
        ]);
    }
    
    public function store(Request $request) {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['nullable'],
            'price' => ['required'],
            'category_id' => ['required', 'integer'],
        ]);
        
        $item = new FoodItem();
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();
        
        return redirect('/admin/food-items');
    }
    
    public function edit($id) {
        $item = FoodItem::find($id);
        $categories = FoodCategory::all();
        
        return view('admin/food-items/edit', [
            'category' => $item,
            'categories' => $categories
        ]);
    }
    
    public function update(Request $request, $id) {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'image_url' => ['nullable'],
            'price' => ['required'],
            'category_id' => ['required', 'integer'],
        ]);
        
        $item = new FoodItem();
        $item->title = request('title');
        $item->description = request('description');
        $item->image_url = request('image_url');
        $item->price = request('price');
        $item->category_id = request('category_id');
        $item->save();
        
        return redirect('admin/food-items');
    }
    
    public function delete($id) {
        $item = FoodItem::find($id);
        $item->delete();
        return redirect('admin/food-items');
    }
}
