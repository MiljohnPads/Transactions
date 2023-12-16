
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteTransactionModal" tabindex="-1" aria-labelledby="deleteTransactionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteTransactionModalLabel">Delete Transaction - {{$transaction->initial_deposit}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('transactions/delete/' .$transaction->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this transaction?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>Edit Transaction</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('transactions/' .$transaction->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="initial_deposit">Initial Deposit</label>
                <input type="text" name="initial_deposit" class="form-control" value="{{$transaction->initial_deposit}}">
                @error('initial_deposit')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="type">Type</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="withdraw" value="withdraw">
                    <label class="form-check-label" for="withdraw">
                        Withdraw
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="type" id="deposit" value="deposit">
                    <label class="form-check-label" for="deposit">
                        Deposit
                    </label>
                </div>

                @error('type')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="datetime">datetime</label>
                <input type="date" name="datetime" class="form-control" value="{{$transaction->datetime}}">
                @error('datetime')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group mt-2">
                <label for="source">Source</label>
                <input type="text" name="source" class="form-control" value="{{$transaction->source}}">
                @error('source')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteTransactionModal">Delete transaction</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit transaction</button>
            </div>
        </form>
    </div>
</div>

@endsection
