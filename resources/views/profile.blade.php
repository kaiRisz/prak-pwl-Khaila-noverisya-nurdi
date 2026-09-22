<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profile Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

            font-family: Arial, Helvetica, sans-serif;

            background:
                radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.25), transparent 30%),
                radial-gradient(circle at 80% 80%, rgba(0, 40, 100, 0.5), transparent 35%),
                linear-gradient(
                    135deg,
                    #071a35,
                    #0b3d70,
                    #1976b8,
                    #6faed6,
                    #d7e8f5
                );

            color: #ffffff;
        }

        .profile-card {
            width: 400px;
            padding: 35px;

            text-align: center;

            background: rgba(255, 255, 255, 0.15);

            border: 1px solid rgba(255, 255, 255, 0.35);

            border-radius: 25px;

            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);

            box-shadow:
                0 20px 50px rgba(0, 0, 0, 0.35),
                inset 0 1px 1px rgba(255, 255, 255, 0.4);
        }

        .profile-picture {
            width: 150px;
            height: 150px;

            margin: 0 auto 20px;

            padding: 5px;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #ffffff,
                    #9cc7e8,
                    #397ca8,
                    #e9f5ff,
                    #ffffff
                );

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.35);
        }

        .profile-picture img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            border-radius: 50%;

            border: 3px solid rgba(255, 255, 255, 0.8);
        }

        .profile-card h1 {
            font-size: 28px;

            margin-bottom: 8px;

            color: #ffffff;

            text-shadow:
                0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .subtitle {
            font-size: 14px;

            margin-bottom: 25px;

            color: rgba(255, 255, 255, 0.8);
        }

        .info-container {
            display: flex;
            flex-direction: column;

            gap: 12px;

            text-align: left;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 14px 18px;

            border-radius: 14px;

            background: rgba(255, 255, 255, 0.13);

            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .info-label {
            font-size: 13px;

            color: rgba(255, 255, 255, 0.7);
        }

        .info-value {
            font-size: 15px;

            font-weight: bold;

            color: #ffffff;
        }

        .footer {
            margin-top: 25px;

            font-size: 12px;

            color: rgba(255, 255, 255, 0.6);
        }

        @media (max-width: 500px) {

            .profile-card {
                width: 90%;

                padding: 30px 20px;
            }

            .profile-picture {
                width: 130px;
                height: 130px;
            }

            .profile-card h1 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>

    <div class="profile-card">

        <!-- FOTO PROFILE -->
        <div class="profile-picture">

            <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz5eMNI3vzzdlZ03WkxzFPGs7mhkkfyDsw35fIvr6hOkCyeIlrZEe3K7at&s=10"
                alt="Foto Profile">

        </div>


        <!-- JUDUL -->
        <h1>Profile Mahasiswa</h1>

        <p class="subtitle">
            Pemrograman Web Lanjut
        </p>


        <!-- DATA PROFILE -->
        <div class="info-container">

            <div class="info-item">

                <span class="info-label">
                    Nama
                </span>

                <span class="info-value">
                    {{ $nama }}
                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    NPM
                </span>

                <span class="info-value">
                    {{ $npm }}
                </span>

            </div>


            <div class="info-item">

                <span class="info-label">
                    Kelas
                </span>

                <span class="info-value">
                    {{ $kelas }}
                </span>

            </div>

        </div>


        <!-- FOOTER -->
        <div class="footer">
            Universitas Lampung
        </div>

    </div>

</body>

</html>