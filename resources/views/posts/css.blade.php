 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - @yield('title', 'Home')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Full-height layout using flexbox */
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
            margin: 0;
        }
        .content {
            flex: 1 0 auto; /* Grow and take up available space */
        }
        .footer {
            flex-shrink: 0; /* Keep footer at the bottom */
        }
    </style>
</head>
