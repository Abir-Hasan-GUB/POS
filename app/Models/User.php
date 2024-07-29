<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
 protected $_fillable   = ['firstName', 'lastName', 'email', 'mobile', 'password', 'otp'];
 protected $_attributes = [
  'otp' => 0,
 ];
}
