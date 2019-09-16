# concept-nova

## Developer Test - 1

### Summary

As a kid, I was fascinated about privacy and encryption. It lead me to create my own ciphered language. To encipher a word, I would apply the following rules for every letter in a word:

First, all letters are changed to lowercase

The letter “a” will become “e”, and vice versa

The letter “o” will become “u”, and vice versa

The letter “p” will become “b”, and vice versa

The letter “t” will become “d”, and vice versa

The letter “s” will become “c”, and vice versa

The letter “j” will become “g”, and vice versa

The letter “m” will become “n”, and vice versa

Every two consecutive letters will become a single uppercase of that letter first, and then encrypted if necessary

## Your Task

Your task will be to write two functions in any language of your choice.

The first function will take a word or sentence as an argument, and return them in an enciphered form, using the rules above.

The second function will take a ciphered word or sentence as an argument, and return the deciphered form, using the rules above.
Examples

If we feed the following into your function “I am going to school”, it should output the following “i en juimj du cshOl”. Other examples are as follows:

Man = nem

Pool = bOl

Spoon = cbOm

Elephant = alabhemd

Adam = eten

Lamp = lenb

Hypertext Markup Language = hybardaxd nerkob lemjoeja

Commitment = suNidnamd

Success = coSaC

### You have 30 minutes

Solution Available here => https://github.com/successtar/concept-nova/blob/master/index.php


## Developer Test - 2

### Summary
Considering a series of seemingly random, unsigned integers, we would like
to know when an uptrend starts among those numbers. That is, when do the
numbers start to increase progressively? Also, when do the numbers start to
decrease progressively?

### Your Task
Your task will be to write one function in any language of your choice​,
that will take an array of unsigned integers as an argument and process it
considering the following
 
* An array of numbers contains an uptrend if there are three
consecutive increases between successive elements

* When an uptrend is detected, we need to know at which element
started the uptrend started

* An array of numbers contains a downtrend if there are three
consecutive decreases between successive elements

* When a downtrend is detected, we need to know at which element
started the downtrend started

* Your function should return an array of the following format:

[
uptrend => true|false,
downtrend => true|false,
index => -1|n (where n > -1)
]

If an uptrend was detected within the array of numbers, your function
should return the following: 

[
uptrend => true,
downtrend => false,
index => the array index at which the uptrend started
]

If a downtrend was detected within the array of numbers, your function
should return the following:

[
uptrend => false,
downtrend => true,
index => ​the array index at which the uptrend started
]

However, if neither an uptrend nor a downtrend was detected within the
array of numbers, your function should return the following:

[
uptrend => false,
downtrend => false,
index => -1
]

### Examples

Input array: [2, 3, 1, 19, 18, 12, 17, 18, 22, 32, 20, 11, 8, 5, 2]

Expected output:

[
uptrend => true,
downtrend => false,
index => 5
]

Input array: [32, 12, 11, 15, 11, 9, 8, 5, 2]

Expected output:

[
uptrend => false,
downtrend => true,
index => 3
]

Input array: [32, 12, 11, 15, 11, 9, 10, 8, 11, 5, 2]

Expected output:

[
uptrend => false,
downtrend => false,
index => -1
]

### You have 30 minutes

Solution Available here => https://github.com/successtar/concept-nova/blob/master/trend.php
