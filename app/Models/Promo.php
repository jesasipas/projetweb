<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Promo
 * 
 * @property int $id
 * @property string $promo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Promo extends Model
{
	protected $table = 'promos';

	protected $fillable = [
		'promo'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'promos_id');
	}
}
