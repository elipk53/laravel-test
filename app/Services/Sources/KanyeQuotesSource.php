<?php

namespace App\Services\Sources;

use App\Services\QuoteSourceInterface;
use GuzzleHttp\Client;

class KanyeQuotesSource implements QuoteSourceInterface
{
    const SOURCE_NAME = 'kanye';
    private string $url;
    private Client $client;
    public function __construct()
    {
        $this->url = config('quotesources.sources')[self::SOURCE_NAME]['url'];
        $this->client = new Client([
            'base_uri' => $this->url,
        ]);
    }

    public function getQuotes(int $count = 1): \Illuminate\Support\Collection
    {
        if ($count < 1) {
            throw new \InvalidArgumentException('Count must be greater than 0');
        }

        $quotes = collect();

        do {
            $qResp = $this->client->get('/');
            if ($qResp->getStatusCode() !== 200) {
                throw new \RuntimeException('Failed to get quote from source');
            }
            $quote = json_decode($qResp->getBody()->getContents(), true);
            $quotes->push($quote['quote']);
            $count -= 1;
        } while ($count > 0);

        return $quotes;
    }
}
