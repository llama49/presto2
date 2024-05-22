<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Fit;
use Spatie\Image\Enums\Unit;
use Illuminate\Bus\Queueable;
use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Enums\AlignPosition;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $path;
    private $fileName;

    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w , $h)
    {
        $this->path = dirname($filePath);
        $this->fileName = baseName($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

        $croppedImage = Image::load($srcPath)
                      ->fit(Fit::Crop, 300, 300)
                        ->watermark(
                            base_path('resources/img/watermarkFoto.png'),
                            width: 70,
                            height: 70,
                            alpha: 50,
                            paddingX: 5,
                            paddingY: 5,
                            paddingUnit: Unit::Percent,
                        )
                        ->save($destPath);

    }
}
