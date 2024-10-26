<?php

namespace App\Livewire;

use App\Services\QuoteService;
use Livewire\Component;

class Quotes extends Component
{

    public function render(QuoteService $quoteService)
    {
        $quotes = $quoteService->getRandomQuotes(5, QuoteService::HTML);
        return view('livewire.quotes', compact('quotes'));
    }
}
