<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Operation extends Entity

{
    protected $_accessible = [
        'created' => true,
        'modifield' => true,
        'title' => true,
        'description' => true,
        'photo' => true,
        'photo_dir' => true,
        'photo2' => true,
        'photo2_dir' => true,
        'title2' => true,
        'scenario' => true,
        'scenario2' => true,
        'scenario3' => true,
        'cover' => true,
        'cover_dir' => true,
        'link' => true,
        'title_installation' => true,
        'installation' => true,
        'photo3' => true,
        'photo3_dir' => true,
        'title_installation2' => true,
        'installation2' => true,
        'photo4' => true,
        'photo4_dir' => true,
        'begin' => true,
        'steps' => true,
        'steps2' => true,
        'steps3' => true,
        'steps4' => true,
        'steps5' => true,
        'steps6' => true
    ];
}
