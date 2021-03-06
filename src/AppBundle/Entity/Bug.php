<?php
namespace AppBundle\Entity;

use AppBundle\Entity\Developper;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* @ORM\Entity
* @ORM\Table(name="bug")
* @ORM\HasLifecycleCallbacks
*/
class Bug {
  /**
  * @ORM\Column(type="integer")
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;
  /**
  * @Assert\NotBlank()
  * @ORM\Column(type="boolean")
  */
  private $solved;
  /**
  * @Assert\NotBlank()
  * @ORM\Column(type="string", length=100)
  */
  private $title;
  /**
  * @Assert\NotBlank()
  * @ORM\Column(type="text")
  */
  private $description;
  /**
  * @Assert\NotBlank()
  * @ORM\Column(type="string", length=100, nullable=true)
  */
  private $githubLink;
  /**
  * @Assert\NotBlank()
  * Many Bugs have One creator.
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Developper",cascade={"persist"})
  * @ORM\JoinColumn(name="creator_id", referencedColumnName="id")
  */
  private $creator;
  /**
  * Many Bugs have One fixer.
  * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Developper",cascade={"persist"})
  * @ORM\JoinColumn(name="fixer_id", referencedColumnName="id", nullable=true)
  */
  private $fixer;
  /**
  * @Assert\NotBlank()
  * @ORM\Column(type="text")
  */
  private $languages;
  /**
  * @ORM\Column(type="datetime")
  */
  private $creationDate;

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
  * Set languages
  *
  * @param string $languages
  *
  * @return Bug
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

  /**
  * Gets triggered only on insert

  * @ORM\PrePersist
  */
  public function onPrePersist()
  {
    $this->creationDate = new \DateTime("now");
  }


    /**
     * Set creator
     *
     * @param \AppBundle\Entity\Developper $creator
     *
     * @return Bug
     */
    public function setCreator(\AppBundle\Entity\Developper $creator = null)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return \AppBundle\Entity\Developper
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set fixer
     *
     * @param \AppBundle\Entity\Developper $fixer
     *
     * @return Bug
     */
    public function setFixer(\AppBundle\Entity\Developper $fixer = null)
    {
        $this->fixer = $fixer;

        return $this;
    }

    /**
     * Get fixer
     *
     * @return \AppBundle\Entity\Developper
     */
    public function getFixer()
    {
        return $this->fixer;
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
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
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
        $this->githubLink = $githubLink;

        return $this;
    }

    /**
     * Get githubLink
     *
     * @return string
     */
    public function getGithubLink()
    {
        return $this->githubLink;
    }


    /**
     * Set solved
     *
     * @param boolean $solved
     *
     * @return Bug
     */
    public function setSolved($solved)
    {
        $this->solved = $solved;

        return $this;
    }

    /**
     * Get solved
     *
     * @return boolean
     */
    public function getSolved()
    {
        return $this->solved;
    }
}
