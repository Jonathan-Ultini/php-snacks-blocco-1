<?php
// Write an algorithm that takes an array and moves all of the zeros to the end, preserving the order of the other elements.

// moveZeros([false,1,0,1,2,0,1,3,"a"]) // returns[false,1,1,2,1,3,"a",0,0]

function findOutlier(integers) {
  const isEven = (Math.abs(integers[0]) % 2 + Math.abs(integers[1]) % 2 + Math.abs(integers[2]) % 2) < 2;

  for (let num of integers) {
    if ((Math.abs(num) % 2 === 0) !== isEven) {
      return num;
    }
  }
}
