<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/trix.min.css') }}">
</head>
<body>
<form method="post" action={{ url('submit') }}>
    {{ csrf_field() }}
    <p>
        <input id="x" type="hidden" name="content" value="<h1>This is content</h1>"/>
        <trix-editor input="x"></trix-editor>
    </p>
    <input type="submit" name="submit" value="Submit"/>
</form>

<script src="{{ asset('js/trix.min.js') }}"></script>
<script src="{{ asset('js/attachments.js') }}"></script>
</body>
</html>
