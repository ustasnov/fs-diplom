<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $table = 'halls';

    protected $fillable = [
      'name',
      'number_of_rows',
      'seats_in_row',
  ];
}
