Link Page Chooser for Kirby Panel Custom Fields
==========================================

Usage
-----

This Custom Field was created to respond to a need I had in a project. On some pages, their were links/buttons availables to navigate throught the pages of the website.

For link in Kirby, you normally use an input text with the URL validator. But their is 2 issues with this :

1- You can't write local URLs like "http://localhost:8888/mypage" because the validator want an extension like .com, .org, etc.

2- Your user are not really good with URLs and links

This custom fields will appear like a dropdown list in which are listed all pages of the Kirby website. The user will just have to choose the page he wants.

Installation
------------

The folder "page" need to be placed in the "fields" folder (in your website panel for just a project or kirby panel if it's for all projects).

The page chooser custom field is simply declared with the type "page". Take a look at the blueprint ;).

Warning - Issues
----------------

When a URL's page is modified, the links are not regenerated. So if a URL is modified, you need to go back to the page with the Page Chooser custom field, rechoose the destination page and save it.

Any suggestion ?
----------------

Feel free to propose improvements or modifications.