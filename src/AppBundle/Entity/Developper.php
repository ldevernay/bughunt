<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="developper")
*/
class Developper extends BaseUser {

  public function __construct() {
    parent::__construct();

    $this->title = "BugHunter";
    $this->description = "We are fearless BugHunters";
    $this->github = "";
    $this->languages = "";
  }
  /**
  * @ORM\Column(type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;
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
