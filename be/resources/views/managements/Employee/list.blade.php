@extends('layouts.app')
@section('content')
    <div class="card-body">
        <span style="font-size: 24px; margin-right: 20px;">Employees list</span>
        <a href="{{ route('addEmployee') }}"><button class="btn btn-primary">Normal</button></a>
        <form class="demo row">
            <div class="dropdown col-9">
                <select style="border: none" name="is_active" id="is_active" class="btn form-select" aria-label="">
                    <option value="all">All</option>
                    <option value="true">Activated</option>
                    <option value="false">None Active</option>
                </select>
            </div>
            {{-- <form class="navbar-right navbar-form nav-search col-3 align-self-end" style="padding-bottom: 20px"
                action=""> --}}
            <div class="navbar-right navbar-form nav-search col-3 align-self-end" style="padding-bottom: 20px">
                <div class="input-group">
                    <input type="text" placeholder="Search by name ..." class="form-control" name="name" id="name">
                    <div class="input-group-append">
                        <span class="input-group-text">
                            <i class="la la-search search-icon"></i>
                        </span>
                    </div>
                </div>
            </div>
            {{-- </form> --}}
        </form>

        <div id="employeeTable">
            @include('components.list_employee')
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            function LoadEmployee(page = 1){
                let name = $('#name').val();
                let is_active = $('#is_active').val();
                $.ajax({
                    url: "{{ route('filterEmployee') }}?page=" + page,
                    type: "GET",
                    data: {name: name, is_active: is_active},
                    success: function(response){
                        // render view
                        $('#employeeTable').html(response);
                        // remove class active in paginate
                        $(".pagination .page-item").removeClass("active");
                        // add class active in paginate with id = item + page--
                        $("#item" + page).addClass("active");
                    },
                });
            }

            // call ajax when fill input
            $('#name').on('keyup', function(){
                LoadEmployee();
            });

            // call ajax when select value
            $('#is_active').on('change', function(){
                LoadEmployee();
            });

            // call ajax when click in paginate
            $(document).on('click', '.pagination a', function(event){
                event.preventDefault(); // block reload website
                let page = $(this).attr('href').split('page=')[1]; // get page by url
                LoadEmployee(page);
            });
        });
    </script>
@endsection

