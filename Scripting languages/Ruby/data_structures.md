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

my_obj << 100
my_obj.slice -1
# 100
```

## Hash

## Basic

Here using strings as keys.

```ruby
my_obj = {}
my_obj['foo'] = 'a'
# => "a"
puts my_obj
# => {"foo"=>"a"}

puts my_obj['foo']
# a

puts my_obj['not_a_key']
# nil
```

## Symbols

Here we store with symbols as keys. This gives better performance.

```ruby
my_obj = {
  "foo": 'a',
  'bar': 2,
  'baz': nil,
}
# => {:foo=>"a", :bar=>2, :baz=>nil}

puts my_obj.keys
# => [:foo, :bar, :baz]

puts my_obj[:foo]
# a

# Looking up by key will NOT give the result stored against the symbol, but nil.
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

### Defaults

Override default value of `nil`.

```ruby
my_obj = {}
my_obj.default = 0
puts my_obj['not_a_key']
# 0
```

Alternatively:

```ruby
my_obj = Hash.new(0)
puts my_obj['not_a_key']
# 0
```

**Be careful** when using a _data structure_ as a default. If you use a literal value, it will be created once and share for every default case. See example below.

```ruby
my_obj = {}
my_obj.default = []

my_obj['foo'] = ['a']
my_obj['foo'] << 'b'
puts my_obj
# ['a', 'b']

# Append to non-existent key's value.
my_obj['FOO'] << 1
# And another.
my_obj['BAR'] << 2
=> [1, 2]
# But it is actually the same value.
my_obj['FOO']
=> [1, 2]

# Also, you appended to the default and did not set a new value, so can't actually see in value in other views.
puts my_obj.keys
# ['foo']
```

So instead do this. 

For a default value as an array.

```ruby
my_obj = Hash.new { |hash, key| hash[key] = [] }

my_obj['foo'] = [1]
my_obj['FOO'] << 1
my_obj['BAR'] << 2
puts my_obj
# => {"foo"=>[1], "FOO"=>[1], "BAR"=>[2]}
```

For a default value as a hash:

```ruby
my_obj = Hash.new { |hash, key| hash[key] = {} }
```

## Struct

Arguments are optional.

```ruby
MyStruct = Struct.new(:foo, :bar, :baz)

my_obj = MyStruct.new('a', 2)
# => #<struct MyStruct foo="a", bar=2, baz=nil>

puts my_obj[:foo]
# a

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
