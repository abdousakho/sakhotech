<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 28 May 2019 20:09:13 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Arrondissement
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nom
 * @property int $departements_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\Departement $departement
 * @property \Illuminate\Database\Eloquent\Collection $communes
 *
 * @package App
 */
class Arrondissement extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'departements_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'departements_id'
	];

	public function departement()
	{
		return $this->belongsTo(\App\Departement::class, 'departements_id');
	}

	public function communes()
	{
		return $this->hasMany(\App\Commune::class, 'arrondissements_id');
	}
}
