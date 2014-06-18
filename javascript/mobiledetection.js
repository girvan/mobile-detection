// this javascript will detect mobile/tablet device and provide a proper string on window._device and html's className
// You can write custom css for those device and access window._device via javascript
// iphone / ipod touch: touch ios mobile iphone
// ipad: touch ios tablet ipad
// android phone: touch tablet android
// please compress following code at http://refresh-sf.com/yui/
(function(){

 var device = '', _ipad = 'ipad', _iphone = 'iphone', ua = navigator.userAgent.toLowerCase();
 if( ua.indexOf(_ipad) != -1 )
     device = 'ios tablet ' + _ipad;
 else if( ua.indexOf(_iphone) != -1 )
     device = 'ios mobile ' + _iphone;
 else if( ua.match(/android/) )
 {
     device = 'android';
     if(ua.indexOf('mobile')==-1)
         device += ' tablet';
     else
         device += ' mobile';
 }
 else if(/BlackBerry|\bBB10\b|rim[0-9]+/i.test(ua)) // BalckBerry Phone
 {
    device += ' blackberry';
    device += ' mobile';
 }
 else if(/PlayBook|RIM Tablet/i.test(ua)) // BlackBerry Tablet
 {
    device += ' blackberry';
    device += ' tablet';
 }
 else if(/Windows Phone 8.0|Windows Phone OS|XBLWP7|ZuneWP7/i.test(ua)) // Windows Phone
 {
    device += ' wp';
    device += ' mobile';
 }
 else if(ua.indexOf('windows nt')!= -1 && ua.indexOf('touch')!=-1) // Windows Tablet
 {
    device += ' wp';
    device += ' tablet';
 }

 if(device)
 {
     device = 'touch ' + device;
     document.documentElement.className += ' ' + device;
 }
 window._device = device;
}
)();
