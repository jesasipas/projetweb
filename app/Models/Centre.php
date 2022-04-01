<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Centre
 * 
 * @property int $id
 * @property string $nomCrentre
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Centre extends Model
{
	protected $table = 'centres';

	protected $fillable = [
		'nomCrentre'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'centres_id');
	}
}
