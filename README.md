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
          ->displayLength(25),
    ];
}
```

Default display length set to 50.


## Screenshot

![Screenshot 1](https://raw.githubusercontent.com/nsaumini/ellipsis-textarea/master/.docs/example1.png)

