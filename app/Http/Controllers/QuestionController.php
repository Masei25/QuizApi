<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    //
    public function fetch(Request $request)
    {
        $response = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => '16mqVZuyOF7utZJdWb70Aff1oNbbpVK0bt1itZMf',
            'limit' => 10
        ]);

        $jsonData =  $response->json();

        foreach ($jsonData as $data) {
            Questions::create([
                'question' => $data['question'],
                'answer_a' => $data['answers']['answer_a'],
                'answer_b' => $data['answers']['answer_b'],
                'answer_c' => $data['answers']['answer_c'],
                'answer_d' => $data['answers']['answer_d'],
                'answer_e' => $data['answers']['answer_e'],
                'answer_f' => $data['answers']['answer_f']
            ]);
        }

        return redirect()->route('home');
        
    }

    public function show()
    {
        $data = Questions::all();

        return view('home', [
            'data' => $data 
        ]);
    }
}
