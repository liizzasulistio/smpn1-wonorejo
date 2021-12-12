<?php namespace App\Models;
use CodeIgniter\Model;

class AchievementModel extends Model
{
    protected $table = 'achievements';
    protected $primaryKey = 'AchievementID';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'ContestName',
        'ContestDate',
        'Championship',
        'ContestLevel',
        'Organizer',
    ];

    public function getAchievement($AchievementID = false)
    {
        if($AchievementID === false)
        {
            return $this->findAll();
        }
        return $this->where(['AchievementID' => $AchievementID])->first();
    }

    public function search($keyword)
    {
        return $this->table('achievements')
            ->like('ContestName', $keyword)
            ->orLike('ContestDate', $keyword)
            ->orLike('Championship', $keyword)
            ->orLike('ContestLevel', $keyword)
            ->orLike('Organizer', $keyword);
    }
}