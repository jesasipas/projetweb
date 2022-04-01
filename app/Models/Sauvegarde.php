<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sauvegarde
 * 
 * @property int $id
 * @property int $users_id
 * @property int $offres_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Offre $offre
 * @property User $user
 *
 * @package App\Models
 */
class Sauvegarde extends Model
{
	protected $table = 'sauvegarde';

	protected $casts = [
		'users_id' => 'int',
		'offres_id' => 'int'
	];

	protected $fillable = [
		'users_id',
		'offres_id'
	];

	public function offre()
	{
		return $this->belongsTo(Offre::class, 'offres_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
