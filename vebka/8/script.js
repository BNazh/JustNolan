/*function findFour(element){
	return element==4;
}
function
let x = [3,4,5,1,9];
let y=  x.findIndex(findFour);
console.log(y);
*/

let students = [{name:"Bill",surname:"Gates",age:20},{name:"Steve",surname:"Jobs",age:21},{name:"Jeff",surname:"Bezos",age:19}];

function sortByName(a,b){
	return a.name.localeCompare(b.name);
}
//students.sort(sortByName);
students.sort((a,b) => a.surname.localeCompare(b.surname));
console.log(students);