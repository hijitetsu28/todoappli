<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
	<h2>Todo List</h2>
	<form action="/todo/create" method="post">
	@csrf
		<input type="text" name="content">
		<button>追加</button>
		<table>
			<tr>
				<th>作成日</th>
				<th>タスク名</th>
				<th>更新</th>
				<th>削除</th>
			</tr>
			<tr>
				<td>{{$items[0]}}</td>
				<td>{{$items[0]}}</td>
				<td><button>更新</button></td>
				<td><button>削除</button></td>
			</tr>
		</table>
	</form>
</body>
</html>