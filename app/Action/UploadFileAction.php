<?php

namespace App\Action;

use Illuminate\Http\UploadedFile;
use Storage;

class UploadFileAction
{
    protected UploadedFile $file;
    protected int $userId;

    public static function make(): self
    {
        return new static();
    }

    public function userId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function file(UploadedFile $file): self
    {
        $this->file = $file;
        return $this;
    }

    public function execute(): string
    {
        $filename = $this->generateUniqueFilename($this->file, $this->userId);
        $path = $this->file->storeAs('avatars', $filename, 'public');
        return Storage::url($path);
    }

    private function generateUniqueFilename(UploadedFile $file, $userId): string
    {
        $extension = $file->getClientOriginalExtension();
        return 'Events_' . time() . '_' . $userId . '.' . $extension;
    }
}
