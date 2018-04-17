<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';
    protected $fillable = ['id','title','image','feature','created_at','updated_at'];
    protected $hidden = ['id_categories','id_tag','content','remember_token'];

     /**hien thi danh sach
     * [getAll description]
     * @return [type] [description]
     */
    public static function getAll(){
    	return Posts::orderby('id','desc')->get();
    }
}
