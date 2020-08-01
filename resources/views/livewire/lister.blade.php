<div>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Location</th>
            <th>Name</th>
            <th>Recycle</th>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->location->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->put_in_recycling_bin }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
