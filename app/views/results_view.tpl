<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/Credit-Calc-8/css/results.css">
</head>
<body>

<div class = "back">
<a class="pure-button pure-button-primary" href="http://localhost/Credit-Calc-8">BACK</a>
</div>

<div class = "table">	
<table id="tab_people" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>amount</th>
		<th>years</th>
		<th>percentages</th>
		<th>result</th>
        <th>data</th>
	</tr>
</thead>
<tbody>
{foreach $records as $rec}
{strip}
	<tr>
		<td> {$rec["amount"]} </td>
		<td> {$rec["years"]} </td>
		<td> {$rec["percentages"]} </td>
		<td> {$rec["result"]} </td>
		<td> {$rec["data"]} </td>
	</tr>
{/strip}
{/foreach}
</tbody>

</div>
{include file='messages.tpl'}
</body>
</html>