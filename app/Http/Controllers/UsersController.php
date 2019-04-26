<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function getThanhVien()
    {
    	$users = User::all();
    	return view('admin.Member.thanhvien', ['users'=>$users]);
    }

    public function getSua($id)
    {
    	$users = User::find($id);
    	return view('admin.Member.sua',['users'=>$users]);
    }
    
    public function postSua(Request $Request, $id)
    {
    	$this->validate($Request,[
            'email'=>'required|string|email|max:255',
            'vitri' => 'required|string|max:255',
    		'phonenumber'=>	'required|digits:10',
    		'level'=>'required'
    	],[
    		'phonenumber.required'=>'Chưa nhập số điện thoại',
            'phonenumber.digits'=>'Số điện thoại phải là 10 số',
    		'level.required'=>'Chưa nhập quyền'
    	]);
    	$users = User::find($id);
        $users ->email = $Request->email;
        $users ->vitri = $Request->vitri;
    	$users ->phonenumber = $Request->phonenumber;
    	$users ->level = $Request->level;
    	$users ->save();
    	return redirect('admin/Member/sua/'.$id)->with('thongbao','Sửa thành công');
    }

     public function getXoa($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('admin/Member/Member')->with('thongbao','Xóa thành công');
    }

}
