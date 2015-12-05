<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <ul>
                @foreach($users as $user)
                    <li>id:{{$user->id}} name:{{$user->name}}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
