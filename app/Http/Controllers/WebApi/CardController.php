<?php

namespace App\Http\Controllers\WebApi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCard;
use App\Models\Card;

class CardController extends Controller
{
    public function store(StoreCard $request)
    {
        $body = $request->body;
        $snippet = $request->snippet;
        $card = new Card;
        $card->collection_id = $request->collectionId;
        $card->body = $body;
        $card->snippet = $snippet;
        $card->save();

        return response()->json([
            'status' => 'OK'
        ]);
    }
}
