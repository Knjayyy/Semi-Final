<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use Illuminate\Http\Request;

class InventoryItemController extends Controller
{
    public function index() {
        $items = InventoryItem::orderBy('name')->get();

        return view('items.index',[
            'items' => $items
        ]);
    }
    public function store(Request $request) {
        InventoryItem::create([
            'name' => $request->name,
            'description' => $request->description,
            'values' => $request->values,
            'status' => $request->status,
        ]);

        return redirect('/items');
    }
    public function edit(InventoryItem $items) {

        return view('items.edit', [
            'items' => $items
        ]);
    }

    public function up(Request $request, $items){
        $input = $request->all();
        $items = InventoryItem::find($items);
        $items->name=$input['name'];
        $items->description=$input['description'];
        $items->values=$input['values'];
        $items->status=$input['status'];

        $items->save();
        return redirect('/items');
    }

    public function del(InventoryItem $items) {

        return view('items.delete', [
            'items' => $items
        ]);
    }

    public function des($items){
        InventoryItem::find($items)->delete();
        return redirect('/items');
    }

}


