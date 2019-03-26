<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id','m_name','age','email','avatar'];
}
