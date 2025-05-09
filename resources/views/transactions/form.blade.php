@php
    $isEdit = isset($transaction);
@endphp

<div class="row g-3">
    <div class="col-md-6">
        <label for="productID" class="form-label">Product ID</label>
        <input type="text" name="productID" class="form-control" value="{{ old('productID', $isEdit ? $transaction->productID : '') }}" required>
    </div>
    <div class="col-md-6">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" name="productName" class="form-control" value="{{ old('productName', $isEdit ? $transaction->productName : '') }}" required>
    </div>
    <div class="col-md-6">
        <label for="amount" class="form-label">Amount</label>
        <input type="number" name="amount" class="form-control" value="{{ old('amount', $isEdit ? $transaction->amount : '') }}" required>
    </div>
    <div class="col-md-6">
        <label for="customerName" class="form-label">Customer Name</label>
        <input type="text" name="customerName" class="form-control" value="{{ old('customerName', $isEdit ? $transaction->customerName : '') }}" required>
    </div>
    <div class="col-md-6">
        <label for="status" class="form-label">Status</label>
        <select name="status" class="form-select" required>
            <option value="1" {{ old('status', $isEdit ? $transaction->status : '') == 1 ? 'selected' : '' }}>SUCCESS</option>
            <option value="0" {{ old('status', $isEdit ? $transaction->status : '') == 0 ? 'selected' : '' }}>FAILED</option>
            <option value="2" {{ old('status', $isEdit ? $transaction->status : '') == 2 ? 'selected' : '' }}>Cancelled</option>
        </select>
    </div>
    <div class="col-md-6">
        <label for="transactionDate" class="form-label">Transaction Date</label>
        <input type="datetime-local" name="transactionDate" class="form-control"
            value="{{ old('transactionDate', $isEdit ? date('Y-m-d\TH:i', strtotime($transaction->transactionDate)) : '') }}" required>
    </div>
    <div class="col-md-6">
        <label for="createBy" class="form-label">Created By</label>
        <input type="text" name="createBy" class="form-control" value="{{ old('createBy', $isEdit ? $transaction->createBy : '') }}" required>
    </div>
    <div class="col-md-6">
        <label for="createOn" class="form-label">Created On</label>
        <input type="datetime-local" name="createOn" class="form-control"
            value="{{ old('createOn', $isEdit ? date('Y-m-d\TH:i', strtotime($transaction->createOn)) : '') }}" required>
    </div>
</div>
