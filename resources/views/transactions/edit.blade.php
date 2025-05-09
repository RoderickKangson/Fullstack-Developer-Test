@include('transactions.form-wrapper', [
    'title' => 'Edit Transaction', 
    'action' => url("/transaction/{$transaction->id}"), 
    'method' => 'POST',
    'transaction' => $transaction
])