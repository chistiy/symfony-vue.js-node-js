<?php

namespace ContainerPkMuoYm;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3f644 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbf0e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e754 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getConnection', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getMetadataFactory', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getExpressionBuilder', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'beginTransaction', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getCache', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'transactional', array('func' => $func), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'wrapInTransaction', array('func' => $func), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'commit', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->commit();
    }

    public function rollback()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'rollback', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getClassMetadata', array('className' => $className), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'createQuery', array('dql' => $dql), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'createNamedQuery', array('name' => $name), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'createQueryBuilder', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'flush', array('entity' => $entity), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'clear', array('entityName' => $entityName), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->clear($entityName);
    }

    public function close()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'close', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->close();
    }

    public function persist($entity)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'persist', array('entity' => $entity), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'remove', array('entity' => $entity), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'refresh', array('entity' => $entity), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'detach', array('entity' => $entity), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'merge', array('entity' => $entity), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'contains', array('entity' => $entity), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getEventManager', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getConfiguration', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'isOpen', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getUnitOfWork', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getProxyFactory', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'initializeObject', array('obj' => $obj), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'getFilters', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'isFiltersStateClean', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'hasFilters', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return $this->valueHolder3f644->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbf0e4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3f644) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3f644 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3f644->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, '__get', ['name' => $name], $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        if (isset(self::$publicProperties3e754[$name])) {
            return $this->valueHolder3f644->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f644;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3f644;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f644;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3f644;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, '__isset', array('name' => $name), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f644;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3f644;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, '__unset', array('name' => $name), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f644;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3f644;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, '__clone', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        $this->valueHolder3f644 = clone $this->valueHolder3f644;
    }

    public function __sleep()
    {
        $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, '__sleep', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;

        return array('valueHolder3f644');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbf0e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbf0e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbf0e4 && ($this->initializerbf0e4->__invoke($valueHolder3f644, $this, 'initializeProxy', array(), $this->initializerbf0e4) || 1) && $this->valueHolder3f644 = $valueHolder3f644;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3f644;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3f644;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
