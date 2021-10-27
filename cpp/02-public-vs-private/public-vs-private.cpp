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