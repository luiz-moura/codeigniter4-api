<?php

namespace App\Models;

use CodeIgniter\Model;

class StateModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'states';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'object';
	protected $useSoftDelete        = true;
	protected $protectFields        = true;
	protected $allowedFields        = ['country', 'name', 'initials', 'status'];

	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [
    'country'         => 'required',
    'name'            => 'required',
    'initials'        => 'required',
    'status'          => 'permit_empty|alpha',
  ];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];
}
