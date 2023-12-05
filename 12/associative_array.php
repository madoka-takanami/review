<?php

const MY_COMPETENCIES = [
    'web development' => 4,
    'game development' => 6,
    'mobile development' => 0,
    'infrastructure' => 3,
    'DevOps' => 1,
];

echo "------------- 10段階評価 -------------\n";
echo 'web development:' . MY_COMPETENCIES['web development'] . "\n";
echo 'game development:' . MY_COMPETENCIES['game development'] . "\n";
echo 'mobile development:' . MY_COMPETENCIES['mobile development'] . "\n";
echo 'infrastructure:' . MY_COMPETENCIES['infrastructure'] . "\n";
echo 'DevOps:' . MY_COMPETENCIES['DevOps'] . "\n";

$my_certificate = [];

$my_certificate["driver's license"] = "expired";
$my_certificate["Electrician license"] = "valid";
$my_certificate["Installing Wifi connection license"] = "valid";
$my_certificate["Computation license"] = "valid";

echo "driver's license:" . $my_certificate["driver's license"] . "\n";
echo 'Electrician license:' . $my_certificate['Electrician license'] . "\n";
echo 'Installing Wifi connection license:' . $my_certificate['Installing Wifi connection license'] . "\n";
echo 'Computation license:' . $my_certificate['Computation license'] . "\n";