<?php

namespace App\Object\Rigid;

use App\Object\Collision;

interface Rigid
{
    public function impact(Collision $collision);
}