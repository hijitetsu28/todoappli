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
	@if (count($errors) > 0)
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
  @endif
	<form action="/todo/create" method="post">
	@csrf
		<input type="text" name="content">
		<button>追加</button>
	</form>
	<table>
		<tr>
			<th>作成日</th>
			<th>タスク名</th>
			<th>更新</th>
			<th>削除</th>
		</tr>
		@foreach($items as $task)
		<form action="/todo/update" method="post">
		@csrf
			<tr>
				<td>{{$task->updated_at}}</td>
				<td>
					<input type="text" name="content" value="{{$task->content}}">
				</td>
				<td><button name="update">更新</button></td>
				<td><button>削除</button></td>
			</tr>
		</form>
		@endforeach
	</table>
</body>
</html>