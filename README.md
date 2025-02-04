# PHP Array Iteration and Closure Behavior
This repository demonstrates two potential pitfalls in PHP programming:

1. **Array Key Iteration Order:** PHP arrays do not guarantee iteration order based on numerical keys. Elements are processed in the order they were added.
2. **Closure Variable Scope:** Closures (anonymous functions) in PHP create references to variables in their outer scope, not copies. Modifying a referenced variable within a closure alters the original variable.

The `bug.php` file shows examples of these behaviors, while `bugSolution.php` provides alternative approaches to avoid the issues.

## How to Run
1. Clone this repository.
2. Run the PHP files using a command-line PHP interpreter (e.g., `php bug.php`).