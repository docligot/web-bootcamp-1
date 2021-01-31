// var, let, const

// const name = 'Rache';
// const age = 28;

// console.log('My name is ' + name + ' and I am ' + age);
// console.log(`My name is ${name} and I am ${age}`);
// const hello = `My name is ${name} and I am ${age}`;
// console.log(hello);

// const s = 'Hello World!';
// console.log(s.split(' '));

// const numbers = new Array(1,2,3,4,5);
// const fruits =['apples', 'oranges', 34, false];

// fruits[4] = 'rache';
// fruits.push('mangoes');
// fruits.unshift('berry');
// fruits.pop();
// // console.log(Array.isArray(fruits));
// console.log(fruits.indexOf('rache'));

// const person = {
//   firstName: 'Rache',
//   lastName: 'Melendres',
//   age: 28,
//   hobbies: ['books', 'finances'],
//   address: {
//     street: 'pipit',
//     city: 'munt'

//   }
// }

// const { firstName, lastName, address:{street} } = person;
// console.log(street);

// const todos = [
//   {
//     id: 1,
//     task: 'Clean room',
//     isCompleted: true
//   },

//   {
//     id: 2,
//     task: 'Submit report',
//     isCompleted: false
//   }
// ]

// console.log(todos[1].task)

// const todoJSON = JSON.stringify(todos);
// console.log(todoJSON);

// for (let i=0; i<todos.length; i++){
// console.log(todos[i].task);

// }

// for (let todo of todos){
//   console.log(todo.task);
  
//   }
// let i =0;
// while(i<10){
//   console.log(i);
//   i++;


// }

//forEach, map, filter

// todos.forEach(function(todo){
// console.log(todo.task);

// });

// const todoText = todos.map(function(todo){
//   return todo.task
  
//   });
// console.log(todoText);

// const todoCompleted = todos.filter(function(todo){
//   return todo.isCompleted ===true;
  
//   });
// console.log(todoCompleted);

// const todoComplete = todos.filter(function(todo){
//   return todo.isCompleted ==true;
  
//   });

// const completed = todoComplete.map(function(todo){

//     return todo.task;


// })
// console.log(completed);
