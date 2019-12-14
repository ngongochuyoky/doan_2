<?php

namespace App\Models;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Accounts extends Model
{
    public $table = 'accounts';
    
    //Dùng Mass Assignment trong việc tạo mới, tạo thêm 
    // fillable để khổng chể gửi thêm input role 'admin'
    public $fillable = [
        'user_id',
        'gender',
        'date_of_birth',
        'phone',
        'city',
        'country_id'
    ];
    //Quy định kiểu dữ liệu bằng $casts
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'gender' => 'string',
        'date_of_birth' => 'date',
        'phone' => 'integer',
        'city' => 'string',
        'country_id' => 'integer'
    ];
    //Quy tắc xác nhận
    public static $rules = [
        'name' => 'required',
    ];
    //Kết nối với bảng user
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
