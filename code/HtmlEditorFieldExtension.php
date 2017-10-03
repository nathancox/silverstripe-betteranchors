<?php

namespace BetterAnchors;

class HtmlEditorFieldExtension extends \Extension
{
    /**
     * Fetch a list of anchors from either the page's config or it's getAnchors() method.
     * Put the anchors in the field's data-anchors attribute for use by the javascript.
     */
    public function updateAttributes(&$attributes)
    {
        $anchors = array();
        //$page = $this->owner->getForm()->getRecord();
        $page = \Page::create();

        $config = $page->config()->anchors;
        if ($config) {
            $anchors = $config;
        }

        if ($page->hasMethod('getAnchors')) {
            $anchors = $page->getAnchors();
        }

        if (count($anchors) > 0) {
            $attributes['data-anchors'] = \Convert::array2json($anchors);
        }
    }
}
