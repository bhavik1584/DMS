<?php 

namespace App\Services;

use function Termwind\render;

class DmsService{

    public function getDmsMapByKey($key):array {

        $map = [
            'user'=>['normal','vip'],
            'group'=>['group1','group2']
        ];

        return $map[$key] ?? [];
    }
}