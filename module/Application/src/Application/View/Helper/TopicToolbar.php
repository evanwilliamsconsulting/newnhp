<?php
namespace Application\View\Helper;
use Zend\View\Helper\AbstractHelper;
 
class TopicToolbar extends AbstractHelper
{
	protected $topicType;
	protected $base;
	 

    public function __invoke($topic,$id)
    {
    	$this->base = "https://newhollandpress.com/";
		$this->base .= $topic;	
		$retval = "<ul>";
		$retval .= "<li><a href='" . $this->base . "/view/" . $id . "'>View</a></li>";
		$retval .= "<li><a href='" . $this->base . "/edit/" . $id . "'>Edit</a></li>";
		$retval .= "</ul>";
        
        return $retval;
    }
}
?>
