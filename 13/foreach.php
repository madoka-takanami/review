<?php

const MY_COMPETENCIES = [
    'web development' => 4,
    'game development' => 6,
    'mobile development' => 0,
    'infrastructure' => 3,
    'DevOps' => 1,
];

echo "---------------- 10段階評価 ----------------\n";
foreach (MY_COMPETENCIES as $field => $rank) {
    echo "The knowledge of " . $field . " is " . $rank . " out of 10\n\n";
}

$my_certificates = [];

$my_certificates["driver's license"] = "expired";
$my_certificates["Electrician license"] = "valid";
$my_certificates["Installing Wifi connection license"] = "valid";
$my_certificates["Computation license"] = "valid";

foreach ($my_certificates as $license => $status) {
    echo $license . " is " . $status . "\n\n";
}