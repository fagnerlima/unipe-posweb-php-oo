<?php

namespace Classes;

abstract class Animal
{
    protected $come;

    public function __construct(String $come)
    {
        $this->come = $come;
    }

    /**
     * Get the value of come
     */
    public function getCome()
    {
        return $this->come;
    }

    /**
     * Set the value of come
     *
     * @return  self
     */
    public function setCome($come)
    {
        $this->come = $come;

        return $this;
    }

    public abstract function habitoAlimentar();
}
