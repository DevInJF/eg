<?php

/*
Copyright 2016-2017 Amazon.com, Inc. or its affiliates. All Rights Reserved.

Licensed under the GNU General Public License as published by the Free Software Foundation,
Version 2.0 (the "License"). You may not use this file except in compliance with the License.
A copy of the License is located in the "license" file accompanying this file.

This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND,
either express or implied. See the License for the specific language governing permissions
and limitations under the License.
*/

/**
 * The class responsible for getting all the configuration
 *
 * Loads the class with respect to their respective directories.
 *
 * @since      1.0.0
 * @package    AmazonAssociatesLinkBuilder
 * @subpackage AmazonAssociatesLinkBuilder/includes
 */
class Aalb_Config_Loader {

    private $cache_loader;

    public function __construct() {
        $this->cache_loader = new Aalb_Cache_Loader( new Aalb_Remote_Loader() );
    }

    /**
     * Updating marketplaces from the external config file and storing it in the database.
     *
     * If some error occurs while fetching from external source, the error message
     * will be logged and marketplace endpoints would be retrieved from database.
     *
     * @since 1.0.0
     */
    public function fetch_marketplaces() {
        try {
            $body = $this->cache_loader->load( AALB_MARKETPLACE_NAMES, MARKETPLACES_URL );

            return $this->parse_json( $body );
        } catch ( Exception $e ) {
            error_log( $e->getMessage() );

            return get_option( AALB_MARKETPLACE_NAMES );
        }
    }

    /**
     * Parse the json file and extract the marketplace endpoints
     *
     * @since 1.0.0
     *
     * @param string $json_body Json retrieved from the server to parse.
     *
     * @return array Mapping of marketplace endpoint and its abbreviation.
     */
    private function parse_json( $json_body ) {
        $body = json_decode( $json_body, true );
        if ( json_last_error() !== JSON_ERROR_NONE ) {
            throw new Exception( 'Invalid Json returned by server' . json_last_error() );
        }
        $marketplaces_info = $body['Local']['Marketplace'];
        $updated_marketplace = array();
        foreach ( $marketplaces_info as $key => $value ) {
            $updated_marketplace[ substr( $value['Endpoint'], 0, strpos( $value['Endpoint'], '/' ) ) ] = $key;
        }
        update_option( AALB_MARKETPLACE_NAMES, $updated_marketplace );

        return $updated_marketplace;
    }
}

?>
