<?php
namespace FabricaMethod\Classes;

class GoalkeeperTeam extends Team
{
    public function createPlayer()
    {
        return new Goalkeeper();
    }
}