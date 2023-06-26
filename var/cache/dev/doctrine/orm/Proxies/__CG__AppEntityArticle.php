<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \App\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'contenu', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'dateDeCreation', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'dateDeModification', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'auteur', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'article', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'OneToMany', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'commentaire'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'contenu', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'dateDeCreation', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'dateDeModification', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'auteur', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'categories', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'article', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'OneToMany', '' . "\0" . 'App\\Entity\\Article' . "\0" . 'commentaire'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getContenu(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContenu', []);

        return parent::getContenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setContenu(string $contenu): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContenu', [$contenu]);

        return parent::setContenu($contenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeCreation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeCreation', []);

        return parent::getDateDeCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeCreation(\DateTimeInterface $dateDeCreation): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeCreation', [$dateDeCreation]);

        return parent::setDateDeCreation($dateDeCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDeModification(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDeModification', []);

        return parent::getDateDeModification();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDeModification(?\DateTimeInterface $dateDeModification): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDeModification', [$dateDeModification]);

        return parent::setDateDeModification($dateDeModification);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(?string $image): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur(): ?\App\Entity\Auteur
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', []);

        return parent::getAuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur(?\App\Entity\Auteur $auteur): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', [$auteur]);

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\App\Entity\Categorie $category): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\App\Entity\Categorie $category): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticle(): ?\App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticle', []);

        return parent::getArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticle(?\App\Entity\Article $article): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticle', [$article]);

        return parent::setArticle($article);
    }

    /**
     * {@inheritDoc}
     */
    public function getOneToMany(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOneToMany', []);

        return parent::getOneToMany();
    }

    /**
     * {@inheritDoc}
     */
    public function addOneToMany(\App\Entity\Article $oneToMany): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOneToMany', [$oneToMany]);

        return parent::addOneToMany($oneToMany);
    }

    /**
     * {@inheritDoc}
     */
    public function removeOneToMany(\App\Entity\Article $oneToMany): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeOneToMany', [$oneToMany]);

        return parent::removeOneToMany($oneToMany);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaire(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaire', []);

        return parent::getCommentaire();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommentaire(\App\Entity\Commentaire $commentaire): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommentaire', [$commentaire]);

        return parent::addCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommentaire(\App\Entity\Commentaire $commentaire): \App\Entity\Article
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommentaire', [$commentaire]);

        return parent::removeCommentaire($commentaire);
    }

}
