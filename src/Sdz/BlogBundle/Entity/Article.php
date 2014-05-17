<?php

namespace Sdz\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sdz\BlogBundle\Entity\ArticleRepository")
 */
class Article
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToMany(targetEntity="Sdz\BlogBundle\Entity\Categorie", cascade={"persist"})
     */
    private $categories;
    
    
    /**
	* @ORM\OneToOne(targetEntity="Sdz\BlogBundle\Entity\Image", cascade={"persist"})
 	*/
    private $image;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

	
    /**
     * @ORM\Column(name="publication", type="boolean")
     */
    private $publication;

    /**
     * @ORM\OneToMany(targetEntity="Sdz\BlogBundle\Entity\Commentaire", mappedBy="article")
     */
    private $commentaires; // Ici commentaires prend un « s », car un article a plusieurs commentaires !
    
    
    // Et modifions le constructeur pour mettre cet attribut publication à true par défaut
    public function __construct()
    {
        $this->date = new \Datetime();
        $this->publication = true;
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        // Rappelez-vous, on a un attribut qui doit contenir un ArrayCollection, on doit l'initialiser dans le constructeur
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @param Sdz\BlogBundle\Entity\Image $image
     */
    public function setImage(\Sdz\BlogBundle\Entity\Image $image = null)
    {
    	$this->image = $image;
    }
    
    /**
     * @return Sdz\BlogBundle\Entity\Image
     */
    public function getImage()
    {
    	return $this->image;
    }
    
    /**
     * Add categories
     *
     * @param Sdz\BlogBundle\Entity\Categorie $categories
     */
    public function addCategorie(\Sdz\BlogBundle\Entity\Categorie $categorie) // addCategorie sans « s » !
    {
    	// Ici, on utilise l'ArrayCollection vraiment comme un tableau, avec la syntaxe []
    	$this->categories[] = $categorie;
    }
    
    /**
     * Remove categories
     *
     * @param Sdz\BlogBundle\Entity\Categorie $categories
     */
    public function removeCategorie(\Sdz\BlogBundle\Entity\Categorie $categorie) // removeCategorie sans « s » !
    {
    	// Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument
    	$this->categories->removeElement($categorie);
    }
    
    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getCategories() // Notez le « s », on récupère une liste de catégories ici !
    {
    	return $this->categories;
    }
    
    public function addCommentaire(\Sdz\BlogBundle\Entity\Commentaire $commentaire)
    {
    	$this->commentaires[] = $commentaire;
    	$commentaires->setArticle($this); // On ajoute ceci
    	return $this;
    }
    
    public function removeCommentaire(\Sdz\BlogBundle\Entity\Commentaire $commentaire)
    {
    	$this->commentaires->removeElement($commentaire);
    }
    
    public function getCommentaires()
    {
    	return $this->commentaires;
    }
    
    
    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     * @return Article
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return boolean 
     */
    public function getPublication()
    {
        return $this->publication;
    }
}