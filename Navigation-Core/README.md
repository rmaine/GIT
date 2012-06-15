Navigation-Core
===============

Core navigation code for self aware site nav.
The files in this repository are PHP scripts that are used to run a web site design/management system that I have written that allows me to "wireframe" a site in realtime.

The core of the system is the navigation code. This code gets included on every page on the site. It simply uses $filePath = dirname($_SERVER["PHP_SELF"]); to get the name and path of the current page then breaks it apart into an array. It then steps through the array to build a pseudo cookie trail there are no hard coded links, the page checks it's environment for it's parent, sibling and child elements in the file system then builds it's navigation on the fly.

I have written slightly more complex versions of this that recursively follow the entire directory structure to build a full site tree style navigation structure. Other features that have been added are the inclusion of appropriate Mac or Windows icons denoting file-type etc. What makes this approach so useful is that the navigation for the entire site is built on the fly each time a page is accessed so that a site can be restructured dynamically, pages renamed etc. and the navigation instantly is modified to accomodate the changes. This enables the design and layout of a site to accure in real time just by adding folders and blank pages. Once the customer is happy with the dynamics and flow content can be added immediately as the wireframe is the actual fully functional site. If at some point changes to the site structure need to be made it is as simple as moving or renaming files and folders around on the server. Much of the Edmonds Community College site still runs on an earlier version of the code that I wrote back around 2003. It originally was the sole navigation system for about 6,000 to 7,000 pages.

 Each page on the site is actually a folder with an index.php page and any page specific files, images etc. This keeps content associated with a page from being spread all over the site. If a page is moved or deleted its associated files move or are deleted with it. The actual pages are not as they would seem either. They are just a series of string declarations, not an html page at all. This enables the page to be sucked into a forms based template that will allow it to be edited via the browser.
 
 There are two final parts to the system, the site constants page and the actual theme templates. This system can work with just about any theme or template available with very little modification. The site constants page contains all of the little bits that are used repeatedly throughout the site. Name, titles, email addresses, dates etc. These of course could go into a database but for most sites just reading the flat file is faster.
 
 This is the basic system, of course add-in or plugin code can be integrated as needed but the core pieces allow the construction of an actual functioning web site to accoure as fast as you can add and rename copies of the content folders. The really cool thing is that the entire site management system weighs in at not at megabytes or even at hundreds of kilobytes. The central core including multiple templates comes in at well under 100k.
 
 

