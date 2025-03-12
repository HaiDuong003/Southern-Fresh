@extends('layouts.app')
@section('content')
    <div class="card-body">
        <span style="font-size: 24px; margin-right: 20px;">Employees list</span>
        <a href="{{ route('addEmployee') }}"><button class="btn btn-primary">Normal</button></a>
        <div class="demo row">
            <div class="dropdown col-9">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                    Fill
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                    <a class="dropdown-item" href="#">Male</a>
                    <a class="dropdown-item" href="#">Female</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">All</a>
                </ul>
            </div>
            <form class="navbar-right navbar-form nav-search col-3 align-self-end" style="padding-bottom: 20px"
                action="">
                <div class="input-group">
                    <input type="text" placeholder="Search by name ..." class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-search search-icon"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>

        <table class="table table-head-bg-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove" fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove" fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove" fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove" fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove"
                                fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove"
                                fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove"
                                fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove"
                                fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>Otto</td>
                    <td>
                        <div class="form-button-action">
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                                fdprocessedid="qqrqzq">
                                <i class="la la-edit"></i>
                            </button>
                            <button type="button" data-toggle="tooltip" title=""
                                class="btn btn-link btn-simple-danger" data-original-title="Remove"
                                fdprocessedid="ds9ov5">
                                <i class="la la-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <ul class="pagination pg-primary">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
        <p></p>
    </div>
@endsection
