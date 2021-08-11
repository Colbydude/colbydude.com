<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GameDevProject extends Component
{
    /**
     * The video to be placed in.
     *
     * @var string
     */
    public $video;

    /**
     * The name of the project.
     *
     * @var string
     */
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($video, $name)
    {
        $this->video = $video;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.game-dev-project');
    }
}
