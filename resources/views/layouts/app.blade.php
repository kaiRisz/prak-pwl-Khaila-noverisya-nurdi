<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Laravel App' }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: "Segoe UI", Arial, sans-serif;

            background:
                radial-gradient(circle at 15% 20%, rgba(78, 151, 255, 0.20), transparent 30%),
                radial-gradient(circle at 85% 80%, rgba(0, 115, 230, 0.18), transparent 30%),
                linear-gradient(135deg, #07111f, #0d1d32 45%, #102c49);

            color: #eaf3ff;
        }

        .page-wrapper {
            min-height: 100vh;
            padding: 50px 20px;
        }

        .main-card {
            width: 100%;
            max-width: 850px;
            margin: 0 auto;

            background: rgba(255, 255, 255, 0.96);
            color: #172b42;

            border: 1px solid rgba(255, 255, 255, 0.35);
            border-radius: 24px;

            padding: 35px;

            box-shadow:
                0 25px 60px rgba(0, 0, 0, 0.35),
                inset 0 1px 0 rgba(255, 255, 255, 0.7);
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 8px;
            color: #102a46;
        }

        .page-subtitle {
            color: #718096;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #263f5c;
            margin-bottom: 8px;
        }

        .form-control,
        .form-select {
            min-height: 48px;

            border: 1px solid #c8d5e5;
            border-radius: 12px;

            background: #f8fbff;
            color: #1c3048;

            padding: 10px 14px;

            transition: all 0.2s ease;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #3984d8;

            box-shadow:
                0 0 0 4px rgba(57, 132, 216, 0.14);

            background: #ffffff;
        }

        .btn-metal {
            border: none;
            border-radius: 12px;

            padding: 12px 25px;

            font-weight: 600;
            color: white;

            background:
                linear-gradient(
                    135deg,
                    #1f5f9e,
                    #3787d5,
                    #1d568f
                );

            box-shadow:
                0 8px 18px rgba(31, 95, 158, 0.30);

            transition: all 0.2s ease;
        }

        .btn-metal:hover {
            color: white;
            transform: translateY(-2px);

            box-shadow:
                0 12px 24px rgba(31, 95, 158, 0.40);
        }

        .table-container {
            overflow-x: auto;
            border-radius: 16px;
            border: 1px solid #dce6f1;
        }

        .table {
            margin: 0;
            vertical-align: middle;
        }

        .table thead th {
            background:
                linear-gradient(
                    135deg,
                    #173b61,
                    #286a9f
                );

            color: white;
            border: none;

            padding: 15px;
            font-weight: 600;
        }

        .table tbody td {
            padding: 15px;
            border-color: #e5edf6;
            color: #31465d;
        }

        .table tbody tr {
            background: white;
            transition: background 0.2s ease;
        }

        .table tbody tr:hover {
            background: #f1f7fd;
        }

        .badge-kelas {
            display: inline-block;

            padding: 6px 12px;

            border-radius: 20px;

            background: #e6f1ff;
            color: #21639e;

            font-size: 13px;
            font-weight: 600;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;

            margin-bottom: 25px;
        }

        .brand {
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;

            color: #4d91d1;
        }

        @media (max-width: 576px) {
            .page-wrapper {
                padding: 25px 12px;
            }

            .main-card {
                padding: 24px 18px;
                border-radius: 18px;
            }

            .page-title {
                font-size: 26px;
            }

            .top-bar {
                align-items: flex-start;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    @yield('content')

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>