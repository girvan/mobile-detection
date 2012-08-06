mobile-detection
================

This project not only provides boolean(true of false) $mobile variable, but also provide more dimensions for mobile and tablet devices.

Features:
* dimensions for touch, ios, tablet and android
* js: no jquery required.
* js: able to put into `<head>`
* js: the fast and light way to implement responsive design. Minimized code is less then 350 bytes.


Variables on different devices
----------------
* Desktop
   * = "" // empty string
* tablet ipad
   * = "tablet ipad touch"
* tablet android
   * = "tablet android touch"
* iphone / ipod touch
   * = "iphone ios mobile touch"
* android mobile device
   * = "android mobile touch"


Constant declare on different language
----------------
* Javascript:
   * append class string into `<html>` tag
   * append variable on `window._device`
* PHP:
   * declare to constant `_DEVICE`


How to use it?
----------------
* copy the code from [github][https://github.com/girvan/mobile-detection/blob/master/javascript/mobiledetectioin.min.js]
* paste the code between `<head> ... </head>`
* Thats it!
We suggest to display the code inline instead of external js link in order to speed up your page


Examples:
----------------
* [CSS] Hide module(html block) on mobile device
   * `.mobile #most-popular { display:none; }`
* [CSS] bigger buttons on touch device include ipad, iphone and any android device
   * `.touch input { line-height:24px; height:24px; }`
* [JS] no this function on mobile device
   * `if(window._device.indexOf('mobile') == -1)
      {
	  // do something
      }
   `
	  

Misc
----------------
* Any other languages are welcome
* Contact: girvanliu@gmail.com
