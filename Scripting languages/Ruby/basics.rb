#!/usr/bin/env ruby
# This script covers some ruby basics and can be executed to demonstrate
# ruby by example. The content is based on the Ruby Tutorial on the
# SoloLearn app or website. https://www.sololearn.com/


### Printing ###

puts "Hello world!"

# Output without line break.
print "This"
print " is one"
puts "line"


### Comments ###

# Single line comment.

=begin
This is a
multine comment.
=end


### Variables ###

some_string = 'single quotes'
another_string = "Double quotes"
some_int = 8
some_float = 1.58

# Variables starting with an uppercase letter are constants and produce
# a warning if changed later.
MyConst = 4

# Parallel assignment.
x = 10
y = 20
z = 30
x, y, z = 10, 20, 30

# Swapping values.
x, y = y, x


### Operations.

x = 5
y = 2

puts x + y

puts x - y

puts x*y
# int/int will be floor division to give an int.
puts x / 2
puts x / 2.0

puts x % 5

puts x**y

# Self-assignment operators.
x += y
x -= y
x *= y
x /= y
x %= y
x **= y


# Operator precedance.
# From highest to lowest priority.
# * exponentiation
# * multiplication
# * division
# * modulus from left to right
# * addition and subtraction from left to right


### Strings

puts 'How to escape: \' apostrophe'
puts "How to escape: \" double quote"
puts 'How to escape: \\ backslash'

my_name = 'Sam'
# Do string interpoliation.
puts "Hello #{my_name}"
# Literal, because of single quotes.
puts 'Hello #{my_name}'

age = 42
puts "He is #{age} years old."

a = 5
b = 2
puts "The sum is #{a + b}"

puts "A" + "B"

puts "A"*3

puts "Here are the two numbers\n " + String(a) + "\n " + String(b)


### Input

# Get user input - includes the newline.
puts 'Enter some text:'
user_name = gets
puts "Here it is: #{user_name}!"

puts 'Enter some text:'
# Remove new line at end.
user_name = gets.chomp
puts "Here it is: #{user_name}!"
