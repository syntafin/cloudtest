<?php

namespace App;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

trait HasImage
{
    public function previewImage(): Attribute
    {
        return new Attribute(
            get: fn () => $this->image_path ? Storage::url($this->image_path) : $this->defaultPreviewImage(),
        );
    }

    protected function defaultPreviewImage(): string
    {
        return Storage::url('default.webp');
    }
}
