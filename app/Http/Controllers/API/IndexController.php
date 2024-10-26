<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\QuoteService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(QuoteService $quoteService, Request $request)
    {
        $countQuotes = (int) $request->get('count', 5);
        if ($countQuotes < 1) {
            $countQuotes = 5;
        }

        $quotes = $quoteService->getRandomQuotes($countQuotes, QuoteService::JSON);

        return response()->json($quotes);
    }
}
