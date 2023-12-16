
@extends('pages.base')

@section('content')
    <h1>Create new Account</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('accounts/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="user_id">Select User Full Name</label>
                  <select class="form-select" name="user_id" id="user_id">
                     <option hidden="true">Select User Full Name</option>
                     <option selected disabled>Select User Full Name</option>
                     @foreach ($users as $userId => $user)
                         <option value="{{$userId}}">{{$user}}</option>
                     @endforeach
                  </select>
                  @error('user_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="username">Add UserName</label>
                    <input class="form-control" type="text" name="username">
                    @error('username')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group mt-2">
                    <label for="type">Type of Account</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="bdo" value="BDO">
                        <label class="form-check-label" for="bdo">BDO</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="metrobank" value="METROBANK">
                        <label class="form-check-label" for="metrobank">Metrobank</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="paymaya" value="PAYMAYA">
                        <label class="form-check-label" for="paymaya">PayMaya</label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="gcash" value="GCASH">
                        <label class="form-check-label" for="gcash">GCash</label>
                    </div>

                    @error('type')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>


                <div class="form-group mt-2">
                    <label for="balance">Balance</label>
                    <input class="form-control" type="numeric" name="balance">
                    @error('balance')
                        <p class="text-danger">{{$message}}</p>
                    @enderror


                    <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Account
                    </button>
                </div>
            </form>
        </div>
    </div>




@endsection
