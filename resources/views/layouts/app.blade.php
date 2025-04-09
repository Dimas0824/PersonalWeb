<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    <style>
        .bg-primary {
            background-color: #0047AB;
        }

        .btn-primary {
            background-color: #0066ff;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 9999px;
        }

        .btn-secondary {
            background-color: white;
            color: #333;
            padding: 0.5rem 1.5rem;
            border-radius: 9999px;
        }

        .skill-pill {
            background-color: #0066ff;
            color: white;
            padding: 0.25rem 1rem;
            border-radius: 9999px;
            display: inline-block;
        }

        .nav-item {
            margin: 0 1rem;
            font-weight: 500;
        }

        .service-card {
            border-bottom: 3px solid #0066ff;
            padding: 1rem;
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="bg-gray-50">
    {{ $slot }}

    @livewireScripts
</body>

</html>
