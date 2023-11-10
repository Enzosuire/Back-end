<?php


namespace APP\entity;

use Doctrine\ORM\Mapping as ORM;

   /**
     * @ORM\entity
     * @ORM\Table(name="countries")
     */


class Country {

     /**
     * @ORM\id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id")
     */

    private $id;


     /**
     * @ORM\Column(type="string", name="label", nullable=false)
     */

    private $label;


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of label
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     */
    public function setLabel($label): self
    {
        $this->label = $label;

        return $this;
    }
}


