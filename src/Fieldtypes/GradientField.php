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

    protected $keywords = ['gradient', 'color', 'colour', 'swatch', 'figma'];

    protected function configFieldItems(): array
    {
        return [
            'presets' => [
                'display' => 'Presets',
                'instructions' => 'Add RGB or Hex linear gradients, e.g. `linear-gradient(90deg, rgba(255,0,0) 0%, rgba(0,255,0) 100%)`.',
                'type' => 'list',
                'default' => 'regular',
                'options' => [
                    'regular' => __('Regular'),
                    'enhanced' => __('Enhanced'),
                ],
                'width' => 50
            ],
            'allow_any_gradient' => [
                'display' => 'Allow Any Gradient',
                'instructions' => 'Allow entering any gradient via picker or field input.',
                'type' => 'toggle',
                'default' => true,
                'width' => 50
            ],
            'default_gradient' => [
                'display' => 'Default Gradient',
                'instructions' => 'Enter a default gradient.',
                'type' => 'text',
                'default' => '',
                'width' => 50
            ],
        ];
    }

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