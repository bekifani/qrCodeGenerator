<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $fillable = ['profile_pic', 'first_name', 'middle_name', 'last_name', 'email', 'physical_address', 'phone', 'gender', 'remark'];
}
