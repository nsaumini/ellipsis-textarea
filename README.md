# Nova Ellipsis Textarea
This field behaves same as Laravel Nova Textarea with addition of ellipsis support in index view.

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

## Screenshot

![Screenshot 1](.docs/example1.png)

