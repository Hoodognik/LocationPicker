<h1>LocationPicker - Octobercms formwidget</h1>
This widget allows to easily find and select a location on the Google map. Along with a single point selection, it allows to choose an area by providing its center and the radius.<br>
The other feature of the widget is automatic address resolver which allows to get address line from the selected latitude and longitude. The widget also supports searching by address typed into the bound input element which uses auto-complete feature from Google API to make the search process easier. In this case the marker will be automatically positioned on the map after successful address resolution.<br>
This widget uses jquery locationpicker plugin.<br>
http://logicify.github.io/jquery-locationpicker-plugin/<br>

<h2>Installation.</h2>
You need to register a widget into your plugin Plugin.php.
<pre>
public function registerFormWidgets()
{
   return [
       'W2Y\FormWidgets\LocationPicker\Widget' => [
           'label' => 'LocationPicker',
           'code' => 'w2y-locationpicker'
       ],
   ];
}
</pre>

<h2>Usage.</h2>

You can add this widget to your forms simply by decalring the field type as w2y-locationpicker.<br>
The default values are displayed, as shown in the example:<br>
<pre>
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
</pre>
map_height - height maps (values are in px or %).<br>
map_width - widht maps (values are in px or %).<br>
field_lattitude - show / hide the "latitude" in the backend (values true / false).<br>
field_longitude - show / hide the "longitude" in the backend (values true / false).<br>
field_radius - show / hide the "radius" in the backend (values true / false).<br>
scrollwheel - show / hide to scroll the map (values true / false).<br>
latitude - latitude (values in the coordinates).<br>
longitude - latitude (values in the coordinates).<br>
radius - range are displayed around the point (the values in meters).<br>
zoom - the map zooms (values from 1 to 21)<br>
update_mod_tab: -<br>
update_mod_modal: -<br>
if you want to use this widget to bootstrap tabs, or bootstrap modal window, you use mozheet update_mod_tab and update_mod_modal to autosize maps after opening tabs / modal window. if the value of this option will be equal to the truth, the map will be updated when you open any tabs / modal window.<br>
You can specify as the value of the selector, or more selectors separated by a comma ",". in this case the card will be updated only when you open your selected tabs / modal window.<br>
