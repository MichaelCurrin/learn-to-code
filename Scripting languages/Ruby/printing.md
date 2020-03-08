# Printing

## Basic

```ruby
puts 'Hello, world'
```

## To string

```
1,2,3].to_s
=> "[1, 2, 3]"
```

## Inspect

```ruby
[1,2,3].inspect
=> "[1, 2, 3]"
```

See more details in [article](https://medium.com/rubycademy/display-complex-objects-d897be936ae0).


## Pretty

Print object as prettified [JSON](https://www.w3schools.com/whatis/whatis_json.asp) text.

```ruby
require 'json'

my_object = { :array => [1, 2, 3, { :sample => "hash"} ], :foo => "bar" }
puts JSON.pretty_generate(my_object)
```

```ruby
{
  "array": [
    1,
    2,
    3,
    {
      "sample": "hash"
    }
  ],
  "foo": "bar"
}
```

Example from: [source](https://stackoverflow.com/questions/86653/how-to-pretty-format-json-output-in-ruby-on-rails).
