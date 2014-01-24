<?php
/**
 * MageCache
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade MageCache to newer
 * versions in the future.
 */

/**
 * Varnish connector logger
*
 * @category  Smile
 * @package   Smile_MageCache
 * @author    Smile <solution.magento@smile.fr>
 * @copyright 2013 Smile
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
class Smile_MageCache_Model_Engine_Varnish_Connector_Logger implements Varnish_Connector_Logger
{
    /**
     * Put a log message
     *
     * @param string $message message text
     * @param int    $level   log level
     *
     * @return void
     */
    public function log($message, $level = null)
    {
        Mage::log($message, $level, 'varnish.log');
    }
}
