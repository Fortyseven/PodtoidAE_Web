<?php

    namespace SoundboardBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * Soundclip
     *
     * @ORM\Table()
     * @ORM\Entity(repositoryClass="SoundboardBundle\Entity\SoundclipRepository")
     */
    class Soundclip
    {
        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @var string
         *
         * @ORM\Column(name="title", type="string", length=255)
         */
        private $title;

        /**
         * @var string
         *
         * @ORM\Column(name="short_title", type="string", length=255)
         */
        private $shortTitle;

        /**
         * @var string
         *
         * @ORM\Column(name="path", type="string", length=255)
         */
        private $path;

        /**
         * @var Category
         *
         * @ORM\ManyToOne(targetEntity="SoundboardBundle\Entity\Category")
         */
        private $category;


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
         * @return Soundclip
         */
        public function setTitle( $title )
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
         * Set shortTitle
         *
         * @param string $shortTitle
         *
         * @return Soundclip
         */
        public function setShortTitle( $shortTitle )
        {
            $this->shortTitle = $shortTitle;

            return $this;
        }

        /**
         * Get shortTitle
         *
         * @return string
         */
        public function getShortTitle()
        {
            return $this->shortTitle;
        }

        /**
         * Set path
         *
         * @param string $path
         *
         * @return Soundclip
         */
        public function setPath( $path )
        {
            $this->path = $path;

            return $this;
        }

        /**
         * Get path
         *
         * @return string
         */
        public function getPath()
        {
            return $this->path;
        }

        /**
         * Set category
         *
         * @param integer $category
         *
         * @return Soundclip
         */
        public function setCategory( $category )
        {
            $this->category = $category;

            return $this;
        }

        /**
         * Get category
         *
         * @return integer
         */
        public function getCategory()
        {
            return $this->category;
        }
    }
