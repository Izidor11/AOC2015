<?php
$input = file_get_contents('input.txt');
$map = [
	[0, 0]
];

for($i = 0; $i < strlen($input); $i++)
{
	$direction = $input{$i};
	switch($direction)
	{
		case '^':
			$map[] = [$map[$i][0] + 1, $map[$i][1]];
			break;
		case 'v':
			$map[] = [$map[$i][0] - 1, $map[$i][1]];
			break;
		case '>':
			$map[] = [$map[$i][0], $map[$i][1] + 1];
			break;
		case '<':
			$map[] = [$map[$i][0], $map[$i][1] - 1];
			break;
	}
}
echo 'A miki a ' . count(array_unique($map, SORT_REGULAR)) . ' házhoz rakott legalább 1 ajit' . PHP_EOL;
$map['santa'] = [
	[0, 0]
];
$map['robosanta'] = [
	[0, 0]
];
for($i = 0; $i < strlen($input); $i++)
{
	$direction = $input{$i};
	$key = $i % 2 == 0 ? 'santa' : 'robosanta';
	$lastPosition = end($map[$key]);
	switch($direction)
	{
		case '^':
			$map[$key][$i] = [$lastPosition[0] + 1, $lastPosition[1]];
			break;
		case 'v':
			$map[$key][$i] = [$lastPosition[0] - 1, $lastPosition[1]];
			break;
		case '>':
			$map[$key][$i] = [$lastPosition[0], $lastPosition[1] + 1];
			break;
		case '<':
			$map[$key][$i] = [$lastPosition[0], $lastPosition[1] - 1];
			break;
	}
}
echo 'Következő évben:  ' . count(array_unique($map['santa'] + $map['robosanta'], SORT_REGULAR)) . ' házhoz raktak legalább 1 ajit ' . PHP_EOL;

?>