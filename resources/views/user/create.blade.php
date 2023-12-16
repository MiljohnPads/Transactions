
@extends('pages.base')

@section('content')
    <h1>Create new User</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('users/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="full_name">Full_name</label>
                    <input class="form-control" type="text" name="full_name">
                    @error('full_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address">
                    @error('address')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="text" name="phone">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>



                <div class="form-group mt-2">
                        <label for="sex">Sex</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" id="male" value="male">
                            <label class="form-check-label" for="male">
                                male
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" id="female" value="female">
                            <label class="form-check-label" for="female">
                                female
                            </label>
                        </div>

                        @error('sex')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                </div>



                <div class="form-group mt-2">
                    <label for="occupation">Occupation</label>
                    <input class="form-control" type="text" name="occupation">
                    @error('occupation')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary">
                        Add User</button>





                </div>
            </form>
        </div>
    </div>




@endsection
