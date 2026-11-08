<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Feedback PKM DigiWise</title>
</head>
<body>

    <h2>Feedback Baru - PKM DigiWise</h2>

    <p>
        <strong>Nama:</strong>
        {{ $data['nama'] }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $data['email'] }}
    </p>

    <p>
        <strong>Subjek:</strong>
        {{ $data['subjek'] }}
    </p>

    <p>
        <strong>Pesan:</strong>
    </p>

    <p>
        {{ $data['pesan'] }}
    </p>

    <hr>

    <p>
        Feedback ini dikirim melalui website PKM DigiWise.
    </p>

</body>
</html>