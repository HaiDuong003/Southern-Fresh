<table class="table table-head-bg-success table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            <th></th>
        </tr>
    </thead>
    <tbody id="">
        @foreach($list as $key => $item)
            <tr id="">
                <td>{{ ++$key }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td class="{{ $item->is_active == true ? 'text-success' : 'text-danger' }}">{{ $item->is_active == true ? 'Activated' : 'Non Active' }}</td>
                <td>
                    <div class="form-button-action">
                        <a href="{{ route('editEmployee', $item->id) }}">
                            <button type="button" data-toggle="tooltip" title=""
                            class="btn btn-link <btn-simple-primary" data-original-title="Edit Task"
                            fdprocessedid="qqrqzq">
                            <i class="la la-edit"></i>
                        </button>
                        </a>
                        
                        <button type="button" data-toggle="tooltip" title=""
                            class="btn btn-link btn-simple-danger" data-original-title="Remove" fdprocessedid="ds9ov5">
                            <i class="la la-times"></i>
                        </button>
                    </div>
                </td>
                <td>
                    <a href="{{ route('detailEmployee', $item->id) }}">
                        <i class="la la-arrow-right"></i>
                    </a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
<ul class="pagination pg-primary">
    {{-- <x-pagination :paginator="$list" /> --}}
    {!! $list->links('components.pagination') !!}
</ul>