<?php
class Sales_Model_Quote extends Core_Model_Abstract
{
    public function init()
    {
        $this->_resourceClass = "Sales_Model_Resource_Quote";
        $this->_collectionClass = "Sales_Model_Resource_Collection_Quote";
        $this->_modelClass = "sales/quote";
    }

    public function initQuote()
    {
        $quoteId = Mage::getSingleton("core/session")->get("quote_id");
        if ($quoteId != '')
            $this->load($quoteId);
        if (!$this->getId()) {
            $quote = Mage::getModel("sales/quote")
                ->setData(["tax_percent" => 8, "grand_total" => 0])
                ->save();
            Mage::getSingleton("core/session")->set("quote_id", $quote->getId());
            $quoteId = $quote->getId();
            $this->load($quoteId);
           
        }
        return $this;

    }

    public function getItemCollection()
    {
        return Mage::getModel('sales/quote_item')->getCollection()
            ->addFieldToFilter('quote_id', $this->getId());
    }

    public function _beforeSave()
    {
        $grandTotal = 0;
        foreach ($this->getItemCollection()->getData() as $_item) {
            $grandTotal += $_item->getRowTotal();
        }
        if ($this->getTaxPercent()) {
            $tax = round($grandTotal / $this->getTaxPercent(), 2);
            $grandTotal = $grandTotal + $tax;
        }
        $this->addData('grand_total', $grandTotal);
    }

    public function addProduct($request)
    {
        $this->initQuote();
        if ($this->getId()) {
            Mage::getModel("sales/quote_item")
                ->addItem($this, $request['Product_id'], $request['qty']);
        }

        $this->save();

    }
    public function addAddress($request)
    {
        $customerId = Mage::getModel("core/session")->get('logged_in_customer_id');
        Mage::getSingleton("sales/quote_customer")
            ->setData($request)
            ->addData('quote_id', $this->getId())
            ->addData('customer_id', $customerId)
            // ->addData('')
            ->save();
        return $this;

    }

    public function convert()
    {
        $this->initQuote();
        if ($this->getId()) {
            $order = Mage::getModel('sales/order')
                ->setData($this->getData())
                ->removeData('quote_id')
                ->save();
                // move to sales order item after foreach loop
            foreach ($this->getItemCollection()->getData() as $_item) {
                Mage::getModel('sales/order_item')
                    ->setData($_item->getData())
                    ->removeData('item_id')
                    ->removeData('quote_id')
                    ->addData('order_id', $order->getId())
                    ->save();
            }
        }
     }
}