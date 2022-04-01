<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Candidature
 * 
 * @property int $id
 * @property string $reponse
 * @property string $ficheMission
 * @property string $convention
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $offres_id
 * @property int $users_id
 * 
 * @property Offre $offre
 * @property User $user
 *
 * @package App\Models
 */
class Candidature extends Model
{
	protected $table = 'candidatures';

	protected $casts = [
		'offres_id' => 'int',
		'users_id' => 'int'
	];

	protected $fillable = [
		'reponse',
		'ficheMission',
		'convention',
		'offres_id',
		'users_id'
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
