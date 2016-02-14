# Pixmania Parser

A PHP code to parse and print (to the commandline - standard output) product name, price and stock (is/is not on stock) of a product from an example page: 

http://www.pixmania.co.uk/consumer-dslr/canon-eos-700d-body-only/21326410-a.html

Example output:

```
Product: CANON EOS 700D body only
Price: 355.99
In stock: Yes
```

Running:

```
$ composer install

$ php pixmania-parser.php
```