<?php

namespace App\Types;

use App\Methods;

class GoldTumi implements Methods {

    public function getQuality($quality, $sellIn): int
    {

        return $quality;

    }

    public function getSellIn($quality, $sellIn): int
    {
        return $sellIn ;
    }

}