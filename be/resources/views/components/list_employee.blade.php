@foreach($list as $key => $item)
<tr id="">
    <td>{{ ++$key }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->is_active == true ? 'Activated' : 'Non Active' }}</td>
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