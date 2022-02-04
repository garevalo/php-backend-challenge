<?php

namespace App\Types;

use App\Methods;

class Coffee implements Methods {

    public function getQuality($quality, $sellIn): int
    {

        if ($quality > 0){

            $quality = $quality - 2;

            if ($sellIn <= 0)
                $quality = $quality - 2;
        }

        return $quality;

    }

    public function getSellIn($quality, $sellIn): int
    {

        return $sellIn - 1;

    }

}