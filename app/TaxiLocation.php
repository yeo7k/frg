<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaxiLocation extends Model

{
		protected $table = 'taxilocations';
      protected $fillable = ['locationX', 'locationY', 'userid'];
}
