<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable //Look this model extends Authenticatable not extends Model
{
    use Notifiable;
}