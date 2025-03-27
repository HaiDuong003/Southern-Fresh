@extends('layouts.app')
@section('content')
<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Forms</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Base Form Control</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" fdprocessedid="ldu2l5">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" fdprocessedid="sxz3x8">
                        </div>
                        <div class="form-group">
                            <label for="squareSelect">Role</label>
                            <select name="role" class="form-control input-square" id="squareSelect">
                                <option value="employee">Employee</option>
                                <option value="manager">Manager</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="demo">
                            <input type="checkbox" {{ $employee->is_active == true ? 'checked' : '' }} data-toggle="toggle" data-onstyle="success"
                                data-style="btn-round">
                        </p>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Control Styles</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="squareInput">Square Input</label>
                                <input type="text" class="form-control input-square" id="squareInput" placeholder="Square Input" fdprocessedid="yraumj">
                            </div>
                            <div class="form-group">
                                <label for="squareSelect">Square Select</label>
                                <select class="form-control input-square" id="squareSelect" fdprocessedid="yvnnyr">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pillInput">Pill Input</label>
                                <input type="text" class="form-control input-pill" id="pillInput" placeholder="Pill Input" fdprocessedid="d0mhmc">
                            </div>
                            <div class="form-group">
                                <label for="pillSelect">Pill Select</label>
                                <select class="form-control input-pill" id="pillSelect" fdprocessedid="bxyus1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="solidInput">Solid Input</label>
                                <input type="text" class="form-control input-solid" id="solidInput" placeholder="Solid Input" fdprocessedid="wt0jxl">
                            </div>
                            <div class="form-group">
                                <label for="solidSelect">Solid Select</label>
                                <select class="form-control input-solid" id="solidSelect" fdprocessedid="oq2gtk">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>											
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" fdprocessedid="sukchqe">Submit</button>
                            <button class="btn btn-danger" fdprocessedid="t0nv9f">Cancel</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Control Styles</div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="largeInput">Large Input</label>
                                <input type="text" class="form-control form-control-lg" id="largeInput" placeholder="Large Input" fdprocessedid="1ggl1y">
                            </div>
                            <div class="form-group">
                                <label for="largeInput">Default Input</label>
                                <input type="text" class="form-control form-control" id="defaultInput" placeholder="Default Input" fdprocessedid="hdrcu8">
                            </div>
                            <div class="form-group">
                                <label for="smallInput">Small Input</label>
                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input" fdprocessedid="pvtcn">
                            </div>
                            <div class="form-group">
                                <label for="largeSelect">Large Select</label>
                                <select class="form-control form-control-lg" id="largeSelect" fdprocessedid="e4xbp">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="defaultSelect">Default Select</label>
                                <select class="form-control form-control" id="defaultSelect" fdprocessedid="c3z6rn">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="smallSelect">Small Select</label>
                                <select class="form-control form-control-sm" id="smallSelect" fdprocessedid="ee79gd">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success" fdprocessedid="x4gdzf">Submit</button>
                            <button class="btn btn-danger" fdprocessedid="s13br">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection