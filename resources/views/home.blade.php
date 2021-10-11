<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <title>Home</title>
</head>
<body>
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Player ID</th>
            <th>Bet</th>
            <th>Win</th>
            <th>Rake</th>
            <th>Net</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        @php $counter = 0 @endphp
        @foreach ($bets as $key => $bet)
            @php $counter++ @endphp
            <tr>
                <td>{{ $counter }}</td>
                <td>{{ $bet->playerid }}</td>
                <td>{{ $bet->bet }}</td>
                <td>{{ $bet->win }}</td>
                <td>{{ $bet->rake }}</td>
                <td>{{ $bet->net }}</td>
                <td>{{ $bet->date }}</td>
                <td>
                    <a href="javascript:void(0);" data-url="/bet/{{ $bet->id }}" class="btn btn-primary btn-sm seeBetItem" data-id="{{ $bet->id }}"><i class="fas fa-eye"></i></a>
                    <button class="btn btn-danger btn-sm removeBetItem" data-id="{{ $bet->id }}"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/script.js"></script>
</body>
</html>
