<?php

namespace Proxies\__CG__\Mautic\CampaignBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Campaign extends \Mautic\CampaignBundle\Entity\Campaign implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'id', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'name', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'description', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'category', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'events', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'leads', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'lists', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'forms', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'canvasSettings', 'changes');
        }

        return array('__isInitialized__', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'id', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'name', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'description', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'publishUp', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'publishDown', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'category', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'events', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'leads', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'lists', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'forms', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\Campaign' . "\0" . 'canvasSettings', 'changes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Campaign $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());

        parent::__clone();
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
    public function convertToArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'convertToArray', array());

        return parent::convertToArray();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function addEvent($key, \Mautic\CampaignBundle\Entity\Event $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvent', array($key, $event));

        return parent::addEvent($key, $event);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvent(\Mautic\CampaignBundle\Entity\Event $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvent', array($event));

        return parent::removeEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvents', array());

        return parent::getEvents();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishUp($publishUp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishUp', array($publishUp));

        return parent::setPublishUp($publishUp);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishUp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishUp', array());

        return parent::getPublishUp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishDown($publishDown)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishDown', array($publishDown));

        return parent::setPublishDown($publishDown);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishDown()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishDown', array());

        return parent::getPublishDown();
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function addLead($key, \Mautic\CampaignBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLead', array($key, $lead));

        return parent::addLead($key, $lead);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLead(\Mautic\CampaignBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLead', array($lead));

        return parent::removeLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeads', array());

        return parent::getLeads();
    }

    /**
     * {@inheritDoc}
     */
    public function getLists()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLists', array());

        return parent::getLists();
    }

    /**
     * {@inheritDoc}
     */
    public function addList(\Mautic\LeadBundle\Entity\LeadList $list)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addList', array($list));

        return parent::addList($list);
    }

    /**
     * {@inheritDoc}
     */
    public function removeList(\Mautic\LeadBundle\Entity\LeadList $list)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeList', array($list));

        return parent::removeList($list);
    }

    /**
     * {@inheritDoc}
     */
    public function getForms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getForms', array());

        return parent::getForms();
    }

    /**
     * {@inheritDoc}
     */
    public function addForm(\Mautic\FormBundle\Entity\Form $form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addForm', array($form));

        return parent::addForm($form);
    }

    /**
     * {@inheritDoc}
     */
    public function removeForm(\Mautic\FormBundle\Entity\Form $form)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeForm', array($form));

        return parent::removeForm($form);
    }

    /**
     * {@inheritDoc}
     */
    public function getCanvasSettings()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCanvasSettings', array());

        return parent::getCanvasSettings();
    }

    /**
     * {@inheritDoc}
     */
    public function setCanvasSettings(array $canvasSettings)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCanvasSettings', array($canvasSettings));

        return parent::setCanvasSettings($canvasSettings);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', array($checkPublishStatus, $checkCategoryStatus));

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', array());

        return parent::getChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', array());

        return parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', array($dateAdded));

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', array());

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', array($dateModified));

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', array());

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', array($checkedOut));

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', array());

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', array($createdBy));

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', array());

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', array($modifiedBy));

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', array());

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', array($checkedOutBy));

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', array());

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', array($isPublished));

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', array());

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', array());

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', array());

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', array());

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', array());

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', array());

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', array($createdByUser));

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', array($modifiedByUser));

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', array($checkedOutByUser));

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', array($name, $arguments));

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
