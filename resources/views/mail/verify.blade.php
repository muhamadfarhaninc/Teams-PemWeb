<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifikasi Akun anda</title>
</head>

<body>
    <p>
        Halo <b>{{ $details['name'] }}</b> !
    </p>
    <br>
    <p>
        Berikut ini adalah data anda :
    </p>

    <table>
        <tr>
            <td>Full Name</td>
            <td>:</td>
            <td>{{ $details['name'] }}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>:</td>
            <td>{{ $details['role'] }}</td>
        </tr>
        <tr>
            <td>Website</td>
            <td>:</td>
            <td>{{ $details['website'] }}</td>
        </tr>
        <tr>
            <td>Tanggal Register</td>
            <td>:</td>
            <td>{{ $details['datetime'] }}</td>
        </tr>
    </table>
    <br><br><br>
    <center>
        <h3>
            Klik di bawah ini untuk verifikasi akun anda :
        </h3>
        <a href="{{ $details['url'] }}"
            style="text-decoration: none; color: rgb(255, 255, 255); padding: 9px; background-color: blue; font:bold; border-radius: 20%;">Verifikasi</a>
        <br><br><br>
        <p>
            Copy right @ 2023 | kelompok8 - Pemweb
        </p>
    </center>

</body>

</html>
