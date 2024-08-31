<?php

return [
    'status' => ['active', 'inactive'],

    'default-status' => 'active',

    'language' => ['en', 'ar'],

    'default-language' => 'en',

    'theme' => ['light', 'dark'],

    'default-theme' => 'light',

    'section-types' => ['div', 'span', 'text', 'button', 'image'],

    'event-attributes' => [
        'onabort',
        'onautocomplete',
        'onautocompleteerror',
        'onblur',
        'oncancel',
        'oncanplay',
        'oncanplaythrough',
        'onchange',
        'onclick',
        'onclose',
        'oncontextmenu',
        'oncuechange',
        'ondblclick',
        'ondrag',
        'ondragend',
        'ondragenter',
        'ondragleave',
        'ondragover',
        'ondragstart',
        'ondrop',
        'ondurationchange',
        'onemptied',
        'onended',
        'onerror',
        'onfocus',
        'oninput',
        'oninvalid',
        'onkeydown',
        'onkeypress',
        'onkeyup',
        'onload',
        'onloadeddata',
        'onloadedmetadata',
        'onloadstart',
        'onmousedown',
        'onmouseenter',
        'onmouseleave',
        'onmousemove',
        'onmouseout',
        'onmouseover',
        'onmouseup',
        'onmousewheel',
        'onpause',
        'onplay',
        'onplaying',
        'onprogress',
        'onratechange',
        'onreset',
        'onresize',
        'onscroll',
        'onseeked',
        'onseeking',
        'onselect',
        'onshow',
        'onsort',
        'onstalled',
        'onsubmit',
        'onsuspend',
        'ontimeupdate',
        'ontoggle',
        'onvolumechange',
        'onwaiting',
        'accesskey',
        'autocapitalize',
        'autofocus',
        'aria-hidden',
        'class',
        'contenteditable',
        'd',
        'data-*',
        'dir',
        'draggable',
        'enterkeyhint',
        'exportparts',
        'fill',
        'hidden',
        'id',
        'inert',
        'inputmode',
        'is',
        'itemid',
        'itemprop',
        'itemref',
        'itemscope',
        'itemtype',
        'href',
        'lang',
        'nonce',
        'part',
        'popover',
        'role',
        'slot',
        'spellcheck',
        'stroke-width',
        'stroke-linejoin',
        'stroke-linecap',
        'stroke',
        'style',
        'tabindex',
        'title',
        'translate',
        'type',
        'virtualkeyboardpolicy',
        'accept',
        'autocomplete',
        'capture',
        'crossorigin',
        'dirname',
        'disabled',
        'elementtiming',
        'for',
        'max',
        'maxlength',
        'min',
        'minlength',
        'multiple',
        'pattern',
        'placeholder',
        'readonly',
        'rel',
        'required',
        'size',
        'step',
        'xmlns',
        'viewBox',
    ],

    'event-attributes-with-description' => [
        "onabort" => "onabort - Script to be run when the loading of an image is aborted",
        "onautocomplete" => "onautocomplete - Script to be run when a form field gets autocomplete suggestions",
        "onautocompleteerror" => "onautocompleteerror - Script to be run when the autocomplete suggestions fail to display",
        "onblur" => "onblur - Script to be run when an element loses focus",
        "oncancel" => "oncancel - Script to be run when a cancelable event is canceled",
        "oncanplay" => "oncanplay - Script to be run when media can start play",
        "oncanplaythrough" => "oncanplaythrough - Script to be run when media can be played to the end, without stopping for buffering",
        "onchange" => "onchange - Script to be run when the value of the element is changed",
        "onclick" => "onclick - Script to be run when the element is clicked",
        "onclose" => "onclose - Script to be run when a closeable element is closed",
        "oncontextmenu" => "oncontextmenu - Script to be run when a context menu is triggered",
        "oncuechange" => "oncuechange - Script to be run when the cue changes in a <track> element",
        "ondblclick" => "ondblclick - Script to be run when the element is double-clicked",
        "ondrag" => "ondrag - Script to be run when the element is being dragged",
        "ondragend" => "ondragend - Script to be run when the dragging of the element is finished",
        "ondragenter" => "ondragenter - Script to be run when the dragged element enters the drop target",
        "ondragleave" => "ondragleave - Script to be run when the dragged element leaves the drop target",
        "ondragover" => "ondragover - Script to be run when the dragged element is over the drop target",
        "ondragstart" => "ondragstart - Script to be run at the start of a drag operation",
        "ondrop" => "ondrop - Script to be run when the dragged element is dropped on the drop target",
        "ondurationchange" => "ondurationchange - Script to be run when the duration of the media is changed",
        "onemptied" => "onemptied - Script to be run when the media has become empty (e.g., has finished playing)",
        "onended" => "onended - Script to be run when the media has reached the end (e.g., has finished playing)",
        "onerror" => "onerror - Script to be run when an error occurs during the loading of an image",
        "onfocus" => "onfocus - Script to be run when an element gets focus",
        "oninput" => "oninput - Script to be run when the value of the element is changed",
        "oninvalid" => "oninvalid - Script to be run when the element is invalid",
        "onkeydown" => "onkeydown - Script to be run when a key is pressed down",
        "onkeypress" => "onkeypress - Script to be run when a key is pressed and released",
        "onkeyup" => "onkeyup - Script to be run when a key is released",
        "onload" => "onload - Script to be run when an element has finished loading",
        "onloadeddata" => "onloadeddata - Script to be run when media data is loaded",
        "onloadedmetadata" => "onloadedmetadata - Script to be run when meta data (like dimensions and duration) are loaded",
        "onloadstart" => "onloadstart - Script to be run just as the file begins to load before anything is actually loaded",
        "onmousedown" => "onmousedown - Script to be run when a mouse button is pressed down on an element",
        "onmouseenter" => "onmouseenter - Script to be run when the mouse pointer enters the element",
        "onmouseleave" => "onmouseleave - Script to be run when the mouse pointer leaves the element",
        "onmousemove" => "onmousemove - Script to be run as the mouse moves over the element",
        "onmouseout" => "onmouseout - Script to be run when the mouse pointer leaves the element",
        "onmouseover" => "onmouseover - Script to be run when the mouse pointer enters the element",
        "onmouseup" => "onmouseup - Script to be run when a mouse button is released over an element",
        "onmousewheel" => "onmousewheel - Script to be run when a mouse wheel is being scrolled over an element",
        "onpause" => "onpause - Script to be run when the media is paused either by the user or programmatically",
        "onplay" => "onplay - Script to be run when the media has been started or is no longer paused",
        "onplaying" => "onplaying - Script to be run when the media is playing after having been paused or stopped for buffering",
        "onprogress" => "onprogress - Script to be run when the browser is in the process of getting the media data (downloading the media)",
        "onratechange" => "onratechange - Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode)",
        "onreset" => "onreset - Script to be run when a reset button in a form is clicked",
        "onresize" => "onresize - Script to be run when the browser window is being resized",
        "onscroll" => "onscroll - Script to be run when an element's scrollbar is being scrolled",
        "onseeked" => "onseeked - Script to be run when the user is finished moving/skipping to a new position in the media",
        "onseeking" => "onseeking - Script to be run when the user starts moving/skipping to a new position in the media",
        "onselect" => "onselect - Script to be run when the element gets selected",
        "onshow" => "onshow - Script to be run when a <menu> element is shown as a context menu",
        "onsort" => "onsort - Script to be run when the user clicks on a column to sort the table by that column",
        "onstalled" => "onstalled - Script to be run when the browser is unable to fetch the media data for whatever reason",
        "onsubmit" => "onsubmit - Script to be run when a form is submitted",
        "onsuspend" => "onsuspend - Script to be run when the browser is intentionally not getting media data",
        "ontimeupdate" => "ontimeupdate - Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media)",
        "ontoggle" => "ontoggle - Script to be run when the user opens or closes the <details> element",
        "onvolumechange" => "onvolumechange - Script to be run each time the volume of a video/audio has been changed",
        "onwaiting" => "onwaiting - Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data)",
        "accesskey" => "accesskey - Defines a keyboard shortcut to activate or focus on the element",
        "autocapitalize" => "autocapitalize - Defines whether the element should automatically get capitalized",
        "autofocus" => "autofocus - Defines that the element should automatically get focus when the page loads",
        "aria-hidden" => "aria-hidden - Defines whether an element is hidden or not from screen readers",
        "class" => "class - Defines one or more class names for an element (refers to a class in a style sheet)",
        "contenteditable" => "contenteditable - Defines whether the content of an element is editable or not",
        "d" => "d - Defines a path to be drawn",
        "data-*" => "data-* - Used to store custom data private to the page or application",
        "dir" => "dir - Defines the text direction (left-to-right or right-to-left) of an element",
        "draggable" => "draggable - Defines whether an element is draggable or not",
        "enterkeyhint" => "enterkeyhint - Defines what action (like submitting a form) should be taken when the Enter key is pressed",
        "exportparts" => "exportparts - Defines the parts of an element that should be exported (copied) when the user copies the element",
        "fill" => "fill - Defines the color used to paint the interior of the shape",
        "hidden" => "hidden - Defines whether an element is visible or not",
        "id" => "id - Defines a unique identifier (ID) for an element",
        "inert" => "inert - Defines whether an element should be displayed as if it were disabled",
        "inputmode" => "inputmode - Defines the type of data expected in an input field (e.g., email, URL)",
        "is" => "is - Defines the tag name of a custom element",
        "itemid" => "itemid - Defines the unique identifier (ID) of an item",
        "itemprop" => "itemprop - Defines the property of an item",
        "itemref" => "itemref - Defines one or more elements that the current item is related to",
        "itemscope" => "itemscope - Defines the scope of an item",
        "itemtype" => "itemtype - Defines the type of an item",
        "href" => "href - Defines the URL of the linked document or resource",
        "lang" => "lang - Defines the language of the element",
        "nonce" => "nonce - Defines a cryptographic nonce (number used once) for validating forms and scripts",
        "part" => "part - Defines the name of a part in a shadow DOM",
        "popover" => "popover - Defines a tooltip or popover for an element",
        "role" => "role - Defines the role of an element",
        "slot" => "slot - Defines the name of a slot in a shadow DOM",
        "spellcheck" => "spellcheck - Defines whether the element should have its spelling and grammar checked",
        "stroke-width" => "stroke-width - Defines the width of the outline (stroke) of an element",
        "stroke-linejoin" => "stroke-linejoin - Defines how the corners of a shape (path) should be connected",
        "stroke-linecap" => "stroke-linecap - Defines how the ends of a line or path should be drawn",
        "stroke" => "stroke - Defines the color used to paint the outline (stroke) of an element",
        "style" => "style - Defines inline CSS styles for an element",
        "tabindex" => "tabindex - Defines the tabbing order (the order in which elements are focused when the user navigates through them using the 'tab' key)",
        "title" => "title - Defines extra information about an element (usually displayed as a tooltip)",
        "translate" => "translate - Defines whether the content of an element should be translated or not",
        "type" => "type - Defines the type of an element (e.g., for <input> elements)",
        "virtualkeyboardpolicy" => "virtualkeyboardpolicy - Defines how virtual keyboards should be used on touchscreen devices",
        "accept" => "accept - Defines the types of files that the server accepts (only for <input type='file'>)",
        "autocomplete" => "autocomplete - Defines whether the input field should have autocomplete enabled or not",
        "capture" => "capture - Defines whether the camera or microphone should be activated to capture media",
        "crossorigin" => "crossorigin - Defines how the element should handle CORS (cross-origin resource sharing) requests",
        "dirname" => "dirname - Defines the name of the directory that the server should use to store uploaded files (only for <input type='file'>)",
        "disabled" => "disabled - Defines whether the element should be disabled or not",
        "elementtiming" => "elementtiming - Defines the performance measurement timing for a web component",
        "for" => "for - Defines which form element(s) a label is bound to",
        "max" => "max - Defines the maximum value for an input field (e.g., for <input type='number'> or <input type='date'>)",
        "maxlength" => "maxlength - Defines the maximum number of characters allowed in an input field (e.g., for <input type='text'>)",
        "min" => "min - Defines the minimum value for an input field (e.g., for <input type='number'> or <input type='date'>)",
        "minlength" => "minlength - Defines the minimum number of characters required in an input field (e.g., for <input type='text'>)",
        "multiple" => "multiple - Defines whether the user can select multiple values in an input field (e.g., for <input type='file'> or <select> with the multiple attribute)",
        "pattern" => "pattern - Defines a regular expression pattern that the input's value must match (e.g., for <input type='text'>)",
        "placeholder" => "placeholder - Defines a short hint (a word or short phrase) intended to aid the user with data entry",
        "readonly" => "readonly - Defines whether an input field is read-only or not",
        "rel" => "rel - Defines the relationship between the current document and the linked document or resource",
        "required" => "required - Defines whether an input field must be filled out before submitting the form",
        "size" => "size - Defines the width (in characters) of an input field (e.g., for <input type='text'>)",
        "step" => "step - Defines the legal number intervals for an input field (e.g., for <input type='number'>)",
        "xmlns" => "xmlns - Defines the namespace of an XML document",
        "viewBox" => "viewBox - Defines the position and dimensions, in user space, of an SVG viewport",
    ],
];
