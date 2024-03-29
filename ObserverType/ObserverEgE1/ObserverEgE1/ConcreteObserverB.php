<?php
namespace ObserverEgE1;

/**Конкретные наблюдатели реагируют на обновления, 
 * выпущенные Издателем, к которому они прикреплены.
 */

class ConcreteObserverB implements \SplObserver
{
  public function update(\SplSubject $subject): void
  {
      if($subject->state == 0 || $subject->state >=2){
          echo "ConcreteObserverB: реакция на событие";
      }
  }

}