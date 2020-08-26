<?php
require_once(__DIR__ . '/User.php');

$users = [
  [
    'name' => 'Sara',
    'surname' => 'Lusa',
    'eta' => 21,
    'mail' => 'sara@mail.it'
  ],
  [
    'name' => 'Pippo',
    'surname' => 'Verdi',
    'eta' => 30,
    'mail' => 'pippo@mail.it'
  ],
  [
    'name' => 'Emma',
    'surname' => 'Marrone',
    'eta' => 45,
    'mail' => 'emma@mail.it'
  ],
  [
    'name' => 'Irene',
    'surname' => 'Grandi',
    'eta' => 22,
    'mail' => 'irene@mail.it'
  ]
];

foreach ($users as $user) {
  $utente = new User($user['name'], $user['surname']);
  echo $utente->getFullName() . '<br>' . 'Età: ' . $user['eta'] . '<br>' . 'Mail: ' . $user['mail'] . '<br><br>';
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
