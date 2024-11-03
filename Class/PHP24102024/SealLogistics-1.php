<?php
namespace classlogistics;
class SealLogistics extends logistics
{
    private string $bysea;


    public function __construct($type, $km)
    {
        parent::__construct($type, $km);
    }

    public function getPatrolsteysh(): string
    {
        return $this->patrolsteyshn;
    }

    public function setPatrolsteyshn(string $patrolstayshn): void
    {
        $this->patrolsteyshn = $patrolsteyshn;
    }

    public function displayData(): string
    {
        $string = $this->display() . ', Class logistics';
        if (isset($this->patrolsteyshn) && $this->gePatrolsteyshn() != '') 
            $string .= ', patrolsteyshn: ' . $this->getPatrolsteyshn();
        
        return $string;
    }
}
