# PHP metaprogramming examples

This repository contains examples of usage metaprogramming in PHP.

## What is metaprogramming exactly?

It is a program has knowledge to change itself at runtime.

## Why does write examples using PHP?

Althought PHP has not a good support to metaprogramming like Ruby or C#, it is possible to use it technice in PHP. And after searched at Google I didn't figure out a complete tutorial contains variat examples that exaplain how to do it in PHP.

# Examples

### Add a method to a object at runtime.

At first moment, the object `$student` has not a method `write()`:

```php
  use Metaprogramming\Student;
  $student = new Student();
  $student->write();
```

And the code above will throws the exception below:

```
  Error
  Call to undefined method Student::write()
```

Then, it is possible use the object `$teacher` to add the method `write` to `$student` object:

```php
<?php
  use Metaprogramming\Teacher;
  use Metaprogramming\Student;

  $teacher = new Teacher();
  $student = new Student();

  $teacher->teachToWrite($student);
```

Now the object `$student` has the method `write`:

```php
  echo $student->write();
  
  # the following output will be
  "Now I'm able to write!"