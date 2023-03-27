<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Office Locations</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>


    <!-- Test -->
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

    <!-- Scripts -->
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>
</head>
<body class="antialiased">
<table id="office_locations" class="display nowrap" style="width:100%">
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Offices</th>
        <th>Tables</th>
        <th>Sqm</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Offices</th>
        <th>Tables</th>
        <th>Sqm</th>
    </tr>
    </tfoot>
</table>
</body>
</html>
