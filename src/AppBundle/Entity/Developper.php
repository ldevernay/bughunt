<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="developper")
*/
class Developper {
  function __construct($dev_name) {
    $this->username = $dev_name;
    $this->title = $dev_name;
    $this->description = $dev_name;
    $this->github = $dev_name;
    $this->languages = $dev_name;
  }
  /**
  * @ORM\Column(type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;
  /**
  * @ORM\Column(type="string", length=100)
  */
  private $username;
  /**
  * @ORM\Column(type="string", length=100)
  */
  private $title;
  /**
  * @ORM\Column(type="text")
  */
  private $description;
  /**
  * @ORM\Column(type="string", length=100)
  */
  private $github;
  /**
  * @ORM\Column(type="text")
  */
  private $languages;

  /**
  * Get id
  *
  * @return integer
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set username
  *
  * @param string $username
  *
  * @return Developper
  */
  public function setUsername($username)
  {
    $this->username = $username;

    return $this;
  }

  /**
  * Get username
  *
  * @return string
  */
  public function getUsername()
  {
    return $this->username;
  }

  /**
  * Set title
  *
  * @param string $title
  *
  * @return Developper
  */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
  * Get title
  *
  * @return string
  */
  public function getTitle()
  {
    return $this->title;
  }

  /**
  * Set description
  *
  * @param string $description
  *
  * @return Developper
  */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
  * Get description
  *
  * @return string
  */
  public function getDescription()
  {
    return $this->description;
  }

  /**
  * Set github
  *
  * @param string $github
  *
  * @return Developper
  */
  public function setGithub($github)
  {
    $this->github = $github;

    return $this;
  }

  /**
  * Get github
  *
  * @return string
  */
  public function getGithub()
  {
    return $this->github;
  }

  /**
  * Set languages
  *
  * @param string $languages
  *
  * @return Developper
  */
  public function setLanguages($languages)
  {
    $this->languages = $languages;

    return $this;
  }

  /**
  * Get languages
  *
  * @return string
  */
  public function getLanguages()
  {
    return $this->languages;
  }
}
