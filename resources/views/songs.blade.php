<html>
    <title>Songs Page </title>
    <body>
         <h1>Songs Blade template</h1>

         <table border="3">
<tr>
<th>Title</th>
<th>Artist</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->title }}</td>
<td>{{ $song->artist }}</td>
</tr>
@endforeach
</table>
    </body>
</html>