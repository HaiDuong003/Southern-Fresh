@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('addEmployee') }}" method="POST">
                    @csrf
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Account</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name </label>
                                <span style="font-size: 12px; color: red;">
                                    @error('name')
                                        {{ $message ? $message : ' ' }}
                                    @enderror
                                </span>
                                <input name="name" type="text" class="form-control input-square" placeholder="Name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label>Email </label>
                                <span style="font-size: 12px; color: red;">
                                    @error('email')
                                        {{ $message ? $message : ' ' }}
                                    @enderror
                                </span>
                                <input name="email" type="email" class="form-control input-square" placeholder="Email"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <span style="font-size: 12px; color: red;">
                                    @error('password')
                                        {{ $message ? $message : ' ' }}
                                    @enderror
                                </span>
                                <input name="password" type="password" class="form-control input-square"
                                    placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input name="password_confirmation" type="password" class="form-control input-square"
                                    placeholder="Confirm password">
                            </div>
                            <div class="form-group">
                                <label for="squareSelect">Role</label>
                                <select name="role" class="form-control input-square" id="squareSelect">
                                    <option value="employee">Employee</option>
                                    <option value="manager">Manager</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-action">
                            <button id="submitSingle" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                {{-- <form action="{{ route('addEmployee') }}" method="POST">
                    @csrf --}}
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Information</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tax code</label>
                            <input name="tax_code" type="text" class="form-control input-square" placeholder="Tax Code">
                        </div>
                        <div class="form-group">
                            <label>Bank account</label>
                            <input name="text" type="email" class="form-control input-square"
                                placeholder="Bank Account">
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input name="phone_number" type="text" class="form-control input-square"
                                placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control input-square" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label">Avatar</label>
                            <input name="avatar" class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
                <button type="button" id="submitAll" class="btn btn-success">Submit All</button>
                {{-- </form> --}}
            </div>
        </div>
    </div>
    <script>
        let submitAll = document.getElementById('submitAll');
        submitAll.addEventListener("click", function() {
            console.log('abc');
            document.getElementById('submitSingle').submit();
        });
    </script>
@endsection
