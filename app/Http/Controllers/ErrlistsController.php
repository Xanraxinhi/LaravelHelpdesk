<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Errlist;

class ErrlistsController extends Controller
{
    public function getErrList()
    {
    	$errlists = Errlist::orderBy('id','DESC')->paginate(7);
    	return view('admin.ErrList.errlist', ['errlists'=>$errlists]);
    }
    public function getThem()
    {
    	return view('admin.ErrList.them');
    }
    public function postThem(Request $Request)
    {
        $this->validate($Request,
            [
                'content_req' => 'required|min:20'
            ],
            [
                'content_req.required'=>"Chưa nhập nội dung",
                'content_req.min'=>"ít nhất 20 ký tự",
            ]);
        $errlists = new Errlist;
        $errlists->content_req = $Request->content_req;
        if($Request->hasfile('image_req'))
        {
            $file = $Request->file('image_req');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg')
            {
                return redirect('admin/ErrList/them')->with('loi','Bạn chỉ được chọn file: png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $image_req = str_random(4)."_".$name;
            while(file_exists("upload/ERR/".$image_req))
            {
                $image_req = str_random(4)."_".$name;
            }
            $file->move("upload/ERR",$image_req);
            $errlists->image_req = $image_req;
        }
        else
        {
            $errlists->image_req = "";
        }
        $errlists->save();

        return redirect('admin/ErrList/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
         $errlists = Errlist::find($id);
         return view('admin.ErrList.sua',['errlists'=>$errlists]);
    } 
    public function postSua(Request $Request,$id)
    {
        $errlists = Errlist::find($id);
        $this->validate($Request,
            [
                'content_req' => 'required|min:20'
            ],
            [
                'content_req.required'=>"Chưa nhập nội dung",
                'content_req.min'=>"ít nhất 20 ký tự", 
            ]);
        $errlists->content_req =$errlists->content_req;
        $errlists->save();

        return redirect('admin/ErrList/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id)
    {
        $errlists = Errlist::find($id);
        $errlists->delete();

        return redirect('admin/ErrList/List')->with('thongbao','Xóa thành công');
    }
}


