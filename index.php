<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 11/12/2018
 * Time: 14:35
 */

namespace index;

require('classes/classe1.php');
require('classes/classe2.php');

use maClasse1\maClasse as maClasse1;
use maClasse2\maClasse as maClasse2;


maClasse1::printSomething();
echo"<br><br>";
maClasse2::printSomething();









