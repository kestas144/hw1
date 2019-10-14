# hw1
1) nfq\calculateHomeWorkSum() 
This function accepts arguments with data types(float, integer, string, bool) calculates and returns all arguments value

2) nfq\Akademija\NotTyped\calculateHomeWorkSum()
This function accepts arguments with data types(float, integer, string, bool) calculates and returns all arguments value as integer, 
if arguments(3, 2.2, '1') passed to function, calculated value will be 6.2 but function returns 6 

3) nfq\Akademija\Soft\calculateHomeWorkSum()
This function accepts arguments with data types(float, integer, string, bool) but arguments that has different data type than int,will be casted to int, then function calculates and returns all arguments value as integer, 
if arguments(3, 2.2, '1') passed to function, calculated value will be 6 and function return also 6 

4) nfq\Akademija\Strict\calculateHomeWorkSum()
This class has declare(strict_types=1) directive, and it should only accept arguments with data types integer, 
if argument that has different data type than int is passed, function throws TypeError, 
but because nfq\Akademija\Strict\calculateHomeWorkSum() method is called not directly in class, strict_types=1 directive not working and function works like 3) nfq\Akademija\Soft\calculateHomeWorkSum()
