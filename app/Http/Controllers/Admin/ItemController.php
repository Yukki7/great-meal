<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Category;
use Carbon\Carbon;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.item.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image)) {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/item')) {
                mkdir('uploads/item', 0777, true);
            }
            $image->move('uploads/item', $imageName);
        }
        else {
            $imageName = 'default.png';
        }

        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $imageName;
        $item->save();

        $categories = Category::find($request->category);
        $item->categories()->attach($categories);
        return redirect()->route('item.index')->with('successMsg', 'Item Successfully Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        return view('admin.item.edit', compact('item', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        $item = Item::find($id);
        if (isset($image)) {
            if (file_exists('uploads/item/'. $item->image)) {
                unlink('uploads/item/'. $item->image);
            }
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/item')) {
                mkdir('uploads/item', 0777, true);
            }
            $image->move('uploads/item', $imageName);
        }
        else {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug .'-'. $currentDate .'-'. uniqid() .'.'. substr($item->image, -3);
            rename('uploads/item/' .$item->image, 'uploads/item/' .$imageName);
        }

        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $imageName;
        $item->save();

        $categories = Category::find($request->category);
        $item->categories()->sync($categories);
        return redirect()->route('item.index')->with('successMsg', 'Item Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        if (file_exists('uploads/item/'. $item->image)) {
            unlink('uploads/item/'. $item->image);
        }
        $item->delete();
        return redirect()->back()->with('successMsg', 'Item Successfully Deleted');
    }
}
