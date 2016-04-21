<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralMessage extends Model {

	protected $table = 'general_messages';
	protected $fillable = ['login', 'register', 'is_active'];
	

}
