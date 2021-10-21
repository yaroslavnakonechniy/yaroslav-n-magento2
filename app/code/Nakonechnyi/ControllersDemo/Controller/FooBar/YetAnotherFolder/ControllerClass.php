<?php

declare(strict_types=1);

namespace Nakonechnyi\ControllersDemo\Controller\FooBar\YetAnotherFolder;

use Magento\Framework\Controller\Result\Json;

class ControllerClass implements
    \Magento\Framework\App\Action\HttpGetActionInterface
{
    private \Magento\Framework\App\RequestInterface $request;

    private \Magento\Framework\Controller\Result\JsonFactory $jsonFactory;

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
     */
    public function __construct(
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    ) {

        $this->request = $request;
        $this->jsonFactory = $jsonFactory;
    }
    /**
     * Controller demo
     *
     * @return Json
     */
    public function execute(): Json
    {

        return $this->jsonFactory->create()
            ->setData([
                'parameter-name-1 :' => $this->request->getParam('parameter-name-1', ''),
                'deno_int :' => (int) $this->request->getParam('demo-int', 10)
            ]);


//        echo 'Demo int ' . (int) $this->request->getParam('demo-int', 10) . '<br>';
//        echo 'parameter-name-1 ' . $this->request->getParam('parameter-name-1') . '<br>';
//        echo 'parameter-name-2 ' . $this->request->getParam('parameter-name-2') . '<br>';
//        echo 'Testing controller rrrrrr';

    }
}

