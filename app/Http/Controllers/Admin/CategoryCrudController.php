<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
{
    CRUD::setModel(\App\Models\Category::class);
    CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
    CRUD::setEntityNameStrings('category', 'categories');
}

protected function setupListOperation()
{
    CRUD::column('name')->label('Name');
}

protected function setupCreateOperation()
{
    CRUD::setValidation(\App\Http\Requests\CategoryRequest::class);

    CRUD::field('name')
        ->label('Category Name')
        ->type('text')
        ->attributes(['placeholder' => 'Enter category name']);
}

protected function setupUpdateOperation()
{
    $this->setupCreateOperation();
}

}
