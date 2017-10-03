<?php

namespace BetterAnchors;

class SiteTreeLinkTracking_Parser extends \SiteTreeLinkTracking_Parser
{
    /**
     * This method stops anchors from being marked with .ss-broken
     */
    public function process(SS_HTMLValue $htmlValue) {
        $results = parent::process($htmlValue);

        foreach ($results as $i => $result) {
            if ($result['Type'] == 'localanchor' && $result['Broken'] == true) {
                // @TODO: re-assess if this really is broken
                $results[$i]['Broken'] = 0;
            }
        }

        return $results;
    }
}
