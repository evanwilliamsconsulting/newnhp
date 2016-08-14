<?php
namespace Application\Model;

use Zend\Db\Adapter\Driver\ResultInterface;
use Zend\Db\ResultSet\AbstractResultSet as AbstractResultSet;
use Zend\Stdlib\ArrayObject as ArrayObject;

class Blocks extends AbstractResultSet
{
     private $blockArray;
     protected $em;
     protected $obj;
     protected $log;

     public function __construct()
     {
		$this->obj = new ArrayObject();
    }
    public function setEntityManager($em)
    {
    	$this->em = $em;
    }
	public function getEntityManager()
	{
		return $this->em;
	}
	public function loadDataSource()
	{
		$em = $this->getEntityManager();
		$containers = $em->getRepository('Application\Entity\Container')->findAll();
		foreach	($containers as $container)
		{
			$newArray = Array();
			$newArray["type"] = "Container";	
			$newArray["id"] = $container->getId();
			$newArray["name"] = $container->getName();
			$newArray["object"] = $container;
			$this->obj->append($newArray);
			$id = $container->getId();
			$containerItems = $em->getRepository('Application\Entity\ContainerItem')->findById($id);
			foreach ($containerItems as $items)
			{
				$newArray = Array();
				$newArray["type"] = "Container Item";
				$newArray["object"] = $items;
				$newArray["containertypeid"] = $items->getContainerTypeId();
				$this->obj->append($newArray);
			}
		}
	}
    public function getDataSource()
    {
	 	return $this->obj;
	 }
     public function getFieldCount()
	 {
	 	$it = $this->obj->getIterator();
	 	return $it->count();
	 }
     /** Iterator */
     public function next()
	 {
	 	$it = $this->obj->getIterator();
	    return $it->next();	
	 }
     public function key()
	 {
	 	$it = $this->obj->getIterator();
	 	return $it->key();
	 }
     public function current()
	 {
	 	$it = $this->obj->getIterator();
	 	return $it->current();
	 }
     public function valid()
	 {
	 	$it = $this->obj->getIterator();
	 	return $it->valid();
	 }
     public function rewind()
	 {
	 	$it = $this->obj->getIterator();
	 	return $it->rewind();
	 }
     /** countable */
     public function count()
	 {
	 	$it = $this->obj->getIterator();
		return $it->count();	 	
	 }
     /** get rows as array */
     public function toArray()
	 {
	 	$it = $this->obj->getIterator();
	   return $it->getArrayCopy();	
	 }
}
?>
