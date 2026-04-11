<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class JobCard extends Component
{
    // <--- THIS IS THE TOPIC FEATURE
    public function __construct(
        public string $title,
        public string $company,
        public bool $isRemote = false,
    ) {}

    public function render(): View
    {
        return view('components.job-card');
    }
}