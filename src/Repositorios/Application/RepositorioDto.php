<?php
namespace Repositorios\Application;

use \JsonSerializable;

class RepositorioDto implements JsonSerializable
{
    private $id;
	Private $name
    private $fullname;

    public function jsonSerialize()
    {
        return [
			'id' => $this.id,
            'name' => $this->name,
            'fullname' => $this->fullname
        ];
    }

	public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setFullName($fullname)
    {
        $this->fullname = $fullname;
    }
}