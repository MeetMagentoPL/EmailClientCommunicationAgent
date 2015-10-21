<?php

namespace MMHackaton\EmailClientCommunicationAgent\Block\Adminhtml\Email;

class Grid extends \Magento\Backend\Block\Widget\Grid
{
    
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('emailClientGrid');
        $this->setDefaultSort('identifier');
        $this->setDefaultDir('ASC');
    }

    /**
     * Prepare collection
     *
     * @return \Magento\Backend\Block\Widget\Grid
     */
    protected function _prepareCollection()
    {
        return parent::_prepareCollection();
    }

    /**
     * Prepare columns
     *
     * @return \Magento\Backend\Block\Widget\Grid\Extended
     */
    protected function _prepareColumns()
    {
        return parent::_prepareColumns();
    }

    /**
     * Row click url
     *
     * @param \Magento\Framework\DataObject $row
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', ['page_id' => $row->getId()]);
    }
    
}
