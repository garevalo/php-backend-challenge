<?php

namespace App\Types;

use App\Methods;

class TicketVip implements Methods {

    public function getQuality(int $quality, int $sellIn): int
    {

        if ($quality < 50) {

            $quality = $quality + 1;

            if ($sellIn < 11) {
                $quality = $quality + 1;
            }
            if ($sellIn < 6) {
                $quality = $quality + 1;
            }

        }

        if ($sellIn <= 0) {
            $quality = 0;
        }

        return $quality;

    }

    public function getSellIn(int $quality, int $sellIn): int
    {

        return $sellIn - 1;

    }

}