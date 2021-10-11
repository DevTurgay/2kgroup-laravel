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
    <table class="table table-dark table-hover table-responsive" style="display: table-row-group;width:150px;">
        <tr>
            <td>ID:</td><td><b>{{ $bet->id }}</b></td>
        </tr>
            <td>Player ID:</td><td><b>{{ $bet->playerid }}</b></td>
        </tr>
            <td>Agent ID:</td><td><b>{{ $bet->agentid }}</b></td>
        </tr>
            <td>Currency:</td><td><b>{{ $bet->currency }}</b></td>
        </tr>
            <td>Bet:</td><td><b>{{ $bet->bet }}</b></td>
        </tr>
            <td>Win:</td><td><b>{{ $bet->win }}</b></td>
        </tr>
            <td>Rake:</td><td><b>{{ $bet->rake }}</b></td>
        </tr>
            <td>Tournament:</td><td><b>{{ $bet->tournament }}</b></td>
        </tr>
            <td>Net:</td><td><b>{{ $bet->net }}</b></td>
        </tr>
            <td>Fin:</td><td><b>{{ $bet->fin }}</b></td>
        </tr>
            <td>Aams Ticket:</td><td><b>{{ $bet->aams_ticket }}</b></td>
        </tr>
            <td>Aams Table:</td><td><b>{{ $bet->aams_table }}</b></td>
        </tr>
            <td>Date:</td><td><b>{{ $bet->date }}</b></td>
        </tr>
    </table>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/jquery/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/script.js"></script>
</body>
</html>
