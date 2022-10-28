# contao-mega-menu
Contao Plugin that integrates a flexible and adjustable Mega Menu that drops down below the navigation.

## Features
- Mega Menus can be added and managed in the Contao Layout section. \
As many as needed.
- Those Mega Menus can than be assigned to the Pages you need them for in the Contao Page Settings. \
For any page different Mega Menus are possible.
- In the Themes Naviation Module one of several prepared templates for the Mega Menu can be selected.

## Setup
1. Navigate to Layout -> Mega Menü \
Add at least on MegaMenu by clicking "new menu".\
Inside this menu, you can add Contao content elements to build the content of the Mega Menu.

2. Navigate to Layout -> Site Structure -> Edit Page \
Go to the page Settings of the page, that will contain the mega menu.\
In the section "Mega menu settings" check "Enable mega menu".\
Select on of the Mega Menus you created in step (1.).
 
1. Navigate to Layout -> Themes -> Modules\
  Got to the frontend navigation module you want to output the Mega Menu.\
 Select one of the available mega menu templates as "navigation template".


## included navigation templates

- `nav_mega_menu_default`\
 Simple css only full width solution.
- `nav_mega_menu_default_noHover_justClick`\
Only opens on click, but ignores hover. Javascript is used.
- `nav_mega_menu_default_outside`\
  Places the Mega Menu outside the navigation html node.\ 
  This prevents the CSS solution to work, Javascript is needed, but not included in this budle.\
  
  Use Cases of `nav_mega_menu_default_outside`:
  -  place the Mega Menu wherever needed.
  -  Transion beetween Mega Menus or move them around

- more Templates when requiered
 
 
 
## customize Mega Menu templates

To customize the templates, css or js got to Layout -> Templates.
Click "new template" and select one of the `nav_mega_menu_***` templates, to create a copy you can build on.


