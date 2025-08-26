<?php

namespace Stuartcusackie\GradientField\Fieldtypes;

use Statamic\Fields\Fieldtype;

class GradientField extends Fieldtype
{
    protected $icon = 'system';
    // or
    //protected $icon = '<svg> ... </svg>';
    // or
    /*function icon()
    {
        return file_get_contents(resource_path('svg/left_shark.svg'));
    }*/

    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }
}