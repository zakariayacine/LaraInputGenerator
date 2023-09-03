# LaraInputGenerator

LaraInputGenerator is a Laravel package designed to simplify input automation tasks within your Laravel applications. With LaraInputGenerator, you can effortlessly create input forms, textareas, selects, and file uploads with ease.

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/zakariayacine/larainputgenerator/blob/main/LICENSE)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/zakariayacine/larainputgenerator)](https://packagist.org/packages/zakariayacine/larainputgenerator)
[![Total Downloads](https://img.shields.io/packagist/dt/zakariayacine/larainputgenerator)](https://packagist.org/packages/zakariayacine/larainputgenerator)

## Installation

You can install LaraInputGenerator via Composer. Open your terminal and navigate to your Laravel project directory, then run:

```bash
composer require zakariayacine/larainputgenerator
```

To publish the package's assets, including Blade components, run the following command:

```bash
php artisan vendor:publish --tag=larainputgenerator-config
```

This command will make the package's components available for use in your views.

## Usage

### Input

```blade
<x-InputField
    label="informations of the input"
    type="text"
    name="name of the input"
    :value="$var"
    :errors="$errors"
/>
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `label`   | `string` | **Required**. Label of the input |
| `type`    | `Parameter` | **Required**. Can be: 'text', 'password', 'email', 'tel', 'number', 'date', 'time', 'datetime-local', 'file', 'checkbox', 'radio' |
| `name`    | `string` | **Required**. The name of the input |
| `value`   | `variable` | **NOT Required**. Value can be a string or an integer |
| `errors`  | `variable` | **Required**. Errors are used in request validation |

### Textarea

```blade
<x-textarea
    name="description"
    label="Description"
    :value="$description"
    :errors="$errors"
/>
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `label`   | `string` | **Required**. Label of the textarea |
| `name`    | `string` | **Required**. The name of the textarea |
| `value`   | `variable` | **NOT Required**. Value can be a string or an integer |
| `errors`  | `variable` | **Required**. Errors are used in request validation |

### Select

```blade
<x-select
    name="test"
    label="select test"
    :options="$options"
    :value="$selectedValue"
    :errors="$errors"
/>
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `label`   | `string` | **Required**. Label of the select |
| `name`    | `string` | **Required**. The name of the select |
| `options` | `array` | **Required**. Example: `['option1' => 'Option 1', 'option2' => 'Option 2']` |
| `value`   | `variable` | **NOT Required**. Value can be a string or an integer |
| `errors`  | `variable` | **Required**. Errors are used in request validation |

### fileUpload

```blade
<x-fileUpload
    name="tests"
    label="selects test"
    :accept="config('larainputgenerator.upload**see example**')"
    :multiple=true
/>
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `label`   | `string` | **Required**. Label of the upload file system |
| `name`    | `string` | **Required**. The name of the upload file system |
| `accept`  | `variable` | **Required**. Example: `config('larainputgenerator.uploadImages'), config('larainputgenerator.uploadVideos'), config('larainputgenerator.uploadDocuments'), config('larainputgenerator.uploadAudio'), config('larainputgenerator.uploadAll')` |
| `multiple`| `bool`   | **NOT Required**. Value can be a string or an integer |

For more details and advanced usage examples, please refer to the [official documentation](https://github.com/zakariayacine/larainputgenerator).

## License

This package is open-sourced software licensed under the [MIT License](LICENSE).
