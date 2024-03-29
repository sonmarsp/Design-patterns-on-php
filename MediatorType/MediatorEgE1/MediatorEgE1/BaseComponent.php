<?php
namespace MediatorEgE1;

/**
 * Базовый компонент обеспечивает базовую функциональность хранения 
 * экземпляра посредника внутри объектов компонентов
 */

class BaseComponent
{
    protected $mediator;

    public function __construct(Mediator $mediator = null)
    {
        $this->mediator = $mediator;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }
}