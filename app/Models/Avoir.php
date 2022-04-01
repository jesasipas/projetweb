<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Avoir
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $droits_id
 * 
 * @property Droit $droit
 *
 * @package App\Models
 */
class Avoir extends Model
{
	protected $table = 'avoir';

	protected $casts = [
		'droits_id' => 'int'
	];

	protected $fillable = [
		'droits_id'
	];

	public function droit()
	{
		return $this->belongsTo(Droit::class, 'droits_id');
	}
}
