<?php


namespace Soft\SeedWork;


abstract class Entity
{
    private int $_id;
    public array $_domainEvents;
    /**
     * @return int
     */
    public function id(): int
    {
        return $this->_id;
    }

    /** @param int $id */
    public function setId(int $id): void
    {
        $this->_id = $id;
    }

    /**
     * @param \Soft\SeedWork\INotification $notification
     */
    public function addDomainEvent(INotification $notification): void
    {
        $this->_domainEvents[] = $notification;
    }

    public function removeDomainEvent(INotification $notification)
    {

    }

}
