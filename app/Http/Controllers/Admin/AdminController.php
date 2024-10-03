<?php


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use File;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        abort_if_user_cannot(['*.read']);
        return view('admin.admin.index',$data);
    }

    public function create(Request $request) {
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if($request->id == "0"){
            $dataInsert['name'] = $request->name;
            $dataInsert['email'] = $request->email;
            $dataInsert['password'] = $request->password;
            $dataInsert['created_at'] = date('Y-m-d H:i:s');
            Admin::insert($dataInsert);
        }else{
            $dataUpdate['name'] = $request->name;
            $dataUpdate['email'] = $request->email;
            $dataUpdate['password'] = $request->password;
            $dataUpdate['created_at'] = date('Y-m-d H:i:s');

            $update = Admin::findOrFail($request->id);
            $update->update($dataUpdate);
        }

        return redirect()->route('admin-travelu')->with('status', 'Data Berhasil disimpan!');
    }

    public function delete($id){
        $data = Admin::findOrFail($id);
        $data->delete();
        return redirect()->route('admin-travelu')->with('status', 'Data Berhasil dihapus!');
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
        return \DB::table('admin')
                ->where('id',$id)
                ->get();
    }
}