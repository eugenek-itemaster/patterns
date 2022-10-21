<?php
namespace FabricaMethod\Classes;

class ForwardTeam extends Team
{
    public function createPlayer()
    {
        return new Forward();
    }
}