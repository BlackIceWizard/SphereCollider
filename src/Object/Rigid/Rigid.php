<?php

namespace App\Object\Rigid;

use App\Object\FrontalImpact;

interface Rigid
{
    public function impact(FrontalImpact $impact);
}