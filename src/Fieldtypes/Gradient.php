<?php

namespace Stuartcusackie\StatamicGradientField\Fieldtypes;

use Statamic\Fields\Fieldtype;

class Gradient extends Fieldtype
{
    protected $keywords = ['gradient', 'color', 'colour', 'swatch', 'figma'];

    protected $icon = '<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9 13V11H11V13M11 15V13H13V15M11 11V9H13V11M9 9V7H11V9M9 17V15H11V17M3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3H5C3.9 3 3 3.9 3 5M18 15V17H16V15M18 11V13H16V11M18 7V9H16V7M11 5V7H13V5H15V7H13V9H15V11H13V13H15V15H13V17H15V19H13V17H11V19H5V5Z"></path></svg>';

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