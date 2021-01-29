<?php

namespace App\Http\Controllers\Admin;

use Larapen\Admin\app\Http\Controllers\PanelController;
use App\Http\Requests\Admin\SkillRequest as StoreRequest;
use App\Http\Requests\Admin\SkillRequest as UpdateRequest;
class SkillController extends PanelController
{
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware('demo.restriction')->only(['store', 'update', 'destroy']);
	}
	
    public function setup()
	{
        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
		$this->xPanel->setModel('App\Models\Skill');
		$this->xPanel->setRoute(admin_uri('skill'));
		$this->xPanel->setEntityNameStrings('Skills', 'Skills');
		$this->xPanel->enableReorder('name', 2);
		$this->xPanel->enableDetailsRow();
		$this->xPanel->allowAccess(['reorder', 'details_row']);
		if (!request()->input('order')) {
			$this->xPanel->orderBy('lft', 'ASC');
		}
		
		$this->xPanel->addButtonFromModelFunction('top', 'bulk_delete_btn', 'bulkDeleteBtn', 'end');
		
		/*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
		// COLUMNS
		$this->xPanel->addColumn([
			'name'  => 'id',
			'label' => '',
			'type'  => 'checkbox',
			'orderable' => false,
		]);
		$this->xPanel->addColumn([
			'name'  => 'name',
			'label' => 'Skills',
			'type' => 'text'
		]);

		
		// FIELDS
		$this->xPanel->addField([
			'name'       => "name",
			'label'      => trans('admin::messages.Name'),
			'type'       => "text",
			'attributes' => [
				'placeholder' => trans('admin::messages.Name'),
			],
		]);
        
    }
    public function store(StoreRequest $request)
	{
		return parent::storeCrud();
	}
	
	public function update(UpdateRequest $request)
	{
		return parent::updateCrud();
	}
}
