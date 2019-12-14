<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'user';

    //Dùng Mass Assignment trong việc tạo mới, tạo thêm 
    // fillable để khổng chể gửi thêm input role 'admin'
     
    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'role_id'
    ];

    //Kiểu dữ liệu
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'role_id' => 'string',
    ];
    // Các ràng buột
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    //Thêm các kết nối bảng

}
