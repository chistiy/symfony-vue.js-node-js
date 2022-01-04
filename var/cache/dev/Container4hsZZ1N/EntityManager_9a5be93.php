<?php

namespace Container4hsZZ1N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere9463 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc31bb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties02eed = [
        
    ];

    public function getConnection()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getConnection', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getMetadataFactory', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getExpressionBuilder', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'beginTransaction', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getCache', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'transactional', array('func' => $func), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'commit', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->commit();
    }

    public function rollback()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'rollback', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getClassMetadata', array('className' => $className), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'createQuery', array('dql' => $dql), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'createNamedQuery', array('name' => $name), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'createQueryBuilder', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'flush', array('entity' => $entity), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'clear', array('entityName' => $entityName), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->clear($entityName);
    }

    public function close()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'close', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->close();
    }

    public function persist($entity)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'persist', array('entity' => $entity), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'remove', array('entity' => $entity), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'refresh', array('entity' => $entity), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'detach', array('entity' => $entity), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'merge', array('entity' => $entity), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'contains', array('entity' => $entity), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getEventManager', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getConfiguration', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'isOpen', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getUnitOfWork', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getProxyFactory', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'initializeObject', array('obj' => $obj), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'getFilters', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'isFiltersStateClean', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'hasFilters', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return $this->valueHoldere9463->hasFilters();
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

        $instance->initializerc31bb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere9463) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere9463 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere9463->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, '__get', ['name' => $name], $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        if (isset(self::$publicProperties02eed[$name])) {
            return $this->valueHoldere9463->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9463;

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

        $targetObject = $this->valueHoldere9463;
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
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9463;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere9463;
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
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, '__isset', array('name' => $name), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9463;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere9463;
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
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, '__unset', array('name' => $name), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere9463;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere9463;
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
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, '__clone', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        $this->valueHoldere9463 = clone $this->valueHoldere9463;
    }

    public function __sleep()
    {
        $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, '__sleep', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;

        return array('valueHoldere9463');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc31bb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc31bb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc31bb && ($this->initializerc31bb->__invoke($valueHoldere9463, $this, 'initializeProxy', array(), $this->initializerc31bb) || 1) && $this->valueHoldere9463 = $valueHoldere9463;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere9463;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere9463;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
