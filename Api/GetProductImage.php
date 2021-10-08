<?php
/**
 * Developer: Hemant Singh Magento 2x Developer
 * Category:  Wishusucess_ProductImagesUrl Get Product Image URL Using REST API
 * Website:   http://www.wishusucess.com/
 */
namespace Wishusucess\ProductImagesUrl\Api;

interface GetProductImage
{
    /**
     * @api
     * @param  string $sku
     * @return array
     */
    public function getProductImageUrl($sku);
}