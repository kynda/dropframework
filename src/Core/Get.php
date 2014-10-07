<?php  
/**
 * @version 0.4.0
 * @package DropFramework
 * @subpackage Request
 * @author Joe Hallenbeck
 * 
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

namespace Kynda\DropFramework\Core;

/**
 * Creates a get request object.
 */
class Get extends Request {        
    /**
     * Grabs the get request, alternatively the get request can be overriden 
     * with a custom request.
     * @param array $request Optional mock request array.
     * @return boolean true on success.
     */
    protected function init( $request = null ) {
        if( is_array( $request ) )
        {
            $this->dirtyProperties = array_merge( $_GET, $request );
        } else {
            $this->dirtyProperties = $_GET;
        }
        return true;
    }
}