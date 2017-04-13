<?php

namespace Bangerkuwranger\Categorylimitbugfix\Model\Indexer\Product\Category\Action;

class Full extends \Magento\Catalog\Model\Indexer\Category\Product\Action\Full {
    
    protected function isRangingNeeded() {
    
        return false;
    
    }

}
