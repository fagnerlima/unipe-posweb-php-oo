<?php

namespace Classes;

class Herbivoro extends Animal
{
    public function habitoAlimentar()
    {
        echo "<p><b>Herbívoro</b> come {$this->getCome()}</p>";
    }
}
