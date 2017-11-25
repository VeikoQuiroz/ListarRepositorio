<?php
namespace Repositorios\Domain;

class Repositorio
{
	private $id;
	Private $name
    private $fullname;

    public function __construct($id, $name, $fullname)
    {
		$this->id = $id;
        $this->name = $name;
        $this->fullname = $fullname;
    }

	public function getId()
    {
        return $this->id;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getFullName()
    {
        return $this->fullname;
    }
}
