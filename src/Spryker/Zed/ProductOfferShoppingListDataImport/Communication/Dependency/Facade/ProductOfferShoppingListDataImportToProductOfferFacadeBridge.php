<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ProductOfferShoppingListDataImport\Communication\Dependency\Facade;

use Generated\Shared\Transfer\ProductOfferCriteriaTransfer;
use Generated\Shared\Transfer\ProductOfferTransfer;

class ProductOfferShoppingListDataImportToProductOfferFacadeBridge implements ProductOfferShoppingListDataImportToProductOfferFacadeInterface
{
    /**
     * @var \Spryker\Zed\ProductOffer\Business\ProductOfferFacadeInterface
     */
    protected $productOfferFacade;

    /**
     * @param \Spryker\Zed\ProductOffer\Business\ProductOfferFacadeInterface $productOfferFacade
     */
    public function __construct($productOfferFacade)
    {
        $this->productOfferFacade = $productOfferFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductOfferCriteriaTransfer $productOfferCriteria
     *
     * @return \Generated\Shared\Transfer\ProductOfferTransfer|null
     */
    public function findOne(ProductOfferCriteriaTransfer $productOfferCriteria): ?ProductOfferTransfer
    {
        return $this->productOfferFacade->findOne($productOfferCriteria);
    }
}
