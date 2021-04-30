<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable {
  use SoftDeletes;
  use Notifiable;

  public    $timestamps  = true; 
  protected $table       = 'login';

  protected $fillable = ['cpf', 'modality'];

}