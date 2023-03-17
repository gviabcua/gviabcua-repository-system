<?php namespace Gviabcua\Repository\Models;

use Model;

/**
 * Model
 */
class Authors extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gviabcua_repository_authors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
    public $attachOne = [
        'photo' => 'System\Models\File'
    ];
	public $belongsToMany=[
		'matherials' => [
			'Gviabcua\Repository\Models\Matherials',
			'table' => 'gviabcua_repository_matherials_authors',
	        'conditions' => 'active = 1',
			//'key' => 'tarifs_id', 'otherKey' => 'cities_id',
			],
		];
}
