<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">

    <!-- Styles -->
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            font-family: sans-serif;
            padding: 1rem;
            background-color: orange;
        }

        .quiz,
        .choices {
            list-style-type: none;
            padding: 0;
        }

        .choices li {
            margin-bottom: 5px;
        }

        .choices label {
            display: flex;
            align-items: center;
        }

        .choices label,
        input[type="radio"] {
            cursor: pointer;
        }

        input[type="radio"] {
            margin-right: 8px;
        }

        .view-results {
            padding: 1rem;
            cursor: pointer;
            font-size: inherit;
            color: white;
            background: teal;
            border-radius: 8px;
            margin-right: 5px;
        }

        .my-results {
            padding: 1rem;
            border: 1px solid goldenrod;
        }
    </style>

</head>

<body class="antialiased">
    <ul class="quiz">

        @foreach ($data as $item)
        <li>
            <h4>{{$item->question}}</h4>
            <ul class="choices">
                <li>
                    <label><input type="radio" name="question0" value="{{$item->answer_a}}" /><span>{{$item->answer_a}}</span></label>
                </li>
                <li>
                    <label><input type="radio" name="question0" value="{{$item->answer_b}}" /><span>{{$item->answer_b}}</span></label>
                </li>
                <li>
                    <label><input type="radio" name="question0" value="{{$item->answer_c}}" /><span>{{$item->answer_c}}</span></label>
                </li>
                <li>
                    <label><input type="radio" name="question0" value="{{$item->answer_d}}" /><span>{{$item->answer_d}}</span></label>
                </li>
                <li>
                    <label><input type="radio" name="question0" value="{{$item->answer_e}}" /><span>{{$item->answer_e}}</span></label>
                </li>
                <li>
                    <label><input type="radio" name="question0" value="{{$item->answer_f}}" /><span>{{$item->answer_f}}</span></label>
                </li>
                
            </ul>
        </li> 
        @endforeach

    
    </ul>
</body>

</html>
