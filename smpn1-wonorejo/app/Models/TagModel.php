<?php namespace App\Models;
use CodeIgniter\Model;

class TagModel extends Model
{
    protected $table='tags';
    protected $primaryKey = 'TagID';
    protected $useTimestamps = false;
    protected $allowedFields = 
    [
        'slug_FK',
        'TagItem',
    ];

    // function insert($query)
    // {
    //     $sql = "INSERT INTO tags (slug_FK, TagItem) VALUES ('$slug_FK', '$s')";
    //     $this->db->query($sql);
    // }
}