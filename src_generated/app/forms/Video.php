<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Video extends AbstractForm
{

    /**
     * @event circleAlt.click-Left 
     */
    function doCircleAltClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Video');

        
    }


}
