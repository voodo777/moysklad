<?php

namespace MoySklad\Entities;


use MoySklad\Traits\CreatesSimply;

class Currency extends AbstractEntity{
    use CreatesSimply;

    public static
        $entityName = 'currency';
}