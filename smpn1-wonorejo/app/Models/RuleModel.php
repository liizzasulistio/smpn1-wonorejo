<?php

namespace App\Models;

use CodeIgniter\Model;

class RuleModel extends Model
{
	protected $table='rules';
    protected $primaryKey = 'RuleID';
    protected $useTimestamps = true;
    protected $allowedFields = 
    [
        'RuleTitle',
        'RuleField',
    ];

    // untuk mengambil semua data dari db
    public function getRule()
    {
        return $this->db
        ->query("SELECT * FROM rules")
        ->getResultArray();
    }
}
