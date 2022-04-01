<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property string $ville
 * @property string $codePostal
 * @property string $adresse
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Avoir[] $avoirs
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'addresses';

	protected $fillable = [
		'ville',
		'codePostal',
		'adresse'
	];

	public function avoirs()
	{
		return $this->hasMany(Avoir::class, 'addresses_id');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'addresses_id');
	}
}
