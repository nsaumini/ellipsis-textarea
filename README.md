# Nova Ellipsis Textarea
A Laravel Nova text area field with ellipsis support.

This field behaves same as Nova Textarea with addition of ellipsis support in index view.

## Installation

```bash
> composer require saumini/ellipsis-textarea
```

## Usage

```php
use Saumini\EllipsisTextarea\EllipsisTextarea;

public function fields(Request $request)
{
    return [
        EllipsisTextarea::make('Copy')
          ->maxlength(25),
    ];
}
```
