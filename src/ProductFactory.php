<?php

namespace App;

use App\Types\TicketVip;
use App\Types\Pisco;
use App\Types\Coffee;
use App\Types\Normal;
use App\Types\GoldTumi;

class ProductFactory {

    private Product $product;
    private int $quality;
    private int $sellIn;

    protected array $products = [
        'normal' => Normal::class,
        'Pisco Peruano' => Pisco::class,
        'Ticket VIP al concierto de Pick Floid' => TicketVip::class,
        'Tumi de Oro Moche' => GoldTumi::class,
        'Café Altocusco' => Coffee::class
    ];

    public function __construct(string $product, $quality, $sellIn)
    {
        $methods = new $this->products[$product];
        $this->product =  new Product($methods);

        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function quality(){

        return $this->product->getQuality($this->quality, $this->sellIn);

    }

    public function sellIn(){

        return $this->product->getSellIn($this->quality, $this->sellIn);

    }


}