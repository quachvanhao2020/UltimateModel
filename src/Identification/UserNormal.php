<?php
namespace UltimateModel\Identification;

use UltimateModel\Entity;
use UltimateModel\Identification\User;
use UltimateModel\Communication\Storage\CommentStorage;

class UserNormal extends Entity
{

    /**
     * 
     *
     * @var CommentStorage
     */
    protected $comments;
    /**
     * 
     *
     * @var User
     */
    protected $user;

    public function __construct($id,User $user = null)
    {
        $this->id = $id;
        $this->user = $user;
    }

    /**
     * Get the value of user
     *
     * @return  User
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @param  User  $user
     *
     * @return  self
     */ 
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of comments
     *
     * @return  CommentStorage
     */ 
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set the value of comments
     *
     * @param  CommentStorage  $comments
     *
     * @return  self
     */ 
    public function setComments(CommentStorage $comments)
    {
        $this->comments = $comments;

        return $this;
    }
}