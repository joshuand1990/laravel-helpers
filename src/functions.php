<?php
/**
 * laravel-helpers - functions.php
 * User: Joshua
 * Date: 6/19/19
 * Time: 12:36
 */


function split_flags( $flagstxt, $flag = null ) {
    $flags = [];
    if( $flagstxt ) {
        foreach( explode( ' ', $flagstxt ) as $fieldtxt ) {
            $field = explode( ':', trim( $fieldtxt ) );
            $flags[$field[0]] = [];
            if( isset( $field[1] ) ) {
                $parms = explode( ';', trim( $field[1] ) );
                for( $i = 0; $i < count( $parms ); $i++ ) $flags[$field[0]][] = str_replace( '_', ' ', $parms[$i] );
            }
        }
    }
    if( $flag ) {
        if( isset( $flags[$flag ] ) ) return $flags[$flag] ? $flags[$flag] : true;
        return null;
    }
    return $flags;
}