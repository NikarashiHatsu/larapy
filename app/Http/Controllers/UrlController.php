<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUrlRequest;
use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function generate(StoreUrlRequest $request)
    {
        return Url::create($request->validated());
    }
}
