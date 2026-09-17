<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #aecef9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-card {
            background-color: #fefefe;
            width: 320px;
            padding: 30px 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px auto;
            overflow: hidden; 
            border: 3px solid #8891d2;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .info-box {
            background-color: #d5e8ff;
            padding: 10px 16px;
            margin: 10px 0;
            border-radius: 25px;
            text-align: left;
        }

        .info-box .label {
            display: block;
            font-size: 11px;
            color: #5c97f6;
            font-weight: normal;
            margin-bottom: 2px;
        }

        .info-box .value {
            display: block;
            font-size: 14px;
            color: #2d4b7a;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="profile-card">
        <div class="avatar">
            <img src="{{ asset('images/avatar.jpg') }}" alt="Foto Profil">
        </div>

        <div class="info-box">
            <span class="label">Nama</span>
            <span class="value">{{ $nama }}</span>
        </div>
        <div class="info-box">
            <span class="label">Kelas</span> 
            <span class="value">{{ $kelas }}</span>
        </div>
        <div class="info-box">
            <span class="label">NPM</span> 
            <span class="value">{{ $npm }}</span>
        </div>
    </div>

</body>
</html>