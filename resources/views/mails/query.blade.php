<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>New Query</title>
</head>

<body>
    <h1>Hello you have a new query from MSASTS</h1>
    <hr />
    <p><strong>Sender Name:</strong> {{ $query->name }}</p>
    <p><strong>Sender Email:</strong>
        <a href="mailto:{{ $query->email }}?subject=Reply for your query: {{ $query->message }}">{{ $query->email }}</a>
    </p>
    <p><strong>Sender Phone:</strong> <a href="tel:{{ $query->phone }}">{{ $query->phone }}</a></p>
    <p><strong>Sender Message:</strong></p>
    <hr />
    <div>{{ $query->message }}</div>
</body>

</html>
