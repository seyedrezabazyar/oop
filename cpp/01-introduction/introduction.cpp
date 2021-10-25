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