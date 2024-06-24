<?php
/*
Encapsulation in PHP OOP (Object-Oriented Programming) is the concept of bundling the data (attributes) and the methods (functions) that operate on the data into a single unit, known as a class. It involves restricting access to some of an object's components, typically by using access modifiers like public, private, and protected.

Here are the key aspects of encapsulation in PHP:

1. Access Modifiers:
   - PHP provides three access modifiers: public, private, and protected.
   - public: Members (properties or methods) declared as public are accessible from outside the class.
   - private: Members declared as private are only accessible within the class that defines them.
   - protected: Members declared as protected are accessible within the class and its subclasses.
*/
   class Access {
       public $publicVar;     // Accessible from outside the class
       private $privateVar;   // Accessible only within the class
       protected $protectedVar; // Accessible within the class and its subclasses
   }
   
/*
2. Getters and Setters:
   - Encapsulation often involves using getter and setter methods to control access to the private or protected properties of a class.
   - Getter methods allow you to retrieve the value of a property, and setter methods allow you to set or modify the value.

*/
   class GetSet {
       private $value;

       public function getValue() {
           return $this->value;
       }

       public function setValue($newValue) {
           $this->value = $newValue;
       }
   }
   
/*
3. Information Hiding:
   - Encapsulation hides the internal implementation details of a class from the outside world. This is known as information hiding.
   - It allows you to change the internal implementation of a class without affecting the code that uses the class.

*/
   class Hidden {
       private $hiddenData;

       public function processData() {
           // Some internal processing using $hiddenData
       }
   }
   
/*
Encapsulation helps in organizing code, enhancing security, and providing a clear and controlled way to interact with the internal state of objects. It also contributes to the principle of abstraction, as users of a class don't need to know the intricate details of its implementation, but can interact with it through well-defined interfaces (public methods).
*/