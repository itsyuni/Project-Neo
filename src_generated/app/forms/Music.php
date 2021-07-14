<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 


class Music extends AbstractForm
{

    /**
     * @event circle.click-Left 
     */
    function doCircleClickLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Music');

        
    }

    /**
     * @event image.click-Left 
     */
    function doImageClickLeft(UXMouseEvent $e = null)
    {    
        global $files; 

        $this->muzlist->items->clear();
        
        if ($files = $this->FileChooser->showOpenMultipleDialog()) {

            foreach ($files as $file) $this->muzlist->items->add($file->getName());
    }

}
