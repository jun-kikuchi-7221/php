<?php
//header('Content-Type: text/plain; charset=utf-8');
$people = [
    ['Taro', 25, 'men'],
    ['Jiro', 20, 'men'],
    ['Hanako', 16, 'women']
];

foreach($people as $person) {
    echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')' . '<br />';
}

//echo $people[1]["last_name"];
//var_dump($people);
