<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DummyFullModelClass;
use App\Article;
use App\lain;
class PagesController extends Controller
{
    public function index(lain $lain)
    {
        return redirect('/articles');
    }
    

    public function create(lain $lain)
    {
        //$article = Article::find($id);
       // return view('article')->with('articles', $article);
    }
    public function store(Request $request, lain $lain)
    {
        //
    }

    public function edit(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    public function update(Request $request, lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }
    public function destroy(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }
}
