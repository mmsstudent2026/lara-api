<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TempController extends Controller
{
    public function index()
    {

        if (Cache::has("my_name")) {
            $myName = Cache::get("my_name");
            return response()->json(["data" => [
                "message" => "$myName from cache"
            ]]);
        }

        $myName = "hein htet zan";

        Cache::add("my_name", $myName);

        return  response()->json(["data" => [
            "message" => "$myName is cached"
        ]]);;
    }


    public function destroy()
    {
        Cache::forget("my_name");
        return  response()->json(["data" => [
            "message" => "cache forget"
        ]]);;
    }
}
