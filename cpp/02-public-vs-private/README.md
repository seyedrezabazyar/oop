## Public vs Private
**`Public` properties can be accessed or modified `anywhere`. Public members are members that are accessible both inside and outside the scope of your class.**

**`Private` properties and functions can be accessed or modified only `in the class body`. Private members are class members that are hidden from the outside world. The private members implement the OOP concept of data hiding. The private member of a class can be used only by the member functions of the class in which it is declared. Private members cannot be inherited by other classes.**

It can be understood via the following code:
```php
#include <string>
#include <iostream>

using namespace std;

class Person
{
private:
    // set default value for id
    string id = "1";
    
public:
    string name;
    int age;

    void printData()
    {
        cout << "Name: " << name << endl;
        cout << "Age: " << age << endl;
        cout << "Id: " << id << endl;
    }
};

int main()
{
    // create object
    Person personObject;

    // set properties
    personObject.name = "Seyed Reza Bazyar";
    personObject.age = 25;
    // can't access privates from outside of the class
    // personObject.id = "new_id"; //Error

    personObject.printData();
}
```

Output:
```
Name: Seyed Reza Bazyar
Age: 25
Id: 1
```

Explanation:

- Both public and private properties can be accessed/modified in the class body: for public properties: `lines 18 and 19`, for private properties: `line 20`.
- Outside the `Person` class body, only public properties can be accessed/modified - `lines 30 and 31`.
- If we uncomment `line 33` the code will not execute. Because a private member (`id` in this case) cannot be accessed/modified from outside of the `Person` class body.
- At `lines 35` the function `printData` is called and a message is printed.