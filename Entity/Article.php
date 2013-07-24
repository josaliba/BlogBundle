<?php

namespace Josaliba\BlogBundle\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $article;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $tags;

    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var \DateTime
     */
    private $deleteDate;

    /**
     * @var boolean
     */
    private $submitted;

    /**
     * @var boolean
     */
    private $published;

    public function __construct(){
        $this->categories = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }

    /**
     * @param string $article
     * @return Article
     */
    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $categories
     * @return Article
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param \DateTime $createDate
     * @return Article
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param \DateTime $deleteDate
     * @return Article
     */
    public function setDeleteDate($deleteDate)
    {
        $this->deleteDate = $deleteDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeleteDate()
    {
        return $this->deleteDate;
    }

    /**
     * @param int $id
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param boolean $published
     * @return Article
     */
    public function setPublished($published)
    {
        $this->published = $published;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param boolean $submitted
     * @return Article
     */
    public function setSubmitted($submitted)
    {
        $this->submitted = $submitted;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getSubmitted()
    {
        return $this->submitted;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $tags
     * @return Article
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }



}