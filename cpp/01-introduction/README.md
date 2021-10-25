## Class Definition
**`Class` is a blueprint that defines the variables (members) and the methods (functions) common to all objects of a certain kind.**

An example of class:
```cpp
class Person
{
public:
    string name;
    int age;
};
```

In the example:

- The ‍‍`class` keyword is used to create a class.
- `Person` is the name of the class.
- At `line 3` we define the members as `public`. public could be replaced with `private` or `protected`.
- On `lines 4 and 5` class members are declared (the properties that characterize the class). 

If the class member declared as `public` then it can be accessed everywhere. If the class members declared as `protected` then it can be accessed only within the class itself and by inheriting child classes. If the class members declared as `private` then it may only be accessed by the class that defines the member.


## Object Creation
**An `Object` is an element (or instance) of a class; objects have the behaviors of their class. The object is the actual component of programs, while the class specifies how instances are created and how they behave.**

Using the defined class we can create objects and set properties.

```cpp
#include <string>
#include <iostream>
​
using namespace std;
​
class Person
{
public:
    string name;
    int age;
​
    void introduceYourself()
    {
        cout << "I'm " << name << " and I'm " << age << " years old.";
    }
};
​
int main()
{
    // create object
    Person personObject;
​
    // set properties
    personObject.name = "Seyed Reza Bazyar";
    personObject.age = 25;
​
    personObject.introduceYourself();
    return 0;
}
```

Output:

`I'm Seyed Reza Bazyar and I'm 25 Years old.`

Explanation:

- At `lines 6 - 16` a class is defined. Its members are `name` and `age`. person declares a structure to hold the details of a person which consists of 2 data fields, namely `name` and `age` at `lines 9 and 10`. 
- The class also has a function `introduceYourself` that uses the members.
- At `line 21` an object is created.
- At `lines 24 and 25` values are set to the members.
- At `lines 27` the function `introduceYourself` is called and a message is printed.