
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteAccountModalLabel">Delete Account - {{$account->username}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('accounts/delete/' .$account->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this account?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>Edit account</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('accounts/' .$account->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="{{$account->username}}">
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
                <label for="balance">balance</label>
                <input type="numeric" name="balance" class="form-control" value="{{$account->balance}}">
                @error('balance')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">Delete account</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit account</button>
            </div>
        </form>
    </div>
</div>

@endsection
