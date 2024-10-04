<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        // abort_if_user_cannot(['*.read']);
        $data['data'] = Order::get();
        return view('admin.order.index',$data);
    }

    public function create(Request $request) {
        $valid = $request->validate([
            'total' => 'required',
            'status' => 'required',
        ]);
        if($request->id == "0"){
            $dataInsert['total'] = $request->total;
            $dataInsert['status'] = $request->status;
            $dataInsert['created_at'] = date('Y-m-d H:i:s');
            Order::insert($dataInsert);
        }else{
            $dataUpdate['name'] = $request->name;
            $dataUpdate['email'] = $request->email;
            $dataUpdate['no_telp'] = $request->no_telp;
            $dataUpdate['updated_at'] = date('Y-m-d H:i:s');

            $update = Order::findOrFail($request->id);
            $update->update($dataUpdate);
        }

        return redirect()->route('order-travelu')->with('status', 'Data Berhasil disimpan!');
    }

    public function delete($id){
        $data = Order::findOrFail($id);
        $data->delete();
        return redirect()->route('order-travelu')->with('status', 'Data Berhasil dihapus!');
    }


    function upload($file,$folder,$name){
        $path = public_path()."$folder";
        if (!file_exists($path)) {
            $destination = File::makeDirectory($path, 0777,true);
        }
        $ava_name = "$name".date('YmdHis').'_'.'.'.$file->getClientOriginalExtension();
        $file->move($path,$ava_name);
        $file_file = "$folder".$ava_name;

        return $file_file;
    }


    public function read($id)
    {
        return \DB::table('order')
                ->where('id',$id)
                ->get();
    }
}
