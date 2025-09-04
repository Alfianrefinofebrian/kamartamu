<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Detail</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/property.jsx'])
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body style="background:#FFFBDE; margin:0;">

  <div id="property-detail" data-property-id="{{ $propertyId }}" class="pt-20 lg:pt-28" style="padding-top:5rem;"></div>

</body>
</html>
