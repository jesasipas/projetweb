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
 * Class Droit
 * 
 * @property int $id
 * @property bool $rechercherent
 * @property bool $modifent
 * @property bool $creerent
 * @property bool $evalent
 * @property bool $supent
 * @property bool $consulent
 * @property bool $rechercheroffre
 * @property bool $creeroffre
 * @property bool $modifoffre
 * @property bool $suppoffre
 * @property bool $consulstatoffre
 * @property bool $recherchepilot
 * @property bool $creerpilot
 * @property bool $modifpilot
 * @property bool $supppilot
 * @property bool $recherchedele
 * @property bool $creerdele
 * @property bool $modifdele
 * @property bool $suppdele
 * @property bool $recherhceretud
 * @property bool $creeretud
 * @property bool $modifetud
 * @property bool $suppetud
 * @property bool $consultstatetud
 * @property bool $step3
 * @property bool $step4
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Avoir[] $avoirs
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Droit extends Authenticatable
{
	protected $table = 'droits';

	protected $casts = [
		'rechercherent' => 'bool',
		'modifent' => 'bool',
		'creerent' => 'bool',
		'evalent' => 'bool',
		'supent' => 'bool',
		'consulent' => 'bool',
		'rechercheroffre' => 'bool',
		'creeroffre' => 'bool',
		'modifoffre' => 'bool',
		'suppoffre' => 'bool',
		'consulstatoffre' => 'bool',
		'recherchepilot' => 'bool',
		'creerpilot' => 'bool',
		'modifpilot' => 'bool',
		'supppilot' => 'bool',
		'recherchedele' => 'bool',
		'creerdele' => 'bool',
		'modifdele' => 'bool',
		'suppdele' => 'bool',
		'recherhceretud' => 'bool',
		'creeretud' => 'bool',
		'modifetud' => 'bool',
		'suppetud' => 'bool',
		'consultstatetud' => 'bool',
		'step3' => 'bool',
		'step4' => 'bool'
	];

	protected $fillable = [
		'rechercherent',
		'modifent',
		'creerent',
		'evalent',
		'supent',
		'consulent',
		'rechercheroffre',
		'creeroffre',
		'modifoffre',
		'suppoffre',
		'consulstatoffre',
		'recherchepilot',
		'creerpilot',
		'modifpilot',
		'supppilot',
		'recherchedele',
		'creerdele',
		'modifdele',
		'suppdele',
		'recherhceretud',
		'creeretud',
		'modifetud',
		'suppetud',
		'consultstatetud',
		'step3',
		'step4'
	];

	public function avoirs()
	{
		return $this->hasMany(Avoir::class, 'droits_id');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'droits_id');
	}
}
