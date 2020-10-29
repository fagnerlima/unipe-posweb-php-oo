<?php

namespace Classes;

class Carnivoro extends Animal
{
    public function habitoAlimentar()
    {
        echo "<p><b>Carnívoro</b> come {$this->getCome()}</p>";
    }
}
