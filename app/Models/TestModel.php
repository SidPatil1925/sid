<?php

namespace App\Models;

use CodeIgniter\Model;

class TestModel extends Model {
	
	protected $table = 'FileUploadTable'; 
	protected $primarykey = 'id';
    protected $allowedFields = ['device_model','firmware_version','firmware_path'];
}