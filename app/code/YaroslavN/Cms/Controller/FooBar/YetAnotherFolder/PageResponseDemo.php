<?php

declare(strict_types=1);

namespace YaroslavN\Cms\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\View\Result\Page;

class PageResponseDemo implements \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\View\Result\PageFactory $pageFactory;

    /**
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {

        $this->pageFactory = $pageFactory;
    }

    /**
     * Lyaout result demo: https://yaroslav-n-magento.local/yaroslav-n-controller-demo/foobar_yetanotherfolder/pageresponsedemo
     *
     *
     * @return Page
     */
    public function execute(): Page
    {
        return $this->pageFactory->create();
    }
}
