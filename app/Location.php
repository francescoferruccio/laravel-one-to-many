<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Location extends Model
{
  protected $table = 'locations';

  public function employees() {
    return $this->belongsToMany(Employee::class);
  }
}
