<?php
require_once(__DIR__ . '/User.php');

$users = [
  [
    'name' => 'Sara',
    'surname' => 'Lusa',
  ],
  [
    'name' => 'Pippo',
    'surname' => 'Verdi',
  ],
  [
    'name' => 'Emma',
    'surname' => 'Marrone',
    'mail' => '',
  ],
  [
    'name' => 'Irene',
    'surname' => 'Grandi',
    'mail' => '',
  ]
];

foreach ($users as $user) {
  $utente = new User($user['name'], $user['surname']);
  echo 'Blogger: ' . $utente->getFullName() . '<br>';
}

// $sara = new User('Sara', 'Lusa');
// $sara->eta = 21;
// echo 'Blogger: ' . $sara->getFullName() . '<br>';
// // var_dump($sara);
//
// $pippo = new User('Pippo', 'Verdi');
// $pippo->eta = 30;
// echo 'Blogger: ' . $pippo->getFullName() . '<br>';
// // var_dump($pippo);

?>
