@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <h4 class="page-title">Forms</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Acount</div>
                    </div>
                    <form action="{{ route('editEmployee', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" hidden value="update_account" name="form_type" readonly>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="email">Name</label>
                                <input name="name" type="text" class="form-control" id="email"
                                    placeholder="Enter Email" value="{{ $employee->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    placeholder="Enter Email" value="{{ $employee->email }}" readonly>
                            </div>
                            {{-- <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password" class="form-control" id="password" placeholder="Password" >
                            </div> --}}
                            <div class="form-group">
                                <label for="squareSelect">Role</label>
                                <select name="role" class="form-control input-square" id="squareSelect">
                                    <option value="employee">Employee</option>
                                    <option value="manager" {{ $employee->role == 'manager' ? 'selected' : '' }}>Manager
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="demo">
                                <input type="checkbox" {{ $employee->is_active == true ? 'checked' : '' }}
                                    data-toggle="toggle" data-onstyle="success" data-style="btn-round">
                            </p>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-success">Update Account</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Information</div>
                    </div>
                    <form action="{{ route('editEmployee', $employee->id) }}" method="POST">
                        @csrf
                        <input type="text" hidden value="update_information" name="form_tpye" readonly>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Tax code</label>
                                <input name="tax_code" type="text" class="form-control input-square"
                                    placeholder="Tax Code">
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
                                <input name="address" type="text" class="form-control input-square"
                                    placeholder="Address">
                            </div>
                            <div class="form-group">
                                <label for="formFile" class="form-label">Avatar</label>
                                <input name="avatar" class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-success">Update Information</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
