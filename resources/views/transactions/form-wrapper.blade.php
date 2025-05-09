<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4">{{ $title }}</h1>
    <form method="POST" action="{{ $action }}">
        @csrf
        @if(isset($method) && $method === 'PUT')
            @method('PUT')
            @include('transactions.form', ['transaction' => $transaction ?? null])
        @else
            @include('transactions.form', ['transaction' => $transaction ?? null])
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>