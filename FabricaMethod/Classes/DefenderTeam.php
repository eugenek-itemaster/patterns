<?php
namespace FabricaMethod\Classes;

class DefenderTeam extends Team
{
    public function createPlayer()
    {
        return new Defender();
    }
}