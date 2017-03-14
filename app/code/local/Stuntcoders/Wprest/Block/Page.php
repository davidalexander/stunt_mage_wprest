<?php

/**
 * @method Stuntcoders_Wprest_Block_Post setPage(array $page)
 * @method array getPage()
 */
class Stuntcoders_Wprest_Block_Page extends Mage_Core_Block_Template
{
    public function getTitle()
    {
        $post = $this->getPage();

        return $post['title']['rendered'];
    }

    public function getExcerpt()
    {
        $post = $this->getPage();

        return $post['excerpt']['rendered'];
    }

    public function getContent()
    {
        $post = $this->getPage();

        return $post['content']['rendered'];
    }

    public function getPostUrl()
    {
        $post = $this->getPage();

        return $this->getUrl($post['slug']);
    }

    protected function _toHtml()
    {
        if (!$this->getPage()) {
            return '';
        }

        if (!$this->getTemplate()) {
            $this->setTemplate('stuntcoders/wprest/page.phtml');
        }

        return parent::_toHtml();
    }
}
