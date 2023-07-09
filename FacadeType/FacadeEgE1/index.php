<?php
namespace FacadeEgE1;
include_once 'autoload.php';

echo "Шаблон фасад (англ. Facade) — структурный шаблон проектирования, позволяющий скрыть сложность 
системы путём сведения всех возможных внешних вызовов к одному объекту, делегирующему их 
соответствующим объектам системы. <i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
echo $t->test();

/**
 * Пользователям предоставляется фасад
 * который скрывает всю сложность работы с отдельным 
 * компонентом
 * 
 */

 $computer = new Computer();
 $computer->startComputer();
?>