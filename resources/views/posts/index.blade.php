<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Status</th>
    </tr>
@foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->status }}</td>
    </tr>
@endforeach
</table>
