<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olympic</title>
	<link rel="stylesheet" href="./css/app.css">
</head>

<body>
	<div class="header">
		<a href="" class="CRUD">CRUD</a>
		<a href="" class="search">Поиск</a>
		<a href="" class="requests">Запросы к базе</a>
	</div>
	<div class="main">
		<div class="tables-list">
			Таблицы:
			<a href="" class="table-item">competition</a>
			<a href="" class="table-item">country</a>
			<a href="" class="table-item">result</a>
			<a href="" class="table-item">sportsmen</a>
			<a href="" class="table-item">sports_ground</a>
			<a href="" class="table-item">sport_type</a>
		</div>
		<div class="content">
			<table class="table">
				<tr class="string">
					<th class="cell">competition_id</th>
					<th class="cell">competition_date</th>
					<th class="cell">competition_time</th>
					<th class="cell">sport_type_id</th>
					<th class="cell">sports_ground_id</th>
				</tr>
				<tr class="string">
					<td class="cell">1</td>
					<td class="cell">2019-06-12</td>
					<td class="cell">12:00:00</td>
					<td class="cell">1</td>
					<td class="cell">1</td>
					<td class="cell"><a href="" class="change">Изменить</a></td>
					<td class="cell"><a href="" class="change">Удалить</a></td>
				</tr>

			</table>

		</div>
	</div>
</body>

</html>