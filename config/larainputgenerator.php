<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Upload Images
    |--------------------------------------------------------------------------
    |
    | Define the allowed image file types for uploads.
    |
    */
    'uploadImages' => env('UPLOAD_IMAGES', 'image/jpg, image/jpeg, image/png, image/gif, image/bmp, image/svg'),

    /*
    |--------------------------------------------------------------------------
    | Upload Videos
    |--------------------------------------------------------------------------
    |
    | Define the allowed video file types for uploads.
    |
    */
    'uploadVideos' => env('UPLOAD_VIDEOS', 'video/mp4, video/avi, video/mpeg, video/mov, video/wmv, video/flv'),

    /*
    |--------------------------------------------------------------------------
    | Upload Documents
    |--------------------------------------------------------------------------
    |
    | Define the allowed document file types for uploads.
    |
    */
    'uploadDocuments' => env('UPLOAD_DOCUMENTS', '.pdf, .doc, .docx, .xls, .xlsx, .ppt, .pptx, .txt, .rtf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document'),

    /*
    |--------------------------------------------------------------------------
    | Upload Audio
    |--------------------------------------------------------------------------
    |
    | Define the allowed audio file types for uploads.
    |
    */
    'uploadAudio' => env('UPLOAD_AUDIO', 'audio/mp3, audio/wav, audio/ogg, audio/wma, audio/aac'),

    /*
    |--------------------------------------------------------------------------
    | Upload All
    |--------------------------------------------------------------------------
    |
    | Define a wildcard option to allow all file types for uploads.
    |
    */
    'uploadAll' => env('UPLOAD_ALL', '*'),

];
