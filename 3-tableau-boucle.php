<?php 
$userName1 = "Alice";
$userEmail1 = "alice@example.com";
$userPassword1 = "Mondepasse123";
$userAge1 = 40;


$userName2 = "Jean";
$userEmail2 = "jean@example.com";
$userPassword2 = "securite123";
$userAge1 = 35;

$user1 = ["Alice","alice@example.com","Mondepasse123", 40 ];
$user2 = ["Jean","jean@example.com","securite123", 35];

// mot de passe  2eme utilisateur
echo $user2[2];
echo"Nom :  ". $user1[0] .  "Email:  ". $user1[1]. "MDP:  " . $user1[2]. "age: ".$user1[3];

$user1 = ["Alice","alice@example.com","Mondepasse123", 40 ];
$user2 = ["Jean","jean@example.com","securite123", 35];
$users = [ $user1, $user2];

$users = [
          ["Alice","alice@example.com","Mondepasse123", 40 ],
          ["Jean","jean@example.com","securite123", 35]
        ];
// boucle
        $count =1;
        while($count <= 15){
            echo "ceci est un compteur";
            $count++;
        }
// -----------------------------
$users = [
    ["Alice","alice@example.com","Mondepasse123", 40 ],
    ["Jean","jean@example.com","securite123", 35]
  ];

echo "<br>";
echo $users[1][2];
echo "<br>";
echo count($users);

$index = 0;
echo "<br>";
while($index < count($users)){

    echo "Nom " . $users[$index][0]. "<br>";
    echo "mdp " . $users[$index][1]. "<br>";
    echo "email " . $users[$index][2]. "<br>";
    echo "age " . $users[$index][3]. "<br>";
    $index++;
}

$user1 = [
  "name" => "Jean",
  "email" => "jean@example.com",
  "password" => "passs123",
  "age" => 22
];

echo $user1["password"];


$users = [
  [
      "name" => "Alice",
      "email" => 'alice@example.com',
      "password" => "Motdepasse123",
      "age" => 40
  ],
  [
      "name" => "Jean",
      "email" => 'jean@example.com',
      "password" => "Securite123",
      "age" => 35
  ],
  [
      "name" => "John",
      "email" => 'john@example.com',
      "password" => "Password123",
      "age" => 25
  ],
  [
      "name" => "Emma",
      "email" => 'emma@example.com',
      "password" => "Secret123",
      "age" => 30
  ],
  [
      "name" => "Michael",
      "email" => 'michael@example.com',
      "password" => "Pass123",
      "age" => 28
  ],
  [
      "name" => "Sophia",
      "email" => 'sophia@example.com',
      "password" => "Secure123",
      "age" => 32
  ],
  [
      "name" => "William",
      "email" => 'william@example.com',
      "password" => "Password456",
      "age" => 27
  ],
  [
      "name" => "Olivia",
      "email" => 'olivia@example.com',
      "password" => "Secret456",
      "age" => 29
  ],
  [
      "name" => "James",
      "email" => 'james@example.com',
      "password" => "Pass456",
      "age" => 31
  ]
];

// echo $users["name"];


$index = 0;

while ($index < count($users)) {


  echo $users[$index]["name"] . "<br>";
  echo $users[$index]["email"] . "<br>";
  echo $users[$index]["password"] . "<br>";
  echo $users[$index]["age"] . "<br>";

  $index++;
}


echo  '<br>';
echo  '<br>';
foreach($users as $user){
  echo $user['name']. '<br>';

}


?>