<html>

<head>
<title>Kategori Berita</title>
</head>

<body>
<table border="1">
<tr>
<td>ID</td>
<td>Nama</td>
<td>Users Id</td>
<td>Create</td>
</tr>

@foreach($listKategoriBerita as $item)

<tr>
<td>{!!$item->id!!}</td>
<td>{!!$item->nama!!}</td>
<td>{!!$item->users_id!!}</td>
<td>{!!$item->created_at!!}</td>
</tr>

@endforeach
</table>

</body>

</html>