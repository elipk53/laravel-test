<?php

namespace App\Services;

class QuoteService
{
    const HTML = 'html';
    const TEXT = 'text';
    const JSON = 'json';
    const RESPONSE_TYPES = [
        self::HTML,
        self::TEXT,
        self::JSON,
    ];
    protected function getSource():QuoteSourceInterface
    {
        $defaultSource = config('quotesources.default');
        return new (config('quotesources.sources')[$defaultSource]['class'])();

    }
    public function getRandomQuotes(int $count = 1, $responseType = self::JSON):mixed
    {
        $source = $this->getSource();

        $quotes = $source->getQuotes($count);

        switch ($responseType) {
            case self::HTML:
                return view('partials.quotes', compact('quotes'));
            case self::TEXT:
                return $quotes->implode('quote', "\n");
            case self::JSON:
                return $quotes;
            default:
                return $quotes;
        }
    }
}
