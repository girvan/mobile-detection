mobile-detection
================

This project not only provides boolean(true of false) $mobile variable, but also provide more dimensions for mobile and tablet devices.

Features:
* dimensions for touch, ios, tablet and android
* no jquery required.
* able to put into `<head>`
* the fast to implement responsive design.
* light weight: Minimized code is less then 350 bytes.
* provide php code which equavlant to js code
* full unittested


Variables on different devices
----------------
* Desktop
   * = "" // empty string
* tablet ipad
   * = "tablet ipad ios touch"
* tablet android
   * = "tablet android touch"
* iphone / ipod touch
   * = "iphone ios mobile touch"
* android mobile device
   * = "android mobile touch"
* blackberry mobile device
   * = "blackberry mobile touch"
* blackberry tablet device
   * = "blackberry tablet touch"
* windows phone mobile device
   * = "wp mobile touch"
* windows phone tablet device
   * = "wp tablet touch"   



Output
----------------
* append class string into `<html>` tag
* global variable `_device` or `window._device`


How to use it?
----------------
* copy the code from [github](https://github.com/girvan/mobile-detection/blob/master/javascript/mobiledetection.min.html)
* paste the code between `<head> ... </head>`
* That's it!

We suggest to display the code inline instead of external js link in order to speed up your page.


Examples:
----------------
* [CSS] Hide module(html block) on mobile device
   * `.mobile #most-popular { display:none; }`
* [CSS] bigger buttons on touch device include ipad, iphone and any android device
   * `.touch input { line-height:24px; height:24px; }`
* [JS] no this function on mobile device
   * `if(window._device.indexOf('mobile') == -1)
      {
	  /* do something */
      }
   `
	  

Misc
----------------
* Any other languages are welcome
* Contact: service+githubmobiledetection@piliapp.com
