<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

//    Craete function
    public function index()
    {
//        Run Query  Select * from foods
        $foods=Food::all();
        return view('foodlist',compact('foods'));


}

    public function viewDetail($id)
    {
        $food=Food::find($id);
        return view('foodDetail',compact('food'));
    }

    public function viewEdit($id){
        $food=Food::findorfail($id);
        return view('foodEdit',compact('food'));
    }

    public function edit(Request $request,$id){
       $food = Food::findorfail($id);
       $food->name = $request->name;
       $food->price=$request->price;
       $food->save();
       return redirect()->route('foodList');

    }
    public function delete($id)
    {
        $food=Food::find($id);  // = select * from food where id = ?
        $food->delete();  // delete from food where id = ?
        return redirect()->back();

}

    public function create()
    {
        return view('insertFood');
}

    public function store(Request $request)
    {
        $foodName=$request->food;
        $foodPrice=$request->price;
//        7azr krdny database bo xazn krdny data
       $food=new Food();
       $food->name=$foodName;
       $food->price=$foodPrice;
       $food->save();
       return redirect()->route('foodList');
}

//    public function index()
//    {
////        $foodList=DB::select('select * from food');
//       $foodList=Food::all();
////       $foodList=DB::table('food')->get();
//        return view('food',compact('foodList'));
//   }

//    public function index()
//    {
//    $foods=DB::select('select * from food');
//        return view('food',compact('foods'));
//}
//
//    public function delete($id)
//    {
//
////        DB::select('delete from food where id=?',$id);
//    $food=Food::find($id);
//    $food->delete();
//    return redirect('/');
//
//}


}
