SilverStripe Better Anchors Module
===================================

* Allows you to specify extra anchors that appear in the anchor dropdown in the insert link dialog (eg for template elements).
* Turns off broken link highlighting for anchors.


Maintainer Contacts
-------------------
Nathan Cox (<me@nathan.net.nz>)

Requirements
------------
* SilverStripe 3.4+

Documentation
-------------
[GitHub](https://github.com/nathancox/silverstripe-betteranchors/wiki)

Installation Instructions
-------------------------

`composer require nathancox/betteranchors`

Usage Overview
--------------

Configuration via `config.yml`:

```yaml

Page:
  anchors:
    before:
      - main
    after:
      - footer
      - newsletter
    
```

This will insert the "main" anchor before the auto generated content anchors and "footer" and "newsletter" after them.



Issues & Todo
------------
[Issue Tracker](https://github.com/nathancox/silverstripe-betteranchors/issues)
