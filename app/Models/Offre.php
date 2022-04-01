<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Offre
 * 
 * @property int $id
 * @property string $nomOffre
 * @property string $competance
 * @property string $lieuStage
 * @property string $emailEntreprise
 * @property string $typePromo
 * @property float $dureeJour
 * @property Carbon $dateDebut
 * @property float $nbPlace
 * @property float $baseRemunerationEuro
 * @property bool $masqueOffre
 * @property string $detailOffre
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $entreprises_id
 * 
 * @property Entreprise $entreprise
 * @property Collection|Candidature[] $candidatures
 * @property Collection|Sauvegarde[] $sauvegardes
 *
 * @package App\Models
 */
class Offre extends Model
{
	protected $table = 'offres';

	protected $casts = [
		'dureeJour' => 'float',
		'nbPlace' => 'float',
		'baseRemunerationEuro' => 'float',
		'masqueOffre' => 'bool',
		'entreprises_id' => 'int'
	];

	protected $dates = [
		'dateDebut'
	];

	protected $fillable = [
		'nomOffre',
		'competance',
		'lieuStage',
		'emailEntreprise',
		'typePromo',
		'dureeJour',
		'dateDebut',
		'nbPlace',
		'baseRemunerationEuro',
		'masqueOffre',
		'detailOffre',
		'entreprises_id'
	];

	public function entreprise()
	{
		return $this->belongsTo(Entreprise::class, 'entreprises_id');
	}

	public function candidatures()
	{
		return $this->hasMany(Candidature::class, 'offres_id');
	}

	public function sauvegardes()
	{
		return $this->hasMany(Sauvegarde::class, 'offres_id');
	}
}
