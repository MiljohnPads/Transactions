
@extends('pages.base')

@section('content')
    <h1>Add Transaction</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('transactions/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="account_id">Select Username</label>
                  <select class="form-select" name="account_id" id="account_id">
                     <option hidden="true">Select Username</option>
                     <option selected disabled>Select Username</option>
                     @foreach ($accounts as $accountId => $account)
                         <option value="{{$accountId}}">{{$account}}</option>
                     @endforeach
                  </select>
                  @error('account_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="initial_deposit">Initial Deposit</label>
                    <input class="form-control" type="text" name="initial_deposit">
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
                    <label for="datetime">Date Time</label>
                    <input class="form-control" type="date" name="datetime">
                    @error('datetime')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="source">Source</label>
                    <input class="form-control" type="text" name="source">
                    @error('source')
                        <p class="text-danger">{{$message}}</p>
                    @enderror

                    <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Transaction
                    </button>
                </div>
            </form>
        </div>
    </div>




@endsection
