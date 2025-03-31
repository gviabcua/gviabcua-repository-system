<?php namespace Gviabcua\Repository\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Matherials extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gviabcua.Repository', 'repository-item', 'matherials-item');
    }
    
    public function configureListFilter($filter)
	{
	    $filter->add('authors', [
	        'label' => 'Authors',
	        'type' => 'group',
	        'modelClass' => \Gviabcua\Repository\Models\Authors::class,
	        'nameFrom' => 'name',
	    ]);
	}
    public function configureListType($filter)
	{
	    $filter->add('authors', [
	        'label' => 'Types',
	        'type' => 'group',
	        'modelClass' => \Gviabcua\Repository\Models\Types::class,
	        'nameFrom' => 'type',
	    ]);
	}
    public function configureListThemes($filter)
	{
	    $filter->add('themes', [
	        'label' => 'Themes',
	        'type' => 'group',
	        'modelClass' => \Gviabcua\Repository\Models\Themes::class,
	        'nameFrom' => 'theme',
	    ]);
	}
    public function configureListCollections($filter)
	{
	    $filter->add('collections', [
	        'label' => 'Collections',
	        'type' => 'group',
	        'modelClass' => \Gviabcua\Repository\Models\Collections::class,
	        'nameFrom' => 'collection',
	    ]);
	}
}
