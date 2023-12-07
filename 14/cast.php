<?php

const STR_NUM1 = '12345';
const STR_NUM2 = '54321';

var_dump(STR_NUM1);
var_dump(STR_NUM2);

define('RESULT', intval(STR_NUM1) + STR_NUM2);

echo intval(STR_NUM1) . " + " . STR_NUM2 . " = " . RESULT;
