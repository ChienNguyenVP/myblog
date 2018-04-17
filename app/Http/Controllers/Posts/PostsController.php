<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Posts;
use Yajra\Datatables\Datatables;

class PostsController extends Controller
{
    /**
	 * ham tra ve product
	 * @return view
	 */
    public function index(){
    	$posts = Posts::getAll();

    	return view('posts.index',['posts'=>$posts]);
    }
    public function datatablesPosts()
	{
	    return Datatables::of(Posts::query())
            ->addColumn('action', function ($user) {
                return '<button><a href="">Xem</a></button><button><a href="">Sửa</a></button><button><a href="">Xóa</a></button>';
            })
            ->make(true);
	}
}
