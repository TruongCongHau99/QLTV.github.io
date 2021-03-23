<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class ThuThuModel extends Authenticatable
{
    //tên bảng
    protected $table = 'thuthu';
    //khóa chính
    protected $primaryKey = 'tt_id';
    //trường cần thêm
    protected $fillable = ['tt_hoten','tt_gioitinh','tt_diachi','tt_sdt','tt_ngaysinh','username','password','q_id'];

    protected $hidden = [];
    protected $dates = [];
}
