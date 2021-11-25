<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
@foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->status }}</td>
        <td><a href="/posts/{{ $post->id }}">show</a></td>
    </tr>
@endforeach
</table>
