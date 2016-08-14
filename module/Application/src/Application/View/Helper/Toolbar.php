<?php
namespace Application\View\Helper;
use Zend\View\Helper\AbstractHelper;
 
class Toolbar extends AbstractHelper
{
    public function __invoke()
    {
    	$retval = "<div id='correspondant-toolbar'>";
	$retval .= "<ul class='itemlist'>";
	$retval .= "<li class='itemtab'><a href='/correspondant/index?new=wordage'>Wordage</a></li>";
	$retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
	$retval .= "<li class='itemtab'><a href='http://dev.newhollandpress.com/article/new'>Free-form Article</a></li>";
	$retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
	$retval .= "<li class='itemtab'><a href='http://dev.newhollandpress.com/pix/new'>Pix</a></li>";
	$retval .= "<li class='itemtab'>&nbsp;&nbsp;&nbsp;</li>";
	$retval .= "<li class='itemtab'><a href='http://dev.newhollandpress.com/container/new'>Container</a></li>";
	$retval .= "</ul>";
	$retval .= "</div>";
        return $retval;
    }
}
?>
