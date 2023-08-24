<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Remote Keyboard App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<table class="keyboard-grid">
    <tr>
        <td><div class="key" data-key="1"></div></td>
        <td><div class="key" data-key="2"></div></td>
        <td><div class="key" data-key="3"></div></td>
        <td><div class="key" data-key="4"></div></td>
        <td><div class="key" data-key="5"></div></td>
    </tr>
    <tr>
        <td><div class="key" data-key="6"></div></td>
        <td><div class="key" data-key="7"></div></td>
        <td><div class="key" data-key="8"></div></td>
        <td><div class="key" data-key="9"></div></td>
        <td><div class="key" data-key="10"></div></td>
    </tr>
</table>

<!-- JavaScript code for interactions -->
<script src="{{ asset('js/keyboard.js') }}"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>
