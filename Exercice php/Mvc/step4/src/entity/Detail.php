<?php


namespace APP\entity;

use Doctrine\ORM\Mapping as ORM;

   /**
     * @ORM\entity
     * @ORM\Table(name="details")
     */


class Detail{

     /**
     * @ORM\id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", name="id")
     */

    private $id;

     /**
     * @ORM\Column(type="integer", name="country_id", nullable=false)
     */

    private $country_id;


     /**
     * @ORM\Column(type="string", name="label", nullable=false)
     */

    private $label;
     /**
     * @ORM\Column(type="string", name="value", nullable=false)
     */

    private $value;


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

    /**
     * Get the value of country_id
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * Set the value of country_id
     */
    public function setCountryId($country_id): self
    {
        $this->country_id = $country_id;

        return $this;
    }

    /**
     * Get the value of value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value of value
     */
    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }
}


