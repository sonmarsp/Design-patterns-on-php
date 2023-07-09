<?php
namespace BridgeEgE2;

/**
 *  Реализация устанавливает интерфейс для всех классов реализации.
 *  Он не должен соответсвтвовать интерфейсу Абстракции. На практике
 *  оба интерфейса могут быть совершенно разными. Как правило, интерфейс
 * реализации предоставляет только примитивные решения, в то время как
 * Абстракция определяет операции более высокого уровня, основаное на этих
 * примитивах.
 */

interface Implementation
{
    public function operationImplementation();
}