# PHP strpos() Loose Comparison Bug

This repository demonstrates a common, yet subtle, bug in PHP code involving the `strpos()` function and loose comparisons.  The issue arises because `strpos()` returns `false` when the needle is not found, but `false` also evaluates to `0` in a loose comparison (`!=`).  If the needle is found at the beginning of the haystack (index 0), the comparison will incorrectly evaluate to `true`, resulting in unexpected behavior.

The `bug.php` file contains the buggy code.  The `bugSolution.php` file shows the corrected code using strict comparison to resolve the issue.  This ensures that the check only passes if the needle is found at a valid positive index.