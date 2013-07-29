<?php

namespace Josaliba\BlogBundle\Entity;

interface ArticleInterface
{
    public function getArticle();

    public function setArticle($article);

    public function getCategories();

    public function setCategories($categories);

    public function setCreateDate($date);

    public function getCreateDate();

    public function setDeleteDate($date);

    public function getDeleteDate();

    public function getId();

    public function setPublished($published);

    public function getPublished();

    public function setSubmitted($submitted);

    public function getSubmitted();

    public function getTags();

    public function setTags($tags);

    public function setTitle($title);

    public function getTitle();

    public function setLastUpdated($date);

    public function getLastUpdated();

    public function setPublishDate($date);

    public function getPublishDate();


}