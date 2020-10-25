<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Project extends Entity
{

    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'name' => true,
        'description' => true,
        'photo' => true,
        'photo_dir' => true,
        'category_id' => true,
        'category' => true
    ];
}
