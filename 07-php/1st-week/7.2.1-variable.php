<?php
/* --------- 1. Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

/* --------- Valid Variables --------- */
$myVar;
$_counter;
$firstName;
$age123;
$UserInput;
$another_variable;

/* --------- Invalid Variables --------- */

$123number; // Started with number
$my-variable; // Contains a hypen
$if; // Reserved keyword 
$First Name; //Contains a space
$myvar@; // Contains a special character


/* --------- 2. Variable declaration and assignment --------- */
// Start with $
// Assignment operator (=) is used to assign a value to a variable

/* ---------- Variable Declaration -------- */
$firstName;
$age;

/* ---------- Variable Assignment -------- */
$firstName = "John"; // String Assignment (Variable Assign လုပ်တာ)
$age = 21; //Integer Assignment 
$grades = [90, 80, 70]; // Array Assignment
$isStudent = true; // Boolean Assignment

/* ---------- Variable Declaration and Assignment in one line -------- */
$lastName = "Doe";
/* ---------- Using Variable in Caculation -------- */
$z = $x + $y; // Sum
?>