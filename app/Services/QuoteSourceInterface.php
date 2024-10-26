<?php

namespace App\Services;

use Illuminate\Support\Collection;

interface QuoteSourceInterface
{
    public function getQuotes(int $count = 1):Collection;
}
