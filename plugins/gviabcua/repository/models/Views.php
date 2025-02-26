<?php namespace Gviabcua\Repository\Models;

use Model;

/**
 * Model
 */
class Views extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'gviabcua_repository_views';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    protected $fillable = ['ip'];
}
