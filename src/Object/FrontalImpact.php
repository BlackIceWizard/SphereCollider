<?php

namespace App\Object;

use App\Object\Rigid\Rigid;

class FrontalImpact implements Phenomenon
{
    private Rigid $first;
    private Rigid $second;
    private Collision $collision;

    public function __construct(Rigid $first, Rigid $second)
    {
        $this->first = $first;
        $this->second = $second;
        $this->collision = new Collision(function($run) {
            $run();
        });
    }

    public function happen(): void
    {
        $this->first->impact($this->collision);
        $this->second->impact($this->collision);
    }
}