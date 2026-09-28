<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>For My Mal ♡</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: #f8f5ef;
            color: #78634f;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .card {
            max-width: 420px;
            width: 100%;
            background: #fffdf9;
            border: 1px solid #e9dfd0;
            padding: 50px 35px;
            text-align: center;
        }

        .heart {
            font-size: 35px;
            margin-bottom: 20px;
        }

        h1 {
            font-family: Georgia, serif;
            font-size: 42px;
            font-weight: normal;
            margin-bottom: 15px;
        }

        p {
            font-size: 13px;
            line-height: 1.8;
            color: #998570;
            margin-bottom: 25px;
        }

        input {
            width: 100%;
            padding: 15px;
            border: 1px solid #e1d4c3;
            background: #f8f5ef;
            text-align: center;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 15px;
            background: #78634f;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: #a34c4c;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="heart">♡</div>

        <h1>For my Mal</h1>

        <p>
            A little corner of the world made just for us.
            Enter our secret password to open it.
        </p>

        @if ($errors->any())
            <div class="error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('unlock') }}">
            @csrf

            <input
                type="password"
                name="password"
                placeholder="Our secret password"
                required
            >

            <button type="submit">
                Open our little world ♡
            </button>
        </form>

    </div>

</body>
</html>
