<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="bug")
*/
class Bug {
  /**
  * @ORM\Column(type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;
  /**
  * @ORM\Column(type="string", length=100)
  */
  private $status;
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
  private $github_link;
  /**
  * @ORM\Column(type="integer")
  */
  private $creator;
  /**
  * @ORM\Column(type="integer")
  */
  private $fixer;
  /**
  * @ORM\Column(type="text")
  */
  private $languages;
  /**
  * @ORM\Column(type="datetime")
  */
  private $creation_date;

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
  * Set status
  *
  * @param string $status
  *
  * @return Bug
  */
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  /**
  * Get status
  *
  * @return string
  */
  public function getStatus()
  {
    return $this->status;
  }

  /**
  * Set title
  *
  * @param string $title
  *
  * @return Bug
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
  * @return Bug
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
  * Set githubLink
  *
  * @param string $githubLink
  *
  * @return Bug
  */
  public function setGithubLink($githubLink)
  {
    $this->github_link = $githubLink;

    return $this;
  }

  /**
  * Get githubLink
  *
  * @return string
  */
  public function getGithubLink()
  {
    return $this->github_link;
  }

  /**
  * Set creator
  *
  * @param integer $creator
  *
  * @return Bug
  */
  public function setCreator($creator)
  {
    $this->creator = $creator;

    return $this;
  }

  /**
  * Get creator
  *
  * @return integer
  */
  public function getCreator()
  {
    return $this->creator;
  }

  /**
  * Set fixer
  *
  * @param integer $fixer
  *
  * @return Bug
  */
  public function setFixer($fixer)
  {
    $this->fixer = $fixer;

    return $this;
  }

  /**
  * Get fixer
  *
  * @return integer
  */
  public function getFixer()
  {
    return $this->fixer;
  }

  /**
  * Set languages
  *
  * @param string $languages
  *
  * @return Bug
  */
  public function setLanguages($languages)
  {
    $this->languages = $languages;
  /**
  * @ORM\Column(type="dtetime")
  */
  private $creation_date;

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

  /**
  * Set creationDate
  *
  * @param \DateTime $creationDate
  *
  * @return Bug
  */
  public function setCreationDate($creationDate)
  {
    $this->creation_date = $creationDate;

    return $this;
  }

  /**
  * Get creationDate
  *
  * @return \DateTime
  */
  public function getCreationDate()
  {
    return $this->creation_date;
  }
}
?>
