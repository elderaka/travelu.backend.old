<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{

    protected $guarded = [];
    public $guard_name = 'web';
    protected $table = 'pelanggan';
}
