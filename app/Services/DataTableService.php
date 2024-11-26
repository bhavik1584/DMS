<?php 

namespace App\Services;

class DataTableService{
    
    public function getActionHtml($row){

        $edit = route('user.edit',$row->id);
        $delete = route('user.destroy',$row->id);

        return "
            <div class='btn-group'>
                    <button type='button' class='btn btn-default dropdown-toggle dropdown-icon' data-toggle='dropdown'>
                      <span class='sr-only'>Toggle Dropdown</span>
                    </button>
                    <div class='dropdown-menu' role='menu'>
                      <a class='dropdown-item' href='{$edit}'>Edit</a>
                      <div class='dropdown-divider'></div>
                      <a class='dropdown-item' href='{$delete}'>Delete</a>
                      <div class='dropdown-divider'></div>
                      <a class='dropdown-item' href='#'>info</a>
                    </div>
                  </div>
        ";
    }

}