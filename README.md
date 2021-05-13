# Curriculum Generator
<img src="./assets/readme/Print1">
<img src="./assets/readme/Print2">
<img src="./assets/readme/Print3">
<br><br>

## What is It?
The **Curriculum Generator** is a very simple project where I look to test my knowledge about PHP and SASS. I will discourse more technically about this ahead. <br>
It doesn't have a **true utility**, because anyone can open a simple text editor and make the same thing. I made it more as a portfolio's project than a serviceable web application. <br>
So, what it does: There is some inputs where the user insert some data and submit. The server process that using the *dataResolve.php* and if it is validated the server returns your curriculum with those informations.<br> 
<br>
<br>

### My Personal Considerations
It took me **3 days** of work. At the first one I focused in the directories structure, the web routes (considering a type of friendly URL) and how I would render the pages.<br>
Speaking specifically about the render of the pages, I searched to use less code as I could. Being a Laravel developer, I kind of tried to bring some **blade template mentalities** to this project. Of course, I didn't have the same ease, but I still got an elegant result.<br>
I could finished it even earlier but the security would be less because the upload would not have any type of validation.<br>

#### About the beauty of the code...
I'm conscient that the code isn't clean or even easy understandable, but I haven't spent much time to look at that because It would take me a little bit more time. As I was focusing on fast code, I don't give too much attention on it.

## Technical Stuffs
Basically what happens in the application is: 
* The index.php requires the layout.php. The layout.php contains basically the head, header, body and the main of the project. The codes that every page will use is inserted there;
* In the layout.php's main a function named solveURL() is called. It is at Web.php, from there, other 2 functions are called: path() and route();
* The path() will go through other php archives where important vars will be seted and a validation process willbe done. After that, the path() will returns the path to wich view must be render inside the main according to the result at the validation (dataResolve.php);
* Then the route() function will recive the value returned by the path() as a parameter;
* The magic is done, there is your curriculum or the homepage with some error messages;
