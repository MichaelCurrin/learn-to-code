###################
### Basic Types ###
###################

### Types ###

# Boolean
IO.puts true

# Integer
IO.puts 1
IO.puts 0x1F

# Float
IO.puts 1.0

# Atom aka symbol.
IO.puts :ok

IO.puts "elixir"
IO.puts [1, 2, 3] # list
# (Protocol.UndefinedError) protocol String.Chars not implemented for {1, 2, 3} of type Tuple
#IO.puts {1, 2, 3} # tuple

### Basic arithmetic ###

IO.puts 1 + 2
IO.puts 5 * 5
# Always returns float, regardless of using float or integer inputs.
IO.puts 10 / 2
