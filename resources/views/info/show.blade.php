<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $info->serial_number }}</title>
</head>
<body>

    <h1>Item Serial Number: {{ $info->serial_number }}</h1>

    <ul>
        <li>Type/Spare: {{ $info->type }}</li>
        <li>Brand: {{ $info->brand }}</li>
        <li>Tarikh Dapat: {{ $info->tarikh_dapat }}</li>
        <li>Tarikh Installation: {{ $info->tarikh_installation }}</li>
        <li>Remarks: {{ $info->remarks }}</li>
    </ul>

    <p>
        {!! QrCode::generate($info->serial_number) !!}
    </p>

</body>
</html>
