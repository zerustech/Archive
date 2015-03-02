<?php
/**
 *
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 * 
 *   http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @filesource
 * @package Archive
 * @version //autogen//
 * @subpackage Tests
 */

require_once( dirname( __FILE__ ) . "/testdata.php" );
require_once(dirname(__FILE__) . "/archive_test.php");

/**
 * @package Archive
 * @version //autogen//
 * @subpackage Tests
 */
class ezcArchiveEntryPathTest extends ezcArchiveTestCase
{

    public function testExtractEntryPath()
    {
        // Just choose one type. The specific algorithms are already tested.
        $dir = dirname(__FILE__ ) . "/data";
        $archive = ezcArchive::open( dirname( __FILE__ ) . "/data/images.tar.gz" );
        $archive->extract( $dir );

        clearstatcache();
        $this->assertTrue( file_exists( "$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_flat_0_aaaaaa_40x100.png" ) );
        $this->assertTrue( file_exists( "$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_highlight-soft_75_cccccc_1x100.png" ) );
        $this->assertTrue( file_exists( "$dir/testing/naming/including/inner/module/files/purpose/helper/jquery-ui-bootstrap/images/ui-bg_inset-soft_95_fef1ec_1x100.png" ) );
    }

}
?>
