This widget allows to easily find and select a location on the Google map. Along with a single point selection, it allows to choose an area by providing its center and the radius.
The other feature of the widget is automatic address resolver which allows to get address line from the selected latitude and longitude. The widget also supports searching by address typed into the bound input element which uses auto-complete feature from Google API to make the search process easier. In this case the marker will be automatically positioned on the map after successful address resolution.
This widget uses jquery locationpicker plugin. 
http://logicify.github.io/jquery-locationpicker-plugin/

Installation.
You need to register a widget into your plugin Plugin.php.

public function registerFormWidgets()
{
   return [
       'W2Y\FormWidgets\LocationPicker\Widget' => [
           'label' => 'LocationPicker',
           'code' => 'w2y-locationpicker'
       ],
   ];
}

Usage.

You can add this widget to your forms simply by decalring the field type as w2y-locationpicker.
The default values are displayed, as shown in the example:
contact-map:
   label: Address
   type: w2y-locationpicker
   options: 
       map_height: 400px
       map_width: 100%
       field_lattitude: true
       field_longitude: true
       field_radius: true
       scrollwheel: true
       latitude: 56.5010397
       longitude: 84.99245059999998
       radius: 100
       zoom: 15
       update_mod_tab: false
       update_mod_modal: false

map_height - height maps (values are in px or %).
map_width - widht maps (values are in px or %).
field_lattitude - show / hide the "latitude" in the backend (values true / false).
field_longitude - show / hide the "longitude" in the backend (values true / false).
field_radius - show / hide the "radius" in the backend (values true / false).
scrollwheel - show / hide to scroll the map (values true / false).
latitude - latitude (values in the coordinates).
longitude - latitude (values in the coordinates).
radius - range are displayed around the point (the values in meters).
zoom - the map zooms (values from 1 to 21)
update_mod_tab: -
update_mod_modal: -
if you want to use this widget to bootstrap tabs, or bootstrap modal window, you use mozheet update_mod_tab and update_mod_modal to autosize maps after opening tabs / modal window. if the value of this option will be equal to the truth, the map will be updated when you open any tabs / modal window.
You can specify as the value of the selector, or more selectors separated by a comma ",". in this case the card will be updated only when you open your selected tabs / modal window.
