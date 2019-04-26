<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class AdminController extends Controller
{
    public function getFAQ()
    {
        $articles = Article::orderBy('id','DESC')->paginate(7);
    	return view('admin.FAQ.FAQ', ['articles'=>$articles]);
    }
    public function getThem()
    {
    	return view('admin.FAQ.them');
    }
    public function postThem(Request $Request)
    {
        $this->validate($Request,
            [
                'title' => 'required|min:10',
                'content' => 'required|min:20'
            ],
            [
                'title.required'=>"Chưa nhập Tiêu đề",
                'title.min'=>"ít nhất 10 ký tự",
                'content.required'=>"Chưa nhập nội dung",
                'content.min'=>"ít nhất 20 ký tự",
            ]);
        $articles = new Article;
        $articles ->title = $Request->title;
        $articles ->content = $Request->content;

        if($Request->hasfile('image'))
        {
            $file = $Request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg')
            {
                return redirect('admin/FAQ/them')->with('loi','Bạn chỉ được chọn file: png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while(file_exists("upload/FAQ/".$image))
            {
                $image = str_random(4)."_".$name;
            }
            $file->move("upload/FAQ",$image);
            $articles->image = $image;
        }
        else
        {
            $articles->image = "";
        }

        $articles->save();

        return redirect('admin/FAQ/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
         $articles = Article::find($id);
         return view('admin.FAQ.sua',['articles'=>$articles]);
    } 
    public function postSua(Request $Request,$id)
    {
        $articles = Article::find($id);
        $this->validate($Request,
            [
                'title' => 'required|min:10',
                'content' => 'required|min:20'
            ],
            [
                 'title.required'=>"Chưa nhập Tiêu đề",
                'title.min'=>"ít nhất 10 ký tự",
                'content.required'=>"Chưa nhập nội dung",
                'content.min'=>"ít nhất 20 ký tự", 
            ]);
        $articles->title =$Request->title;
        $articles->content =$Request->content;
        if($Request->hasfile('image'))
        {
            $file = $Request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi !='png' && $duoi != 'jpeg')
            {
                return redirect('admin/FAQ/them')->with('loi','Bạn chỉ được chọn file: png,jpg,jpeg');
            }
            $name = $file->getClientOriginalName();
            $image = str_random(4)."_".$name;
            while(file_exists("upload/FAQ/".$image))
            {
                $image = str_random(4)."_".$name;
            }
            $file->move("upload/FAQ",$image);
            $articles->image = $image;
        }
        else
        {
            $articles->image = "";
        }
        $articles->save();

        return redirect('admin/FAQ/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id)
    {
        $articles = Article::find($id);
        $articles->delete();

        return redirect('admin/FAQ/FAQ')->with('thongbao','Xóa thành công');
    }
    
	public function getThanhVien()
	{
		return view('admin.Member.thanhvien');
	}
}


