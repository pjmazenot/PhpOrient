<?php
/**
 * User: Domenico Lupinetti ( Ostico )
 * Date: 07/12/14
 * Time: 4.27
 * 
 */

namespace PhpOrient\Protocols\Common;


use PhpOrient\Exceptions\PhpOrientException;
use PhpOrient\Protocols\Binary\SocketTransport;

trait NeedDBOpenedTrait {

    protected function _checkConditions(  SocketTransport $transport  ){
        if( !$transport->databaseOpened ){
            throw new PhpOrientException('Can not perform ' . join( '', array_slice( explode( '\\', get_class( $this ) ), -1 ) ) . ' operation on a Database without open it.');
        }
    }

} 