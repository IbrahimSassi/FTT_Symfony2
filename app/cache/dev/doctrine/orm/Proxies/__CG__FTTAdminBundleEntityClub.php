<?php

namespace Proxies\__CG__\FTT\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Club extends \FTT\AdminBundle\Entity\Club implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'id', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'nomClub', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'logoClub', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'dateFondation', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'adresseClub'];
        }

        return ['__isInitialized__', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'id', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'nomClub', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'logoClub', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'dateFondation', '' . "\0" . 'FTT\\AdminBundle\\Entity\\Club' . "\0" . 'adresseClub'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Club $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function getNomClub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomClub', []);

        return parent::getNomClub();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoClub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoClub', []);

        return parent::getLogoClub();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFondation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFondation', []);

        return parent::getDateFondation();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresseClub()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresseClub', []);

        return parent::getAdresseClub();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function setNomClub($nomClub)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomClub', [$nomClub]);

        return parent::setNomClub($nomClub);
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoClub($logoClub)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoClub', [$logoClub]);

        return parent::setLogoClub($logoClub);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFondation(\DateTime $dateFondation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFondation', [$dateFondation]);

        return parent::setDateFondation($dateFondation);
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresseClub($adresseClub)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresseClub', [$adresseClub]);

        return parent::setAdresseClub($adresseClub);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
