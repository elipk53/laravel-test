<?php

namespace Tests\Unit;

use App\Services\QuoteService;
use Tests\TestCase;

class QuoteServiceTest extends TestCase
{
    protected $config;
    protected function setUp(): void
    {
        parent::setUp();

        $this->config = config('quotesources');

    }
    /**
     * A basic unit test example.
     */
    public function test_quote_config(): void
    {
        $this->assertContains('default', array_keys($this->config));
    }


    public function test_quote_list_html(): void
    {
        $quotes = $this->app->make('App\Services\QuoteService')->getRandomQuotes(1, QuoteService::HTML);
        $this->assertStringContainsString('<blockquote', (string) $quotes);
    }

    public function test_quote_list_text(): void
    {
        $quotes = $this->app->make('App\Services\QuoteService')->getRandomQuotes(1, QuoteService::TEXT);
        $this->assertIsString($quotes);
    }

    public function test_quote_list_json(): void
    {
        $quotes = $this->app->make('App\Services\QuoteService')->getRandomQuotes(1, QuoteService::JSON);
        $this->assertIsIterable($quotes);
    }
}
