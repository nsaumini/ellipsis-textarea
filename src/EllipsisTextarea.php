<?php

namespace Saumini\EllipsisTextarea;

use Laravel\Nova\Fields\Textarea;

class EllipsisTextarea extends Textarea
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'ellipsis-textarea';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = true;

    /**
     * The maximum length used for the textarea in index view.
     *
     * @var integer
     */
    public $displayLength = 50;

    /**
     * Set the maximum length used for the textarea in index view.
     *
     * @param  integer $displayLength
     * @return $this
     */
    public function displayLength($displayLength)
    {
        $this->displayLength = $displayLength;

        return $this;
    }

    /**
     * Prepare the element for JSON serialization.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), [
            'displayLength' => $this->displayLength,
        ]);
    }
}
