/** Classes */
'use strict';

// An object with properties and methods.
const myShape = {
	width: 50,
	height: 100,
	calcArea: function() {
		return this.width * this.height;
	}
};
// Treat object like associative array (of key-value pairs)
console.log(myShape.width, myShape.height);
// Use method on the object.
console.log(myShape.calcArea());
console.log();

// You can define a reusable template for an object like the one above.
const ShapeMaker = function(width, height) {
	this.width = width;
	this.height = height;
	this.calcArea = function() {
		return this.width * this.height;
	};
};
let mySecondShape = new ShapeMaker(50, 100);

// The above is limited. A class is another form of a template which is more advanced.
// The rest of this script deals with classes.

// See https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Classes#Boxing_with_prototype_and_static_methods

// Class declaration.
class Rectangle {
	constructor(width, height) {
		this.width = width;
		this.height = height;
	}
	calcArea() {
		return this.width * this.height;
	}
	// Getter. This can be called as a property without brackets.
	get area() {
		return this.calcArea();
	}
}

const r = new Rectangle(50, 100);
console.log(r.area);
console.log();

// Class expression.
let Square = class {
	constructor(side) {
		this.side = side;
	}
};

console.log(Square.name);
// Square

// Static methods.
class Point {
	constructor(x, y) {
		this.x = x;
		this.y = y;
	}

	static distance(a, b) {
		const dx = a.x - b.x;
		const dy = a.y - b.y;
		return Math.hypot(dx, dy);
	}
}

const p1 = new Point(5, 5);
const p2 = new Point(10, 7);
const d = Point.distance(p1, p2);
console.log(d);
console.log();

// Extending classes.
// Note only one class can be inherited from but you can use multiple mixins.
class Animal {
	constructor(name) {
		this.name = name;
	}
	speak() {
		console.log(`${this.name} makes a noise`);
	}
}
class Dog extends Animal {
	constructor(name) {
		super(name);
	}
	speak() {
		super.speak();
		console.log(`${this.name} barks`);
	}
}
const a = new Animal('Bert');
const b = new Dog('Wilfred');
a.speak();
b.speak();
console.log();

// Mixins.
let move = {
	walk() {
		console.log(`${this.name} walks`);
	}
};
let c = new Animal('Sven');
// Replace instance with one that has the mixin. One or more mixins can be used here.
c = Object.assign(c, move);
c.walk();
