<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Guestbook;

class monController extends Controller
{
    public function getInfos()
    {
        $guestbooks = Guestbook::all();
        $guestbookTab = [];
        foreach ($guestbooks as $key => $value) {
          $guestbookTab[$value->name]= $value->content;
        }
        return view('value', ['value'=> $guestbookTab]);
    }
    public function postInfos(Request $request)
    {
        $book = new Guestbook;
        $book->name = $request->name;
        $book->content = $request->content;
        $book->save();
        return redirect('/monController');
    }
}
