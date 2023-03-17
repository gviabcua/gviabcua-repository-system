<?php namespace Gviabcua\Repository\Models;

use Model;
use Config;
/**
 * Model
 */
class Matherials extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gviabcua_repository_matherials';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = ['copyrights'];

    public $attachOne =[
		'poster'=> ['System\Models\File', 'delete' => true]
	];
    public $attachMany =[
		'files'=> ['System\Models\File', 'delete' => true]
	];
	public $belongsToMany=[
		'authors' => [
			'Gviabcua\Repository\Models\Authors',
			'table' => 'gviabcua_repository_matherials_authors',
	        //'conditions' => 'active = 1',
			'order' => 'name'
			],
		'themes' => [
			'Gviabcua\Repository\Models\Themes',
			'table' => 'gviabcua_repository_matherials_themes',
	        //'conditions' => 'active = 1',
			'order' => 'theme'
		],
		'types' => [
			'Gviabcua\Repository\Models\Types',
			'table' => 'gviabcua_repository_matherials_types',
	        //'conditions' => 'active = 1',
			'order' => 'type'
		],
		'collections' => [
			'Gviabcua\Repository\Models\Collections',
			'table' => 'gviabcua_repository_matherials_collections',
	        //'conditions' => 'active = 1',
			'order' => 'collection'
		]
	];
	public static function getRepositoryUrlHandle(){
		return Config::get('app.url')."/handle/".Config::get('gviabcua_repository.handle_id');
	}
}
