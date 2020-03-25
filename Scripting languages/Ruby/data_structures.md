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

### Basic

Here using a string (`'foo'`) as a key.

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

Initializing a hash with values in it.

```ruby
my_obj = {
  'foo' => 'bar', 
  'fiz' => 100 
}
# => {"foo"=>"bar", "fiz"=>100}
```

### Symbols

Here we store with _symbols_ as keys. This gives better performance. 

Note that a symbol (`:foo`) and a string (`'foo'`) may look similar but are **not** interchangeable e.g. If you stored with a symbol, you should lookup with a symbol.

```ruby
my_obj_alt = {
  :foo => 'a',
  :bar => 2,
  :baz => nil,
}
# => {:foo=>"a", :bar=>2, :baz=>nil}
```

This more modern syntax is equivalent but easier to read and write.

```ruby
my_obj = {
  foo: 'a',
  bar: 2,
  baz: nil,
}
# => {:foo=>"a", :bar=>2, :baz=>nil}
```

Now looking up values from either of the above.

```ruby
puts my_obj.keys
# => [:foo, :bar, :baz]

puts my_obj[:foo]
# a

# Looking up by key will NOT give the result stored against the symbol, but nil.
puts my_obj["foo"]
# nil
```

To be clear, when using the colon notation to separate key and value, you are using a symbol but just get to drop the colon before symbol name. You get a symbol even if use quotes - any quotes are **ignored**. 

```ruby
{a: 'b'}
=> {:a=>"b"}

{'a': 'b'}
=> {:a=>"b"}
```

And when using arrow (`=>`) notation, you store as a string.


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
