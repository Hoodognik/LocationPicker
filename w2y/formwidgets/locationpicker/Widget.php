<?php namespace W2Y\FormWidgets\LocationPicker;

use Backend\Classes\FormWidgetBase;
use HTML;

class Widget extends FormWidgetBase
{
    /**
     * {@inheritDoc}
     */
    // public $defaultAlias = 'address';
    public $defaultAlias = 'w2y_location_picker';
	

    // protected $fieldMap;

    /**
     * {@inheritDoc}
     */
    public function init()
    {
        // $this->fieldMap = $this->getConfig('fieldMap', []);
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('widget');
    }

    /**
     * Prepares the list data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['field'] = $this->formField;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addJs('http://maps.googleapis.com/maps/api/js?libraries=places&sensor=false');
        $this->addJs('js/locationpicker.jquery.min.js', 'core');
		
    }
}
