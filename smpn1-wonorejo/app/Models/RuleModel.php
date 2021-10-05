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
        'RuleCat',
        'UserID_FK',
    ];

    // public function getRule()
    // {
    //     return $this->db
    //     ->query("SELECT * FROM rules INNER JOIN users ON rules.UserID_FK = users.UserID WHERE RuleCat = 'Tata Tertib'")
    //     ->getResultArray();
    // }
}
