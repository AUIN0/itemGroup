<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemgroup;
use App\Models\items;
use Illuminate\Support\Facades\DB;


class ItemsController extends Controller
{
    //Item groups
    public function GetItemsGroup(){
        $data=itemgroup::All();
        $issave=true;
        return view('itemgroup', ['data'=>$data, 'issave'=>$issave]);
    }

    public function SaveGroupsItems(Request $request){
        $data=itemgroup::create([
            'Itemgroupsname'=>$request->Itemgroupsname
        ]);

        $data->save();
        return redirect('addgritem');
    }

    //update
    public function edit($x){
        $item = itemgroup::where('id', $x)
        ->first();

        return view('editgroupitem', ['item'=>$item]);
    }

    public function Update(Request $request){
        $item=itemgroup::find($request->id);

        $item->Itemgroupsname=$request->namegroup;

        $item->save();

        return redirect('itemgroup');
    }

    //del
    public function del($x){
        $item=itemgroup::find($x);
        $item -> delete();

        return redirect('itemgroup');
    }



    //Items
    public function GetItems(){
        $item=items::All();

        return view('items', ['item'=>$item]);
    }

    public function SaveItems(Request $request){
        $item=items::create([
            'itemname'=>$request->itemname,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'color'=>$request->color,
            'itemgroupno'=>$request->itemgroupno
        ]);

        $item->save();
        return redirect('item');
    }



    public function Displayadditemsgroup(){
        return view('dashboard.addgroupsitem');
    }



    public function DisplayItems(){
        $data = DB::table('itemgroups')
        ->join('items', 'itemgroups.id', '=', 'items.itemgroupno')
        ->get();

        return view('dashboard.controlpanel', ['data'=>$data]);
    }


    public function showGroup(){
        $data=itemgroup::All();
        $count=$data->count();
        return view('welcome', ['data'=>$data, 'count'=>$count]);
    }

    public function showProduct(){
        $data=items::All();
        return view('showProduct', ['data'=>$data]);
    }
}