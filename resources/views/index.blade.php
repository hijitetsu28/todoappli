<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
	<link rel="stylesheet" href="/css/reset.css">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body>
	<div class="mein">
		<div class="container">
		<div class="up__container">
			<h1>Todo List</h1>
			@if (count($errors) > 0)
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			@endif
			<form action="/todo/create" method="post" class="create">
			@csrf
				<input type="text" name="content" class="create-text">
				<button class="create-btn">追加</button>
			</form>
		</div>
		<div class="under__container">
			<table>
				<tr>
					<th>作成日</th>
					<th>タスク名</th>
					<th>更新</th>
					<th>削除</th>
				</tr>
				@foreach($items as $task)
				<tr>
					<td>{{$task->created_at}}</td>
				<form action="{{ route('todo.update', ['id' => $task->id]) }}" method="post">
				@csrf
					<td>
						<input type="text" name="content" value="{{$task->content}}" class="edit-text">
					</td>
					<td><button class="update-btn">更新</button></td>
				</form>
				<form action="{{ route('todo.delete', ['id' => $task->id]) }}" method="post">
				@csrf
					<td><button class="delete-btn">削除</button></td>
				</form>
				</tr>
				@endforeach
			</table>
		</div>
		</div>
	</div>
</body>
</html>