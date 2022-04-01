<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Entreprise
 * 
 * @property int $id
 * @property string $nomEntreprise
 * @property string $siteWeb
 * @property float $nbStageCesi
 * @property float $evaluationStage
 * @property string $confiancePilot
 * @property bool $masqueEntreprise
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $logo
 * @property string|null $banniere
 * 
 * @property Collection|Avoir[] $avoirs
 * @property Collection|Offre[] $offres
 *
 * @package App\Models
 */
class Entreprise extends Model
{
	protected $table = 'entreprises';

	protected $casts = [
		'nbStageCesi' => 'float',
		'evaluationStage' => 'float',
		'masqueEntreprise' => 'bool'
	];

	protected $fillable = [
		'nomEntreprise',
		'siteWeb',
		'nbStageCesi',
		'evaluationStage',
		'confiancePilot',
		'masqueEntreprise',
		'logo',
		'banniere'
	];

	public function avoirs()
	{
		return $this->hasMany(Avoir::class, 'entreprises_id');
	}

	public function offres()
	{
		return $this->hasMany(Offre::class, 'entreprises_id');
	}
}
