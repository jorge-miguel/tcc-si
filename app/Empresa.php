<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Empresa extends Model
{
    protected $fillable = [
        'cnpj', 'name', 'email', 'user_id'
    ];
    public function user()
	{
		return $this->belongsTo('App\User');
	}
}