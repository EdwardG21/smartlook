<?php
namespace Block;
/**
 * Smart Look - Main Class
 * 
 * 
 * 
 * @copyright Edward Gao
 *
 * @license MIT
 *
 * @package smartlook
 * @version 1.0
 * @author  Edward Gao <edward.gao21@gmail.com>
 * @link    https://github.com/EdwardG21
 */
class SmartLook extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                
                $smart_look_tracking_number = $this->config['str_smart_look_tracking_number'];			
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
  	}
}
