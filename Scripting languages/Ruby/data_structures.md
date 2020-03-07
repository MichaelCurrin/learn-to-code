# Data structures

## Array

```ruby
my_obj = ["a", 2, nil]
# => ["a", 2, nil]

puts my_obj[1]
# 2

puts my_obj.slice 1
# 2

puts my_obj.slice 1..2
# => [2, nil]
```

## Hash

Using strings as keys.

```ruby
my_obj = {}
my_obj['foo'] = 'a'
# => "a"
puts my_obj
# => {"foo"=>"a"}
```

Store with symbols as keys. This gives better performance.

```ruby
my_obj = {
  "foo": 'a',
  'bar': 2,
  'baz': nil,
}
# => {:foo=>"a", :bar=>2, :baz=>nil}

puts my_obj[:foo]
# a

puts my_obj["foo"]
# nil
```

This is shorthand for the above.

```ruby
my_obj_alt = {
  :foo => 'a',
  :bar => 2,
  :baz => nil,
}
# => {:foo=>"a", :bar=>2, :baz=>nil}
```

## Struct

Arguments are optional.

```ruby
MyStruct = Struct.new(:foo, :bar, :baz)

my_obj = MyStruct.new('a', 2)
# => #<struct MyStruct foo="a", bar=2, baz=nil>

puts my_obj[:foo]
a

puts my_obj[0]
# a
```

## Class

Arguments are required, unless a default is provided.

Note `attr_reader` to add getters to make attributes public to read but still not writable.

```ruby
class MyClass
  attr_reader :foo, :bar, :baz

  def initialize(foo, bar, baz=100)
    @foo = foo
    @bar = bar
    @baz = baz
  end
end

my_obj = MyClass.new('a', 2)
# => #<MyClass:0x00007f901f12e6a0 @foo="a", @bar=2, @baz=100>

puts my_obj.foo
# 'a'
```
