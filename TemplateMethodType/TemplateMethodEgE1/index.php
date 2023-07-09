<?php
namespace TemplateMethodEgE1;
include_once 'autoload.php';


echo "Шаблонный метод (Template method) - поведенческий шаблон проектирования,
определяет основу алгоритма и позволяющий наследникам переопределять некоторые шаги
алгоритма, не изменяя его структуры в целом.




<i>[Электронный ресурс]: Википедия. Свободная энциклопедия.</i>
<br><br><br>";

$t = new testclass();
echo $t->test();

/**Клиентский код вызывает шаблонный метод для выполнения алгоритма. 
 * Клиентский код не знать конкретный класс объекта, с которым работает,
 * при условии, что он работает с объектами через интерфейс их
 * базового класса.
 */

function clientCode(AbstractClass $class)
{

  $class->templateMethod();

}

echo "Один и тот же клиентский код может работать с разными подклассами";
clientCode(new ConcreteClass1());
echo "<br>";

echo "Один и тот же клиентский код может работать с разными подклассами";
clientCode(new ConcreteClass2());



?>