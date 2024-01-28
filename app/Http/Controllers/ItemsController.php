<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\itemgroup;
use App\Models\items;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;



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
    public function editGroup($x){
        $item = itemgroup::where('id', $x)
        ->first();

        return view('editgroupitem', ['item'=>$item]);
    }

    public function updateGroup(Request $request){
        $item=itemgroup::find($request->id);

        $item->Itemgroupsname=$request->namegroup;

        $item->save();

        return redirect('cpanel');
    }

    //del
    public function delGroup($x){
        $item=itemgroup::find($x);
        $item -> delete();

        return redirect('itemgroup');
    }






        //update
        public function editItem($x){
            $item = items::where('id', $x)
            ->first();
    
            return view('edititem', ['item'=>$item]);
        }
    
        public function updateItem(Request $request){
            $item=items::find($request->id);
    
            $item->itemname=$request->itemname;
            $item->price=$request->price;
            $item->qty=$request->qty;
            $item->color=$request->color;
            $item->itemgroupno=$request->itemgroupno;


    
            $item->save();
    
            return redirect('cpanel');
        }
    
        //del
        public function delItem($x){
            $item=items::find($x);
            $item -> delete();
    
            return redirect('items');
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
            'itemgroupno'=>$request->itemgroupno,
            'img'=>$request->img
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

    public function showProduct($id){
        $data=items::where('itemgroupno', $id)
        ->get();
        return view('showProduct', ['data'=>$data]);
    }


    public function AddtoCart($id){
        DB::table('cart')->insert(['iditem' => $id]); //save to cart table 
        $idgroup=Session::get('id');
        $count=DB::table('cart')->get()->count();
        Session::put('countitem',$count);
        return redirect('showProd/'. $idgroup);
    }



    public function testAPI(){
        $response=http::get('https://api.sampleapis.com/coffee/iced');
        $data=$response->object();
        return view('testapi', ['data'=>$data]);
    }

    public function checkout(){
        return view('cart');
    }

    public function about(){
        return view('about');
    }

    public function viewCart(){
        $data=items::All();
        return view('cart')->with('data', $data);
    }
}