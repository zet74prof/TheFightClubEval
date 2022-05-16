<?php
namespace TheFightClub\Model\Business;

class Personnage
{
    private $_experience;
    private $_age;
    private $_force;

    /**
     * @param $_experience
     * @param $_age
     * @param $_force
     * @param $_degats
     * @param $nom
     */
    public function __construct($_experience, $_age, $_force, $_degats, $nom)
    {
        $this->_experience = $_experience;
        $this->_age = $_age;
        $this->_force = $_force;
        $this->_degats = $_degats;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getForce()
    {
        return $this->_force;
    }

    /**
     * @param mixed $force
     */
    public function setForce($force)
    {
        $this->_force = $force;
    }

    /**
     * @return mixed
     */
    public function getDegats()
    {
        return $this->_degats;
    }

    /**
     * @param mixed $degats
     */
    public function setDegats($degats)
    {
        $this->_degats = $degats;
    }
    private $_degats;
    public $nom;

    /**
     * @return int
     */
    public function getExperience()
    {
        return $this->_experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->_age;
    }

    /**
     * @param int $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function afficherExperience()
    {
        echo "L'expérience est : " . $this->_experience;
    }

    public function gagnerExperience()
    {
        $this->_experience += round($this->_age * 0.45,0);
    }

    public function frapper($perso)
    {
        $perso->_degats = $this->_force;
    }
}