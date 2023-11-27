<html>
<title>Songs</title>
<body>
<h2>Songs</h2>
<table>
<tr>
<th>Title</th>
<th>Artist</th>
<th>Duration</th>
<th>Tempo</th>
</tr>
@foreach ($songs as $song)
<tr>
<td>{{ $song->getTitle() }}</td>
<td>{{ $song->getArtist() }}</td>
<td>{{ $song->getTime() }}</td>
<td>{{ $song->getTempo() }}</td>
</tr>
@endforeach
</table>
</body>
</html>