# PHP Array Access Bug

This repository demonstrates a common issue in PHP related to accessing array elements when the array contains a mix of numeric and associative keys.  The `bug.php` file shows the problematic code, and `bugSolution.php` provides a solution.

The bug arises because PHP's array implementation doesn't guarantee sequential numeric indices when associative keys are also present. Attempting to access elements solely by their numeric index can result in incorrect values or errors.

The solution highlights the importance of using the correct key type when iterating over and accessing array elements in PHP, ensuring the correct values are retrieved.