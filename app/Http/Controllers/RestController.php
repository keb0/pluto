<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RestServiceInterface;

class RestController extends Controller
{

    protected $restService;

    public function __construct(RestServiceInterface $restservice) {
        $this->restService = $restservice;
    }

    public function index() {
        return view('talk');
    }

    public function post(Request $request) {
        $response = $this->restService->post($request->message);
        return view('talk')->with('message', $response);
    }

    public function chat(Request $request) {
        $response = $this->restService->post($request->message);
        return view('talk')->with('message', $response);
    }
}
