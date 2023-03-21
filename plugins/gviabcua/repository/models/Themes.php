<?php namespace Gviabcua\Repository\Models;

use Model;

/**
 * Model
 */
class Themes extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gviabcua_repository_themes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];
    public $belongsToMany=[
		'matherials' => [
			'Gviabcua\Repository\Models\Matherials',
			'table' => 'gviabcua_repository_matherials_themes',
	        //'conditions' => 'active = 1',
			'order' => 'theme'
		],
	];
}
