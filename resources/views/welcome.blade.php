<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            .flex{display:flex}
            body{
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
            }
            *{
                box-sizing: border-box;
                text-decoration: none;
                font-family: 'Poppins', sans-serif;
            }
            button{
                height: 45px;
                border: none;
                font-size: 17px;
                font-weight: 400;
                background: #333;
                color: #fff;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
    </head>
    <body class="antialiased">
        <div>
            <h1>Todo List</h1>

            @foreach ($listItems as $listItem)
                <div class="flex" style="align-items: center;">
                    <p>Item: {{$listItem->name}}</p>
                    <form method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charset="UTF-8">
                        {{ csrf_field() }}
                        <button type="submit" style="max-height: 25px; margin-left: 20px;">Mark Complete</button>
                    </form>

                </div>
            @endforeach

            <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <label for="listItem">New Todo item</label> </br>
                <input type="text" name="listItem"> </br> </br>
                <button>Save item</button>

            </form>
        </div>
    </body>
</html>
