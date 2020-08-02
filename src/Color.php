<?php

namespace Timothyasp\Color;

use Laravel\Nova\Fields\Field;

class Color extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'color';

    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this->slider();
        $this->autoHidePicker(false);
    }

    public function pickerType(string $type)
    {
        return $this->withMeta([ 'pickerType' => $type ]);
    }

    public function palette(array $palette)
    {
        return $this->withMeta([ 'palette' => $palette ]);
    }

    public function chrome()
    {
        return $this->pickerType('chrome');
    }

    public function compact()
    {
        return $this->pickerType('compact');
    }

    public function grayscale()
    {
        return $this->pickerType('grayscale');
    }

    public function material()
    {
        return $this->pickerType('material');
    }

    public function photoshop()
    {
        return $this->pickerType('photoshop');
    }

    public function sketch()
    {
        return $this->pickerType('sketch');
    }

    public function slider()
    {
        return $this->pickerType('slider');
    }

    public function swatches()
    {
        return $this->pickerType('swatches');
    }

    public function hex8()
    {
        return $this->withMeta([ 'hex8' => true ]);
    }

    public function autoHidePicker(bool $shouldAutoHide = true)
    {
        return $this->withMeta([ 'autoHidePicker' => $shouldAutoHide ]);
    }

}
