<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <lable for="name">name</label>
        <input type="text" name="name" id="name">
        <br>
        <lable for="email">email</label>
        <input type="email" name="email" id="email">
        <br>
        <lable for="password">password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Register</button>
    </form>

    <br><br><br>

    <h3>Notif</h3>
    <table border="1" cellspacing="0" cellpadding="5"> 
        <thead>
            <tr>
                <td>No</td>
                <td>Notif</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @if ($users)
                @foreach ($users as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    @foreach ($item->unreadNotifications as $user)
                        <td>user {{ $user->data['name'] }} telah mengikuti anda, dengan email : {{ $user->data['email'] }}</td>
                        <td><a href="/baca/{{ $item->id }}/{{ $user->id }}">Baca</a></td>
                    @endforeach
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>