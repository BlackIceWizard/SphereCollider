<?php

namespace App\Object;

use App\Object\Rigid\Rigid;

class FrontalImpact implements Phenomenon
{
    private Rigid $first;
    private Rigid $second;

    public function __construct(Rigid $first, Rigid $second)
    {
        $this->first = $first;
        $this->second = $second;
    }

    public function happen(): void
    {
        $this->first->impact($this);
        $this->second->impact($this);
    }
}