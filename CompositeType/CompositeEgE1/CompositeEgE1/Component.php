<?php
namespace CompositeEgE1;

/**
 * Базовый класс Компонент объявляет общие операции как для простых,
 * так и для сложных объектов структуры
 */

abstract class Component
{
   protected $parent;

   /**
    * При необходимости базовый компонент может объявить интерфейс для
    * установки и получения родителя компонента в древовидной структуре.
    * Он также может предоставить некоторую реализацию по умолчанию для этих методов.
    *
    *
    */
   public function setParent(Component $parent)
   {

     $this->parent = $parent;
   }

   public function getParent()
   {
       return $this->parent;
   }

   /**В некоторых случаях целесообразно определить операции управления
    * потомками прямо в базовом классе Компонент. Таким образом вам не нужно
    будет предоставлять конкретные классы компонента клиенскому коду, даже во время
    сборки дерева объектов. Недостаток такого подхода в том, что эти методы будут 
    пустыми для компонентов уровня листа
    */

    public function add(Component $component){}

    public function remove(Component $component){}

    /**
     * Базовый компонент может сам реализовывать некоторые поведение по умолчанию
     * или поручить это конкретным классам, объявив метод, содержащий поведение, абстрактным.
     */
    abstract public function operation();

} 