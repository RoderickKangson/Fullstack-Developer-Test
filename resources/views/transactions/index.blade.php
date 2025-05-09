<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="mb-4 text-center">Transaction History</h1>

    <div class="mb-3 text-end">
        <a href="{{ url('/transaction/create') }}" class="btn btn-primary">Add Transaction</a>
    </div>

    @foreach($transactions as $month => $items)
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">{{ \Carbon\Carbon::createFromFormat('Y-m', $month)->format('F Y') }}</h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Amount</th>
                                <th>Customer</th>
                                <th>Status</th>
                                <th>Transaction Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->productID }}</td>
                                    <td>{{ $transaction->productName }}</td>
                                    <td>${{ number_format($transaction->amount, 2) }}</td>
                                    <td>{{ $transaction->customerName }}</td>
                                    <td>
                                        @if($transaction->status == 1)
                                            <span class="badge bg-success">SUCCESS</span>
                                        @elseif($transaction->status == 0)
                                            <span class="badge bg-warning text-dark">FAILED</span>
                                        @else
                                            <span class="badge bg-danger">Cancelled</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($transaction->transactionDate)->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <a href="{{ url("/transaction/$transaction->id") }}" class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>