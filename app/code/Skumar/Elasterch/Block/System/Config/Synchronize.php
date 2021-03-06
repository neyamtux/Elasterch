<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Skumar\Elasterch\Block\System\Config;

/**
 * Synchronize button renderer
 */
class Synchronize extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var string
     */
    protected $_template = 'Skumar_Elasterch::system/config/synchronize.phtml';

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Remove scope label
     *
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return parent::render($element);
    }

    /**
     * Return element html
     *
     * @param  \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->_toHtml();
    }

    /**
     * Return ajax url for synchronize button
     *
     * @return string
     */
    public function getAjaxSyncUrl()
    {
        return $this->getUrl('elasterch/system_config/synchronize');
    }

    /**
     * Generate synchronize button html
     *
     * @return string
     */
    public function getButtonHtml()
    {
        /*$button = $this->getLayout()->createBlock(
            'Magento\Backend\Block\Widget\Button'
        )->setData(
            [
                'id' => 'synchronize_button',
                'label' => __('Synchronize'),
            ]
        );

        return $button->toHtml();*/

        /*$btnHtml = '<button id="synchronize_button" class="progress-button" data-style="fill" data-horizontal type="button">
            <span class="content">'. __('Synchronize').'</span>
            <span class="progress">
                <span class="progress-inner" data-width="0" style="width: 0%; opacity: 1;"></span>
            </span>
        </button>';*/

        /*$btnHtml = '<button id="synchronize_button" data-horizontal="" data-style="shrink" class="progress-button" type="button">
            <span class="content">'. __('Synchronize').'</span>
            <span class="progress">
                <span class="progress-inner notransition" data-width="0" style="width: 0%; opacity: 1;"></span>
            </span>
        </button>';*/

        $btnHtml = '<button id="synchronize_button" data-horizontal="" data-perspective="" data-style="rotate-angle-bottom" class="progress-button" type="button">
            <span class="progress-wrap">
                <span class="content">'. __('Synchronize').'</span>
                <span class="progress">
                    <span class="progress-inner notransition" style="width: 0%; opacity: 1;"></span>
                </span>
            </span>
        </button>';

        return $btnHtml;
    }
}
