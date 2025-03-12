@extends('layouts.app')
@section('content')
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Form Control Styles</div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="squareInput">Square Input</label>
                    <input type="text" class="form-control input-square" id="squareInput" placeholder="Square Input"
                        fdprocessedid="jy44k4">
                </div>
                <div class="form-group">
                    <label for="squareSelect">Square Select</label>
                    <select class="form-control input-square" id="squareSelect" fdprocessedid="i2kgzh">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pillInput">Pill Input</label>
                    <input type="text" class="form-control input-pill" id="pillInput" placeholder="Pill Input"
                        fdprocessedid="rnx5b">
                </div>
                <div class="form-group">
                    <label for="pillSelect">Pill Select</label>
                    <select class="form-control input-pill" id="pillSelect" fdprocessedid="j5a80m">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="solidInput">Solid Input</label>
                    <input type="text" class="form-control input-solid" id="solidInput" placeholder="Solid Input"
                        fdprocessedid="l4sfrt">
                </div>
                <div class="form-group">
                    <label for="solidSelect">Solid Select</label>
                    <select class="form-control input-solid" id="solidSelect" fdprocessedid="7zyag3">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="card-action">
                <button class="btn btn-success" fdprocessedid="wnh8e">Submit</button>
                <button class="btn btn-danger" fdprocessedid="55a71b">Cancel</button>
            </div>
        </div>
    </div>
@endsection
