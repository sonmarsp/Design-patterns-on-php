<?php
namespace BuilderEgE1;

/**
 * Директор отвечает только за выполнение шагов построения в определённой
 * последовательности. Это полезно при производстве продуктов в определённом
 * порядке или особой конфигурации. Строго говоря, класс Директор необязателен,
 * так как клиент может напрямую управлять строителями.
 */
class Director
{
   private $builder;

   /**
     * Директор работает с любым экземпляром строителя, который передаётся ему
     * клиентским кодом. Таким образом, клиентский код может изменить конечный
     * тип вновь собираемого продукта.
     */

   public function setBuilder(Builder $builder)
   {
      $this->builder = $builder;
   }  

   /**
     * Директор может строить несколько вариаций продукта, используя одинаковые
     * шаги построения.
     */

    public function buildMinimalVariableProduct()
    {
        $this->builder->producePartA();
    }

    public function buildFullFeaturedProduct()
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }


}