<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Browser extends AbstractForm
{

    /**
     * @event circle3.click-Left 
     */
    function doCircle3ClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Browser');

        
    }


}
