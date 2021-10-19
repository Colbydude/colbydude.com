<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PortfolioProject extends Component
{
    /**
     * The image to be placed in.
     *
     * @var string
     */
    public ?string $image;

    /**
     * The video to be placed in.
     *
     * @var string
     */
    public ?string $video;

    /**
     * The name of the project.
     *
     * @var string
     */
    public string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $image = null, $video = null)
    {
        $this->name = $name;
        $this->image = $image;
        $this->video = $video;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.portfolio-project');
    }
}
