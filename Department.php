<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DepartmentController
 *
 * @author  The scaffold-interface created at 2016-09-01 10:59:38am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Department extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'departments';

	
}
