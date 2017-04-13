# Magento-2.1.3-500-Product-Category-Limit-Bug-Workaround

Magento 2.1.3 updated the ranging in category product indexing, and inadvertently limited indexed products in a category to 500. :-( However, patching a single function can undo this limit until an official bugfix is released... which is what this does. This issue persists through at least Magento 2.1.6, although there are rumblings it'll be fixed in 2.1.7. This workaround MAY have performance implications, as the ranging is supposed to chunk large category requests to make them more performant. Use at your own risk.

# WARNING

I rushed out v1.0.0, and it should not be used... installing it will cause fatal errors. 1.0.1 actually works.

## Reference

This issue is referenced in a lot of places, but working code was written (or adapted by) gclift in one of at least two open issues in GitHub to address the bug. ([Issue 8681](https://github.com/magento/magento2/issues/8681)). The second issue appears to be a report that Magento is using to address the issue internally, and includes a description of the patch needed for the workaround by pravalitera. ([Issue 8018](https://github.com/magento/magento2/issues/8018)). This just exists to make it easier for folks using Composer to include (and later remove) a workaround for this issue until it is patched in core without writing their own identical module or dumping stuff in /app. It's just backwards laziness.

## Installation

Installation is available via composer. The package name is bangerkuwranger/magento-2-1-3-category-limit-bug-workaround. Just run these commands at your Magento root:
`composer require bangerkuwranger/magento-2-1-3-category-limit-bug-workaround`
`php bin/magento module:enable Bangerkuwranger_Categorylimitbugfix`
`php bin/magento setup:upgrade`
`php bin/magento setup:di:compile`

Reindex and flush the cache, and your categories o' many products should appear at full strength on the front end.
