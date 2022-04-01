<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $prenom
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property bool $masque
 * @property int $role
 * @property int $droits_id
 * @property int $centres_id
 * @property int $promos_id
 * @property int $addresses_id
 * 
 * @property Address $address
 * @property Centre $centre
 * @property Droit $droit
 * @property Promo $promo
 * @property Collection|Candidature[] $candidatures
 * @property Collection|Sauvegarde[] $sauvegardes
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $casts = [
		'masque' => 'bool',
		'role' => 'int',
		'droits_id' => 'int',
		'centres_id' => 'int',
		'promos_id' => 'int',
		'addresses_id' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'prenom',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'masque',
		'role',
		'droits_id',
		'centres_id',
		'promos_id',
		'addresses_id'
	];

	public function address()
	{
		return $this->belongsTo(Address::class, 'addresses_id');
	}

	public function centre()
	{
		return $this->belongsTo(Centre::class, 'centres_id');
	}

	public function droit()
	{
		return $this->belongsTo(Droit::class, 'droits_id');
	}

	public function promo()
	{
		return $this->belongsTo(Promo::class, 'promos_id');
	}

	public function candidatures()
	{
		return $this->hasMany(Candidature::class, 'users_id');
	}

	public function sauvegardes()
	{
		return $this->hasMany(Sauvegarde::class, 'users_id');
	}
}
