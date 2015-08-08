<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Image extends \Application\Entity\Image implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'ImageId', 'GUID', 'Folder', 'Small', 'Medium', 'Huge', 'Created', 'Updated', 'Status');
        }

        return array('__isInitialized__', 'ImageId', 'GUID', 'Folder', 'Small', 'Medium', 'Huge', 'Created', 'Updated', 'Status');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Image $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getImageId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageId', array());

        return parent::getImageId();
    }

    /**
     * {@inheritDoc}
     */
    public function getSmall()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSmall', array());

        return parent::getSmall();
    }

    /**
     * {@inheritDoc}
     */
    public function getMedium()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedium', array());

        return parent::getMedium();
    }

    /**
     * {@inheritDoc}
     */
    public function getHuge()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHuge', array());

        return parent::getHuge();
    }

    /**
     * {@inheritDoc}
     */
    public function getGUID()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGUID', array());

        return parent::getGUID();
    }

    /**
     * {@inheritDoc}
     */
    public function getFolder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFolder', array());

        return parent::getFolder();
    }

    /**
     * {@inheritDoc}
     */
    public function setSmall($Small)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSmall', array($Small));

        return parent::setSmall($Small);
    }

    /**
     * {@inheritDoc}
     */
    public function setMedium($Medium)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedium', array($Medium));

        return parent::setMedium($Medium);
    }

    /**
     * {@inheritDoc}
     */
    public function setHuge($Huge)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHuge', array($Huge));

        return parent::setHuge($Huge);
    }

    /**
     * {@inheritDoc}
     */
    public function setGUID($GUID)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGUID', array($GUID));

        return parent::setGUID($GUID);
    }

    /**
     * {@inheritDoc}
     */
    public function setFolder($Folder)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFolder', array($Folder));

        return parent::setFolder($Folder);
    }

    /**
     * {@inheritDoc}
     */
    public function toJSON()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toJSON', array());

        return parent::toJSON();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($Created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', array($Created));

        return parent::setCreated($Created);
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($Updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($Updated));

        return parent::setUpdated($Updated);
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus($Status)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatus', array($Status));

        return parent::setStatus($Status);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', array());

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatus', array());

        return parent::getStatus();
    }

}
