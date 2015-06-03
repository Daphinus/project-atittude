<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Mage
 * @package    
 * @copyright  Copyright (c) 2006-2014 X.commerce, Inc. (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Roles grid container block
 *
 * @category   Mage
 * @package    
 * @author     Magento Core Team <core@magentocommerce.com>
 */
 
class Mydons_Widgetdemo_Block_Topsearches  
 extends Mage_Core_Block_Template  
 implements Mage_Widget_Block_Interface 
{ 
 protected function _toHtml() 
 { 
  $searchCollection = Mage::getModel('catalogsearch/query') 
        ->getResourceCollection() 
        ->setOrder('popularity', 'desc'); 
  $searchCollection->getSelect()->limit(3,0); 
  $html = '<div id="widget-topsearches-container">' ; 
  $html .= '<div class="widget-topsearches-title">Top Search Terms</div>'; 

 foreach($searchCollection as $search){ 
   $html .= '<div class="widget-topsearches-searchtext">' . $search->query_text . "</div>"; 
  } 
  $html .= "</div>"; 
  return $html; 
 } 

};
