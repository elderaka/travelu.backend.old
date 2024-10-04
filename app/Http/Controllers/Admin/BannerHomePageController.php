<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BannerHomePage;

class BannerHomePageController extends Controller
{
    public function index(Request $request)
    {
        // abort_if_user_cannot(['*.read']);
        $data['data'] = BannerHomePage::get();
        return view('admin.bannerhome.index',$data);
    }

    public function create(Request $request) {
        $valid = $request->validate([
            'img' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);
        if($request->id == "0"){
            $dataInsert['name'] = $request->name;
            $dataInsert['status'] = $request->status;
            $dataInsert['created_at'] = date('Y-m-d H:i:s');

            if($request->file('img')){
                $dataInsert['img'] = $this->upload($request->file('img'),'/'.$name.'/bannerhome/','img_');
            }

            BannerHomePage::insert($dataInsert);
        }else{
            $dataUpdate['name'] = $request->name;
            $dataUpdate['status'] = $request->status;
            $dataUpdate['updated_at'] = date('Y-m-d H:i:s');

            $update = BannerHomePage::findOrFail($request->id);
            $update->update($dataUpdate);

            if($request->file('img')){
                $dataUpdate['img'] = $this->upload($request->file('img'),'/'.$name.'/bannerhome/','img_');
            }
        }

        return redirect()->route('bannerhome-travelu')->with('status', 'Data Berhasil disimpan!');
    }

    public function delete($id){
        $data = BannerHomePage::findOrFail($id);
        $data->delete();
        return redirect()->route('bannerhome-travelu')->with('status', 'Data Berhasil dihapus!');
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
        return \DB::table('m_banner_home')
                ->where('id',$id)
                ->get();
    }
}
